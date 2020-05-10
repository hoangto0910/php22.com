<?php
require_once "Models/User.php";
require_once "Controllers/BaseController.php";
class UserController extends BaseController{
	public $model;
	function __construct(){
		$this->model = new User();
	}
		public function index(){//index
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$users = $this->model->getAll();
				$this->view("backend/user/index.php", [
					"users" => $users,
				]);
			}else{
				$this->view("backend/404.php");
			}
		}
		public function detail(){
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$id = $_GET['id'];
				$user = $this->model->getById($id);
				$this->view("backend/user/detail.php", [
					"user" => $user,
				]);
			}else{
				$this->view("backend/404.php");
			}
		}
		public function edit(){
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$id = $_GET['id'];
				$user = $this->model->getById($id);
				$this->view("backend/user/edit.php", [
					"user" => $user,
				]);
			}else{
				$this->view("backend/404.php");
			}
		}
		public function update(){
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$data = $_POST;
				$data['password'] = md5($data['password']);
				$id = $_POST['id'];
				$result = $this->model->Update($data, $id);
				if ($result) {
					setcookie("msg", "Sửa Thành Công", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=user&act=index");
				}else{
					setcookie("msg", "Sửa Thất bại", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=user&act=edit&id=$id");
				}
			}else{
				$this->view("backend/404.php");
			}
		}
		public function create(){//create
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$this->view("backend/user/create.php");
			}else{
				$this->view("backend/404.php");
			}
		}
		public function store(){//store
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$data = $_POST;
				$data['password'] = md5($data['password']);
				$result = $this->model->add($data);
				if ($result) {
					setcookie("msg","Tạo Mới Thành công",time() + 3);
					$this->redirect("/mvc_new/index.php?mod=user&act=index");
				}else{
					setcookie("msg","Tạo Mới fail",time() + 3);
					$this->redirect("/mvc_new/index.php?mod=user&act=create");
				}
			}else{
				$this->view("backend/404.php");
			}
		}
		public function destroy(){
			if ($_SESSION['user']['role'] == User::ROLE['admin']) {
				$id = $_GET['id'];
				$this->model->Delete($id);
				setcookie("msg","Xóa Thành Công",time() + 3);
				$this->redirect("/mvc_new/index.php?mod=user&act=index");
			}else{
				$this->view("backend/404.php");
			}
		}
	}
	?>