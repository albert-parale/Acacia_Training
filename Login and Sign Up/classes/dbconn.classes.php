<?php
	
	class DbConn
	{
		
		protected function connect()
		{
			try {
				private $servername = 'localhost';
				private $username = 'root';
				private $password = 'Albertparale080599!';
				private $dbname = 'Phonebook';
				private $conn;

				$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
				return $this->conn;			
					
			} catch (Exception $e) {
				print "Error!: " .$e->getMessage(). <br>;
				die();
			}
		}
	}
?>