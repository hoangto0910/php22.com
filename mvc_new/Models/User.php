<?php 
	require_once "Models/Model.php";
	class User extends Model{
		protected $table = "users";
		const ROLE = [
			"user" => 0,
			"admin" => 1,
			"content" => 2,
			"developer" => 3,
		];
	}
 ?>