<?php
	namespace App\Source;

	class Init
	{
		private $_config;

		public function __construct( $config )
		{
			$this->_set_config( $config );
		}

		private function _set_config( $config )
		{
			foreach ( $config[ MAIN_CONFIG ] as $name => $value )
			{
				$this->_config[ $name ] = $value;
			}

			foreach ( $config[ ENVIRONMENT ] as $name => $value )
			{
				$this->_config[ $name ] = $value;
			}
		}

		public function get_config()
		{
			return $this->_config;
		}
	}
