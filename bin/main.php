<?php


	/**
	 * WS Server CLI
	 * starts web-socket service process
	 * @version 0.0.1
	 * @author alfred.asi
	 */

	use App\Source\Init;
	use App\Source\Websocket;

	require '../vendor/autoload.php';
	require '../app/config/ws_config.php';
	require '../app/config/whitelist.php';
	require '../app/config/constants.php';

	$init = new Init( $config );
	$ws_config = $init->get_config();

	$web_socket = new Websocket();
	$web_socket->start_service( $ws_config, $white_list );
