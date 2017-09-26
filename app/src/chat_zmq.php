<?php
	namespace App\Source;

	use Ratchet\ConnectionInterface;
	use Ratchet\Wamp\WampServerInterface;

	class Chat_zmq implements WampServerInterface
	{
		// public function onSubscribe ( ConnectionInterface $conn, $topic ) {}
		/**
		* A lookup of all the topics clients have subscribed to
		*/
		protected $subscribedTopics = array();

		/**
		 * [on_chat_sent - message send]
		 * @param  JSON $data [string JSON'ified string we'll receive from ZeroMQ]
		 * @return [type]       [description]
		 */
		public function send_message ( $data )
		{
			// echo print_r( $data, TRUE );

			echo print_r( $data."\n", true );
			$post_data = json_decode( $data, true );
			// If the lookup topic object isn't set there is no one to publish to
			if ( ! array_key_exists( $post_data[ 'topic' ], $this->subscribedTopics ) )
			{
				return;
			}

			$topic = $this->subscribedTopics[ $post_data[ 'topic' ] ];

			// re-send the data to all the clients subscribed to that category
			$topic->broadcast( $post_data );
		}

		/**
		 * [onCall - An RPC( Remote Procedure Call ) call has been received]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[description]
		 * @param  string              			$id 	[The unique ID of the RPC( Remote Procedure Call ), required to respond to]
		 * @param  Ratchet\Wamp\Topic|string	$topic	[The topic to execute the call against]
		 * @param  array 						$params	[Call parameters received from the client]
		 * @return [type]                      [description]
		 */
		public function onCall ( ConnectionInterface $conn, $id, $topic, array $params )
		{
			// In this application if clients send data it's because the user hacked around in console
			// echo print_r( $conn, TRUE );
			echo print_r( $id, TRUE );
			echo print_r( $topic, TRUE );
			// echo print_r( $params, TRUE );

			$conn->callError( $id, $topic, 'You are not allowed to make calls' )->close();
		}

		/**
		 * [onSubscribe - A request to subscribe to a topic has been made]
		 * @param  Ratchet\ConnectionInterface 	$conn  	[description]
		 * @param  Ratchet\Wamp\Topic|string 	$topic 	[The topic to subscribe to]
		 * @return [type]                     			[description]
		 */
		public function onSubscribe ( ConnectionInterface $conn, $topic )
		{
			// echo print_r( $conn, TRUE );
			echo print_r( $topic->getId(), TRUE )."\n";
			$this->subscribedTopics[ $topic->getId() ] = $topic;
		}

		/**
		 * [onUnSubscribe - A request to unsubscribe from a topic has been made]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[description]
		 * @param  Ratchet\Wamp\Topic|string 	$topic 	[The topic to unsubscribe from]
		 * @return [type]                     			[description]
		 */
		public function onUnSubscribe ( ConnectionInterface $conn, $topic )
		{
			// echo print_r( $conn, TRUE );
			// echo print_r( $topic, TRUE );
		}

		/**
		 * [onPublish - A client is attempting to publish content to a subscribed connections on a URI]
		 * @param  Ratchet\ConnectionInterface	$conn		[description]
		 * @param  Ratchet\Wamp\Topic|string	$topic		[The topic the user has attempted to publish to]
		 * @param  string						$event		[Payload of the publish]
		 * @param  array 						$exclude  	[A list of session IDs the message should be excluded from (blacklist)]
		 * @param  array 						$eligible 	[A list of session Ids the message should be send to (whitelist)]
		 * @return [type]                        			[description]
		 */
		public function onPublish ( ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible )
		{
			// In this application if clients send data it's because the user hacked around in console
			if( $topic == 'a' && $event == 'b' )
	    	{
				/**
				 * @todo Client is pinging (anti-waf disconnect)
				 */
				// echo print_r( $conn, TRUE );
				// echo print_r( $id, TRUE );
				// echo print_r( $topic, TRUE )."\n";
				// echo print_r( $event, TRUE );
				// echo print_r( $exclude, TRUE );
				// echo print_r( $eligible, TRUE );
			}
			else
			{
				$conn->close();
			}
		}

		/**
		 * [Ratchet\ComponentInterface - onOpen - When a new connection is opened it will be passed to this method]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[The socket/connection that just connected to your application]
		 * @return [type]                    			[description]
		 */
		public function onOpen ( ConnectionInterface $conn )
		{
			// echo print_r( $conn, TRUE );
			echo "New connection! ({$conn->resourceId})\n";
		}

		/**
		 * [Ratchet\ComponentInterface - onClose - This is called before or after a socket is closed (depends on how it's closed). SendMessage to $conn will not result in an error if it has already been closed.]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[The socket/connection that is closing/closed]
		 * @return [type]                    			[description]
		 */
		public function onClose ( ConnectionInterface $conn )
		{
			// echo print_r( $conn, TRUE );
			echo "Connection {$conn->resourceId} has disconnected\n";
		}

		/**
		 * [Ratchet\ComponentInterface - onError - If there is an error with one of the sockets, or somewhere in the application where an Exception is thrown, the Exception is sent back down the stack, handled by the Server and bubbled back up the application through this method]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[description]
		 * @param  \Exception          			$e    	[description]
		 * @return [type]                    			[description]
		 */
		public function onError ( ConnectionInterface $conn, \Exception $e )
		{
			// echo print_r( $conn, TRUE );
			// echo print_r( $e, TRUE );
			echo "An error has occurred: {$e->getMessage()}\n";

			$conn->close();
		}
	}
