<?php 	
	class Connection{
		public $conn;
		function __construct(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "php_blog_new";
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			$this->conn->set_charset("utf8");
			if ($this->conn->connect_errno) {
				die($this->conn->connect_error);
			}
		}
	}
 ?>