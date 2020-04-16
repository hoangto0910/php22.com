<?php 
	require_once "Connection.php"; 
	class Model{
		public $table;
		public $conn;
		function __construct(){
			$connection = new Connection();
			$this->conn = $connection->conn;
		}
		function getAll(){
			$query = "SELECT * FROM $this->table";
			$result = $this->conn->query($query);
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		function getById($id){
			$query = "SELECT * FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			$data = $result->fetch_assoc();
			return $data;
		}
		function Store($data){
			$query = "INSERT INTO $this->table(";
			foreach ($data as $key => $value) {
				$query .= $key . ",";
			}
			$query = substr_replace($query, ")", -1);
			$query .= " VALUES (";
			foreach ($data as $value) {
				$query .= "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, ")", -1);
			$result = $this->conn->query($query);
			return $result;
		}
		function Update($data, $id){
			$query = "UPDATE $this->table SET ";
			foreach ($data as $key => $value) {
				$query .= $key . "=" . "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, "", -1);
			$query .= " WHERE id = " . $id;
			$result = $this->conn->query($query);
			return $result;
		}
		function Destroy($id){
			$query = "DELETE FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			return $result;
		}
	}
 ?>