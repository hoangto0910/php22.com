<?php
	require_once "Controllers/BaseController.php";
	require_once "Models/User.php";
	// require_once "Models/Helper.php";
	class UserController extends BaseController{
		private $model;
		function __construct(){
			$this->model = new User();
		}
		public function index(){
			$users = $this->model->getAll();
			$this->view("user/index.php", [
				"users" => $users,
 			]);
		}
		public function detail(){
			$id = $_GET['id'];
			$user = $this->model->getById($id);
			$this->view("user/detail.php", [
				"user" => $user,
			]);
		}
		public function create(){
			$this->view("user/create.php");
		}
		public function store(){
			// $helper = new Helper();
			$data = $_POST;
			$data['password'] = md5($data['password']);
			// $data['avatar'] = $helper->file_upload("uploads","avatar",500000000,array("jpg","png","jpeg","jfif"));
			$result = $this->model->add($data);
			if ($result) {
				setcookie("msg", "Thêm Thành Công", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=user&act=index");
			}else{
				setcookie("msg", "Thêm Thất Bại", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=user&act=create");
			}
		}
		public function edit(){
			$id = $_GET["id"];
			$user = $this->model->getById($id);
			$this->view("user/edit.php", [
				"user" => $user,
			]);
		}
		public function update(){
			// $helper = new Helper();
			$data = $_POST;
			$id = $_POST['id'];
			$data['password'] = md5($data['password']);
			// $data['thumbnail'] = $helper->file_upload("uploads","thumbnail",500000000,array("jpg","png","jpeg","jfif"));
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg", "Update Thành Công", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=user&act=index");
			}else{
				setcookie("msg", "Update Thất Bại", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=user&act=edit&id=$id");
			}
		}
		public function delete(){
			$id = $_GET['id'];
			$this->model->Delete($id);
			setcookie("msg", "Xóa Thành Công", time() + 3);
			$this->redirect("/Homework/php22.com/ex10/index.php?mod=user&act=index");
		}
	}
 ?>