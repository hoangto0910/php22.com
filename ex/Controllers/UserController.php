<?php
require_once "Models/User.php";
class UserController{
	public $model;
	function __construct(){
		$this->model = new User();
	}
		function index(){//index
			$users = $this->model->getAll();
			require_once "views/user/list.php";
		}
		function detail(){
			$id = $_GET['id'];
			$user = $this->model->getById($id);
			require_once "Views/User/detail.php";
		}
		function edit(){
			$id = $_GET['id'];
			$user = $this->model->getById($id);
			require_once "Views/User/edit.php";
		}
		function update(){
			$data = $_POST;
			$data['password'] = md5($data['password']);
			$id = $_POST['id'];
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg", "Sửa Thành Công", time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=user&act=list");
			}else{
				setcookie("msg", "Sửa Thất bại", time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=user&act=edit&id=$id");
			}
		}
		function create(){//create
			require_once "Views/User/add.php";
		}
		function store(){//store
			$data = $_POST;
			$data['password'] = md5($data['password']);
			$result = $this->model->Store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=user&act=list");
			}else{
				setcookie("msg","Tạo Mới fail",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=user&act=add");
			}
		}
		function destroy(){
			$id = $_GET['id'];
			$query = $this->model->Destroy($id);
			setcookie("msg","Xóa Thành Công",time() + 3);
			header("location: /Homework/php22.com/ex/index.php?mod=user&act=list");
		}
	}
?>