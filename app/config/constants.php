<?php

	define( 'MAIN_CONFIG',	'MAIN' );

	if ( preg_match( "/^SD-/", trim( gethostname() ) ) )
	{
		define( 'ENVIRONMENT' , 'LOCAL' );
	}
	else
	{
		define( 'ENVIRONMENT' , 'LOCAL' );
	}

	define( 'LOG_FILE', 	'log_file' );
	define( 'LOG_ERROR', 	'error_log_file' );
	define( 'LOG_MEM', 		'mem_log' );
