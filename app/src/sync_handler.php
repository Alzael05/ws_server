<?php
	namespace App\Source;

	use Ratchet\MessageComponentInterface;
	use Ratchet\ConnectionInterface;

	/**
	 * Synchronization Handler
	 * Syncs all hosts running the same web-socket system
	 */
	class SyncHandler implements MessageComponentInterface
	{
		// protected $clients;

		public function __construct ( $server_list )
		{
			// $this->clients = new \SplObjectStorage;
			$this->server_list = $server_list;
		}

		/**
		 * [Ratchet\ComponentInterface - onOpen - When a new connection is opened it will be passed to this method]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[The socket/connection that just connected to your application]
		 * @return [type]                    			[description]
		 */
		public function onOpen ( ConnectionInterface $conn )
		{
			// Store the new connection to send messages to later
			// $this->clients->attach($conn);

			// echo "New connection! ({$conn->resourceId})\n";
		}

		/**
		 * [Ratchet\ComponentInterface - onClose - This is called before or after a socket is closed (depends on how it's closed). SendMessage to $conn will not result in an error if it has already been closed.]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[The socket/connection that is closing/closed]
		 * @return [type]                    			[description]
		 */
		public function onClose ( ConnectionInterface $conn )
		{
			// The connection is closed, remove it, as we can no longer send it messages
			// $this->clients->detach($conn);

			// echo "Connection {$conn->resourceId} has disconnected\n";
		}

		/**
		 * [Ratchet\ComponentInterface - onError - If there is an error with one of the sockets, or somewhere in the application where an Exception is thrown, the Exception is sent back down the stack, handled by the Server and bubbled back up the application through this method]
		 * @param  Ratchet\ConnectionInterface 	$conn 	[description]
		 * @param  \Exception          			$e    	[description]
		 * @return [type]                    			[description]
		 */
		public function onError ( ConnectionInterface $conn, \Exception $e )
		{
			// echo "An error has occurred: {$e->getMessage()}\n";

			// $conn->close();
		}

		/**
		 * [Ratchet\MessageComponentInterface - onMessage - Triggered when a client sends data through the socket]
		 * @param  Ratchet\ConnectionInterface 	$from 	[The socket/connection that sent the message to your application]
		 * @param  string              			$msg  	[The message received]
		 * @return [type]                    			[description]
		 */
		public function onMessage ( ConnectionInterface $from, $msg )
		{
			$numRecv = count( $this->server_list ) - 1;
			echo sprintf( 'Connection %d sending message "%s" to %d other connection%s' . "\n", $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

			foreach ( $this->server_list as $host )
			{
				$host->send( $msg );
			}
		}
	}
