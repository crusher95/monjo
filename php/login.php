<?php 
	

	class Login{


		private $hostname = 'localhost';
		private $username = '';
		private $passowrd = '';
		private $port = '27017';
		private $mongo = '';

		function __construct($hostname,$username,$passowrd,$port){
			$this->hostname = $hostname;
			$this->username = $username;
			$this->passowrd = $passowrd;
			$this->port = $port;
		}


		function establish_connection(){
			try {

			    $this->mongo = new MongoDB\Driver\Manager("mongodb://".$this->hostname.":".$this->port); 		    
			} catch (MongoDB\Driver\Exception\Exception $e) {

			    $filename = basename(__FILE__);
			    
			    echo "The $filename script has experienced an error.\n"; 
			    echo "It failed with the following exception:\n";
			    
			    echo "Exception:", $e->getMessage(), "\n";
			    echo "In file:", $e->getFile(), "\n";
			    echo "On line:", $e->getLine(), "\n";       
			}
			return $this->mongo;
		}
 
		function authentication_connection(){
			try {

			    $this->mongo = new MongoDB\Driver\Manager("mongodb://".$this->username.":".$this->passowrd."@".$this->hostname.":".$this->port);
			 

			} catch (MongoDB\Driver\Exception\Exception $e) {

			    $filename = basename(__FILE__);
			    
			    echo "The $filename script has experienced an error.\n"; 
			    echo "It failed with the following exception:\n";
			    
			    echo "Exception:", $e->getMessage(), "\n";
			    echo "In file:", $e->getFile(), "\n";
			    echo "On line:", $e->getLine(), "\n";       
			}
			return $this->mongo;	
		}


	}


?>