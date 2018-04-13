<?php 
	
	class Database{

		var $mongo;
		function __construct($conn){
			$this->mongo = $conn;
		}

		function listDatabases(){
			try {

			    $listdatabases = new MongoDB\Driver\Command(["listDatabases" => 1]);
			    $res = $this->mongo->executeCommand("admin", $listdatabases);

			    return current($res->toArray());			
			}catch (MongoDB\Driver\Exception\Exception $e) {

			    echo "<script type='text/javascript'>swal({title:'Error Occured!',text:' Please check your settings!',icon:'error',button:'Retry'}).then((value)=>{window.location.href='login.php'});</script>";
			}
		}

	}

 ?>