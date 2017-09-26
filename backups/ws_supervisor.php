<?php
	/**
	 * Starts a supervisor for the websocket service
	 * @author dominick.nav
	 */

	$command_main_pid 	= "nohup php /var/www/html/ws_server/app/bin/main.php >> /var/log/ws_restart.log & echo $! > /var/www/html/ws_server/app/bin/main.pid";
	$command_callback_pid = "nohup php /var/www/html/ws_server/app/bin/callback_processor.php >> callback.log & echo $! > /var/www/html/ws_server/app/bin/callback.pid";
	$command_sync_pid 	= "nohup php /var/www/html/ws_server/app/bin/sync_processor.php >> sync.log & echo $! > /var/www/html/ws_server/app/bin/sync.pid";

	start:
	if ( ! file_exists( "/var/www/html/ws_server/app/bin/main.pid" ) )
	{
		exec( $command_main_pid );
		exec( $command_callback_pid );
		exec( $command_sync_pid );
		exit();
	}

	while ( true )
	{
		$socket = @fsockopen( trim( gethostname() ), 8080 );
		if ( ! $socket )
		{
			$main_pid 		= file_get_contents( "/var/www/html/ws_server/app/bin/main.pid" );
			$callback_pid 	= file_get_contents( "/var/www/html/ws_server/app/bin/callback.pid" );
			$sync_pid 		= file_get_contents( "/var/www/html/ws_server/app/bin/sync.pid" );

			if ( $main_pid ) exec( "kill ".$main_pid );
			if ( $callback_pid ) exec( "kill ".$callback_pid );
			if ( $sync_pid ) exec( "kill ".$sync_pid );

			exec( $command_main_pid );
			exec( $command_callback_pid );
			exec( $command_sync_pid );

			exit();
		}
		else
		{
			@fclose( $socket );
		}
	}
	goto start;
