<?php 
	class BaseController{
		public function view($path, $data = [], $page = ""){
			if (!empty($data)) {
				extract($data);
			}
			require_once ("Views/" . $path);
		}
		public function redirect($path){
			header("location: " . $path);
		}
	}
 ?>