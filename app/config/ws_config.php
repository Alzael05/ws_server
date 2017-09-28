<?php

	$config[ 'MAIN' ] = array(
		'bind_port'     => 5555,
		'bind_ip'       => '127.0.0.1',
		'listen_port'  => 8080,
		'listen_ip'    => '0.0.0.0',
		// 'sync_port'     => '5556',
		// 'callback_port' => '5557'
	);
	// $config[ 'MAIN' ][ 'receive_port'    ] = '5555';
	// $config[ 'MAIN' ][ 'receive_ip'      ] = '0.0.0.0';
	// $config[ 'MAIN' ][ 'bind_port'       ] = '8080';
	// $config[ 'MAIN' ][ 'bind_ip'         ] = '0.0.0.0';
	// $config[ 'MAIN' ][ 'sync_port'       ] = '5556';
	// $config[ 'MAIN' ][ 'callback_port'   ] = '5557';

	$config[ 'LOCAL' ] = array(
		'server_name'    => trim( gethostname() ),//'SD-019',
		'server_ip'      => '192.168.248.136',
		// 'base_url'       => 'https://10.0.2.15/ws/master_v2',
		'log_file'       => 'C:\xampp\htdocs\ws_server\log\ws_server',
		'error_log_file' => 'C:\xampp\htdocs\ws_server\log\ws_error',
		'mem_log'        => 'C:\xampp\htdocs\ws_server\log\ws_mem'
	);
	// $config[ 'LOCAL' ][ 'server_name'    ] = trim( gethostname() );//'SD-019';
	// $config[ 'LOCAL' ][ 'server_ip'      ] = '192.168.248.136';
	// $config[ 'LOCAL' ][ 'base_url'       ] = 'https://10.0.2.15/ws/master_v2';
	// $config[ 'LOCAL' ][ 'log_file'       ] = 'C:\xampp\htdocs\local_slave_onyx_wsserver\log\ws_server.log';
	// $config[ 'LOCAL' ][ 'error_log_file' ] = 'C:\xampp\htdocs\local_slave_onyx_wsserver\log\ws_error.log';
	// $config[ 'LOCAL' ][ 'mem_log'        ] = 'C:\xampp\htdocs\local_slave_onyx_wsserver\log\ws_mem.log';
	// $config[ 'LOCAL' ][ 'notifications'    ] = 'alf.asi@nuevasys.ph';
	// $config[ 'LOCAL' ][ 'cached'           ] = '10.22.3.4';
	// $config[ 'LOCAL' ][ 'ws_logout'        ] = 'https://338alab.casino.sbo/WS_LOGOUT';
