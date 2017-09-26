<?php
	namespace App\Source;


	/**
	 * class for logging
	 */
	class Log
	{
		protected $config;

		public function __construct( $config )
		{
			$this->config = $config;

			echo print_r( $this, TRUE );

			// if ( function_exists( 'getrusage' ) )
			// {
			// 	$dat = getrusage();
			// 	define( 'PHP_TUSAGE', microtime( true ) );
			// 	define( 'PHP_RUSAGE', $dat[ "ru_utime.tv_sec" ] * 1000000 + $dat[ "ru_utime.tv_usec" ] );
			// }
			// else
			// {
			// 	define( 'PHP_TUSAGE', microtime( true ) );
			// 	define( 'PHP_RUSAGE', 0 );
			// }
		}

		public function log_message( $data )
		{
			try
			{
				$log_file = @fopen( "messages_".time().".log", "a" );
				if( $log_file )
				{
					@fwrite( $log_file, $data."\r\n" );
					@fclose( $log_file );
				}
			}
			catch( Exception $e )
			{
				error_log( $e->getMessage(), 3, ERROR_LOG_FILE );
			}
		}

		public function log_data( $data )
		{
			try
			{
				$log_file = @fopen( $this->config[ LOG_FILE ]."_".time().".log", "a" );
				if( $log_file )
				{
					@fwrite( $log_file, $data."\t\t".date( "Y-m-d H:i:s" )."\r\n" );
					@fclose( $log_file );
				}
			}
			catch( Exception $e )
			{
				error_log( $e->getMessage(), 3, ERROR_LOG_FILE );
			}
		}


	}
