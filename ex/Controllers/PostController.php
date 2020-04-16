<?php
	require_once "Models/Post.php";
	class PostController{
		public $model;
		function __construct(){
			$this->model = new Post();
		}
		function index(){//index
			$posts = $this->model->getAll();
			require_once "views/post/list.php";
		}
		function detail(){
			$id = $_GET['id'];
			require_once "Models/User.php";
			require_once "Models/Category.php";
			$users = new User();
			$categories = new Category();
			$post = $this->model->getById($id);
			$user = $users->getById($post['user_id']);
			$category = $categories->getById($post['category_id']);
			$post["user"] = $user;
			$post["category"] = $category;
			require_once "Views/Post/detail.php";
		}
		function edit(){
			$id = $_GET['id'];
			require_once "Models/User.php";
			require_once "Models/Category.php";
			$users = new User();
			$categories = new Category();
			$users = $users->getAll();
			$categories = $categories->getAll();
			$post = $this->model->getById($id);
			require_once "Views/Post/edit.php";
		}
		function update(){
			require_once "Models/helper.php";
			$data = $_POST;
			$data['slug'] = $data['title'];
			$data['slug'] = to_slug($data['slug']);
			$id = $_POST['id'];
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg", "Sửa Thành Công", time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=post&act=list");
			}else{
				setcookie("msg", "Sửa Thất bại", time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=post&act=edit&id=$id");
			}
		}
		function create(){//create
			require_once "Models/User.php";
			require_once "Models/Category.php";
			$users = new User();
			$categories = new Category();
			$users = $users->getAll();
			$categories = $categories->getAll();
			require_once "Views/Post/add.php";
		}
		function store(){//store
			require_once "Models/helper.php";
			$data = $_POST;
			$data['slug'] = $data['title'];
			$data['slug'] = to_slug($data['slug']);
			$result = $this->model->Store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=post&act=list");
			}else{
				setcookie("msg","Tạo Mới fail",time() + 3);
				header("location: /Homework/php22.com/ex/index.php?mod=post&act=add");
			}
		}
		function destroy(){
			$id = $_GET['id'];
			$query = $this->model->Destroy($id);
			setcookie("msg","Xóa Thành Công",time() + 3);
			header("location: /Homework/php22.com/ex/index.php?mod=post&act=list");
		}
	}
 ?>