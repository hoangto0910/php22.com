<?php
require_once "Models/Category.php";
require_once "Controllers/BaseController.php";
require_once "Models/helper.php";
require_once "Models/User.php";
class CategoryController extends BaseController{
	public $model;
	function __construct(){
		$this->model = new Category();
	}
	public function index(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$categories = $this->model->getAll();
			$this->view("backend/category/index.php", [
				"categories" => $categories,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function detail(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			$this->view("backend/category/detail.php", [
				"category" => $category,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function edit(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			$this->view("backend/category/edit.php", [
				"category" => $category,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function update(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$helper = new Helper();
			$data = $_POST;
			$data['slug'] = $data['name'];
			$data['slug'] = $helper->to_slug($data['slug']);
			$id = $_POST['id'];
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg","Sửa Thành công",time() + 3);
				$this->redirect("/mvc_new/index.php?mod=category&act=index");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				$this->redirect("/mvc_new/index.php?mod=category&act=edit&id=$id");
			}
		}else{
			$this->view("backend/404.php");
		}
	}

	public function create(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$this->view("backend/category/create.php");
		}else{
			$this->view("backend/404.php");
		}
	}

	public function store(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$helper = new Helper();
			$data = $_POST;
			// $data['slug'] = $data['name'];
			// $data['slug'] = $helper->to_slug($data['slug']);
			$result = $this->model->add($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				$this->redirect("/mvc_new/index.php?mod=category&act=index");
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				$this->redirect("/mvc_new/index.php?mod=category&act=create");
			}
		}else{
			$this->view("backend/404.php");
		}
	}
	
	public function destroy(){
		if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']){
			$id = $_GET['id'];
			$this->model->Delete($id);
			setcookie("msg","Xóa Thành Công",time() + 3);
			$this->redirect("/mvc_new/index.php?mod=category&act=index");
		}else{
			$this->view("backend/404.php");
		}
	}
}
?>