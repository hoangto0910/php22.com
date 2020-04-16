<?php
	require_once "Models/Category.php";
	class CategoryController{
		public $model;
		function __construct(){
			$this->model = new Category();
		}
		function index(){
			$categories = $this->model->getAll();
			require_once "views/category/list.php";
		}
		function detail(){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			require_once "views/category/detail.php";
		}
		function edit(){
			$id = $_GET['id'];
			$category = $this->model->getById($id);
			require_once "views/category/edit.php";
		}
		function update(){
			require_once "Models/helper.php";
			$data = $_POST;
			$data['slug'] = $data['name'];
			$data['slug'] = to_slug($data['slug']);
			$id = $_POST['id'];
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=category&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=category&act=add");
			}
			header("location: /Homework/php22.com/ex/index.php?mod=category&act=list");
		}
		function create(){
			require_once "Views/category/add.php";
		}
		function store(){
			require_once "Models/helper.php";
			$data = $_POST;
			$data['slug'] = $data['name'];
			$data['slug'] = to_slug($data['slug']);
			$result = $this->model->Store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=category&act=list");
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=category&act=add");
			}
		}
		function destroy(){
			$id = $_GET['id'];
			$query = $this->model->Destroy($id);
			setcookie("msg","Xóa Thành Công",time() + 3);
			header("location: /Homework/php22.com/ex/index.php?mod=category&act=list");
		}
	}
 ?>