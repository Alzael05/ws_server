<?php
	namespace App\Source;

	use React\EventLoop\Factory;
	use React\ZMQ\Context;
	use React\Socket\Server;

	use Ratchet\Wamp\WampServer;
	use Ratchet\WebSocket\WsServer;
	use Ratchet\Http\OriginCheck;
	use Ratchet\Http\HttpServer;
	use Ratchet\Server\IoServer;

	use App\Source\WS_Handler;
	// use Ratchet\MessageComponentInterface;
	// use Ratchet\ConnectionInterface;


	class Websocket
	{
		public function __construct()
		{
		}

		public function start_service (  $ws_config, $white_list  )
		{
			$event_loop = Factory::create();
			$ws_handler = new WS_Handler( $ws_config );

			// Listen for the web server to make a ZeroMQ push after an ajax request
			$context    = new Context( $event_loop );
			$pull       = $context->getSocket( \ZMQ::SOCKET_PULL ); // $pull = $context->getSocket( \ZMQ::SOCKET_SUB ); // $pull->setSockOpt( \ZMQ::SOCKOPT_SUBSCRIBE, 'sample' );
			$pull->bind( "tcp://{$ws_config['bind_ip']}:{$ws_config['bind_port']}" ); // Binding to 127.0.0.1 means the only client that can connect is itself // $pull->bind( 'tcp://0.0.0.0:5555' );
			// $pull->bind( "tcp://127.0.0.1:5555" ); // Binding to 127.0.0.1 means the only client that can connect is itself // $pull->bind( 'tcp://0.0.0.0:5555' );
			$pull->on( 'message', array( $ws_handler , 'send_message' ) );

			/*
				$pub = $context->setSocket( \ZMQ::SOCKET_PUB );
				$pub->send

				$sub = $context->getSocket( \ZMQ::SOCKET_SUB );
				$sub->setSockOpt( \ZMQ::SOCKOPT_SUBSCRIBE );
				$sub->connect( 'tcp://127.0.0.1:5555' );

				$poll = new ZMQPoll();
				$poll->add( $sub, \ZMQ::POLL_IN );
			*/

			// Set up our WebSocket server for clients wanting real-time updates
			$web_sock     = new Server( $event_loop );
			$web_sock->listen( $ws_config['listen_port'], $ws_config['listen_ip'] ); // Binding to 0.0.0.0 means remotes can connect
			// $web_sock->listen( 8443, '0.0.0.0' ); // Binding to 0.0.0.0 means remotes can connect

			$_wamp_server = new WampServer( $ws_handler  );

			$_ws_server   = new WsServer( $_wamp_server );

			$_origin_chck = new OriginCheck( $_ws_server, $white_list );// based only on configuration

			$_http_server = new HttpServer( $_origin_chck );

			$web_server   = new IoServer( $_http_server , $web_sock );

			$event_loop->run();
		}

		// public function start_session ()
		// {

		// }
	}
