<?php
	require_once "Models/Connection.php";
	class Model{
		protected $table;
		protected $conn;
		private $query = [
			"SELECT" => "",
			"WHERE" => "",
			"ORDERBY" => "",
			"LIMIT" => "",
			"LIMITPAGE" => "",
			"GET" => "",
			"JOIN" => "",
		];

		function __construct(){
			$connection = new Connection();
			$this->conn = $connection->getConn();
		}

		public function select($columns = []){
			if (empty($columns)) {
				$this->query["SELECT"] = "*";
			}else{
				foreach ($columns as $key => $value) {
					$this->query["SELECT"] .= $value . ",";
				}
				$this->query["SELECT"] = substr_replace($this->query["SELECT"], "", -1);
			}
			return $this;
		}

		public function where($conditions = []){
			foreach ($conditions as $key => $condition) {
				if (is_array($condition)) {
					$this->query['WHERE'] .= implode(" ", $condition) . " and ";
				}else{
					$this->query['WHERE'] .= $key . " = " . "'" . $condition . "'" . " and ";
				}
			}
			$this->query['WHERE'] = substr($this->query['WHERE'], 0, -4);
			return $this;
		}

		public function orderBy($column, $condition){
			$this->query['ORDERBY'] .= $column . " " . $condition;
			return $this;
		}

		public function limit($int){
			$this->query['LIMIT'] .= $int;
			return $this;
		}

		public function limitPage($from, $sotin1trang){
			$this->query['LIMITPAGE'] .= $from . ", " . $sotin1trang;
			return $this;
		}

		public function join($table, $column, $columnMain){
			$this->query['JOIN'] .= $table . " ON " . $column . " = " . $columnMain;
			return $this;
		}

		public function get(){
			$query = "";
			if ($this->query["SELECT"] == "" || $this->query["SELECT"] == "*") {
				$query .= "SELECT * ";
			}else{
				$query .= "SELECT " . $this->query["SELECT"];
			}
			$query .= " FROM " . $this->table;
			if ($this->query['WHERE'] != "") {
				$query .= " WHERE " . $this->query['WHERE'];
			}
			if ($this->query['ORDERBY'] != "") {
				$query .= " ORDER BY " . $this->query['ORDERBY'];
			}
			if ($this->query['JOIN'] != "") {
				$query .= " INNER JOIN " . $this->query['JOIN'];
			}
			if ($this->query['LIMIT'] != "") {
				$query .= " LIMIT " . $this->query['LIMIT'];
			}
			if ($this->query['LIMITPAGE'] != "") {
				$query .= " LIMIT " . $this->query['LIMITPAGE'];
			}
			// die($query);
			$result = $this->conn->query($query);
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}

		public function where2($columns, $value = null){
        if (is_array($columns)){
            $where = '';
            foreach ($columns as $column => $value){
                $where .= "$column = '$value'";
                $where .= " AND ";
            }
            $where = rtrim($where, " AND");
        }else{
            $where = "$columns = '$value'";
        }

        $query = "SELECT * from " . $this->table . " WHERE " . $where;
        // die($query);
        $result = $this->connection->query($query);

        $data = array();

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
		}

		public function getAll(){
			$query = "SELECT * FROM $this->table";
			$result = $this->conn->query($query);
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}

		public function add($data){
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
			// die($query);
			$result = $this->conn->query($query);
			return $result;
		}

		public function getById($id){
			$query = "SELECT * FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			$data = $result->fetch_assoc();
			return $data;
		}

		public function Update($data, $id){
			$query = "UPDATE $this->table SET ";
			foreach ($data as $key => $value) {
				$query .= $key . "=" . "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, "", -1);
			$query .= " WHERE id = " . $id;
			$result = $this->conn->query($query);
			return $result;
		}

		public function Delete($id){
			$query = "DELETE FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
		}

	}
 ?>