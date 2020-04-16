<?php
	require_once "model.php";
	class Category extends Model{
		public $table = "categories";
		// public $connection;
		// function __construct(){
		// 	$this->connection = new mysqli("localhost", "root", "", "php_blog_new");
		// }
		// function getAll(){
		// 	$query = "SELECT * FROM categories";
		// 	$result = $this->connection->query($query);
		// 	$data = array();
		// 	while ($row = $result->fetch_assoc()) {
		// 		$data[] = $row;
		// 	}
		// 	return $data;
		// }
		// function getById($id){
		// 	$query = "SELECT * FROM categories WHERE id = " . $id;
		// 	$result = $this->connection->query($query);
		// 	$data = $result->fetch_assoc();
		// 	return $data;
		// }
		// function Edit($data, $id){
		// 	$query = "UPDATE categories SET ";
		// 	foreach ($data as $key => $value) {
		// 		$query .= $key . "=" . "'" . $value . "'" . ",";
		// 	}
		// 	$query = substr_replace($query, "", -1);
		// 	$query .= " WHERE id = " . $id;
		// 	$result = $this->connection->query($query);
		// // $query = "UPDATE categories SET name='". $data['name'] . "',parent_id='".$data['parent_id']."',thumbnail='".$data['thumbnail']."',slug='".$data['slug']."',description='". $data['description'] ."' WHERE id=" . $id ;

		// // $result = $this->connection->query($query);
		// }
	}
 ?>