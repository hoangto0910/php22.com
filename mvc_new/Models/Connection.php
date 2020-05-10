<?php 
	class Connection{
		protected $conn;
		function __construct(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db_name = "php_blog_new";
			$this->conn = new mysqli($servername, $username, $password, $db_name);
			$this->conn->set_charset("utf8");	
		}
		public function getConn(){
			return $this->conn;
		}
	}
 ?>