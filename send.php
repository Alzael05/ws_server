<?php

	echo print_r( $_POST, TRUE );

	$entryData = array(
		'category'	=> $_POST[ 'category' ],
		'topic'		=> $_POST[ 'topic' ],
		'message'	=> $_POST[ 'message' ],
		'when'		=> time()
	);

	// This is our new stuff
	$context = new ZMQContext();
	$socket = $context->getSocket( ZMQ::SOCKET_PUSH, $entryData[ 'topic' ] );
	$socket->connect( "tcp://localhost:5555" );

	$socket->send( json_encode( $entryData ) );


	// $ctx =  new ZMQContext();
	// $send = $ctx->getSocket( ZMQ::SOCKET_PUSH );
	// $socket->connect( "tcp://localhost:5555" );
