<?php
	require_once "Models/Category.php";
	require_once "Controllers/BaseController.php";
	require_once "Models/Helper.php";
	class CategoryController extends BaseController{
		private $model;
		function __construct(){
			$this->model = new Category();
		}
		public function index(){
			$categories = $this->model->getAll();
			$this->view("category/index.php", [
				"categories" => $categories,
 			]);
		}
		public function detail(){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			$this->view("category/detail.php", [
				"category" => $category,
			]);
		}
		public function create(){
			$this->view("category/create.php");
		}
		public function store(){
			$helper = new Helper();
			$data = $_POST;
			$data['slug'] = $data['name'];
			$data['slug'] = $helper->to_slug($data['slug']);
			$data['thumbnail'] = $helper->file_upload("uploads","thumbnail",500000000,array("jpg","png","jpeg","jfif"));
			$result = $this->model->add($data);
			if ($result) {
				setcookie("msg", "Thêm Thành Công", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=category&act=index");
			}else{
				setcookie("msg", "Thêm Thất Bại", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=category&act=create");
			}
		}
		public function edit(){
			$id = $_GET["id"];
			$category = $this->model->getById($id);
			$this->view("category/edit.php", [
				"category" => $category,
			]);
		}
		public function update(){
			$helper = new Helper();
			$data = $_POST;
			$id = $_POST['id'];
			$data['slug'] = $data['name'];
			$data['slug'] = $helper->to_slug($data['slug']);
			// $data['thumbnail'] = $helper->file_upload("uploads","thumbnail",500000000,array("jpg","png","jpeg","jfif"));
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg", "Update Thành Công", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=category&act=index");
			}else{
				setcookie("msg", "Update Thất Bại", time() + 3);
				$this->redirect("/Homework/php22.com/ex10/index.php?mod=category&act=edit&id=$id");
			}
		}
		public function delete(){
			$id = $_GET['id'];
			$this->model->Delete($id);
			setcookie("msg", "Xóa Thành Công", time() + 3);
			$this->redirect("/Homework/php22.com/ex10/index.php?mod=category&act=index");
		}
	}
 ?>