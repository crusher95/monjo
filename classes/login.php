<?php 
	

	class Login{


		var $hostname = 'localhost';
		var $username = '';
		var $passowrd = '';
		var $port = '';


		function __construct($hostname,$username,$passowrd,$port){
			$this->hostname = $hostname;
			$this->username = $username;
			$this->passowrd = $passowrd;
			$this->port = $port;
		}


		function establish_connection(){

		}
	}

?>