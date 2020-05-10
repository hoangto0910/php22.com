<?php
require_once "Models/Post.php";
require_once "Controllers/BaseController.php";
require_once "Models/User.php";
require_once "Models/Category.php";
require_once "Models/Helper.php";
require_once "Models/Postsw.php";
class PostController extends BaseController{
	private $model;
	function __construct(){
		$this->model = new Post();
	}
	public function index(){
			// $posts = $this->model->select(["id","title","description","created_at"])->orderBy("created_at", "DESC")->get();
			// $post2s = $this->model->select(["id","title","description"])->where(["category_id" => 20,"user_id" => 20])->get();
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$posts = $this->model->getAll();
			$this->view("backend/post/index.php", [
				"posts" => $posts,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function create(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$user = new User();
			$users = $user->getAll();
			$category = new Category();
			$categories = $category->getAll();
			$this->view("backend/post/create.php", [
				"users" => $users,
				"categories" => $categories,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function store(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			// Lấy 1 bản ghi where id = $id gửi từ bên postAccess sang (Các bài viết đang chờ)
			$id = $_GET['id'];
			$postsw = new Postsw();
			$postswait = $postsw->select(["title","description","thumbnail","content","slug","view_count","user_id","category_id"])->where(["id" => $id])->get();
			$postw = $postswait[0];
			$data = $postw;
			$postsw->Delete($id);
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";
			// die();
			$helper = new Helper();
			$data['slug'] = $data['title'];
			$data['slug'] = $helper->to_slug($data['slug']);
			$data['thumbnail'] = $helper->file_upload("uploads", "thumbnail", 5000000, ["img","jpg","jpeg"]);
			$result = $this->model->add($data);
			if ($result) {
				setcookie("msg", "Thêm thành công", time() + 3);
				$this->redirect("/mvc_new/index.php?mod=post&act=index");
			}else{
				setcookie("msg", "Thêm thất bại", time() + 3);
				$this->redirect("/mvc_new/index.php?mod=post&act=create");
			}
		}else{
			$this->view("backend/404.php");
		}
	}


	//
	public function viewPost(){
		$posts = $this->model->getAll();
		$this->view("backend/post/viewPost.php", [
			"posts" => $posts,
		]);
	}

	// Đăng bài viết chưa duyệt rồi View sang addPost báo thành công
	public function addPost(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$data = $_POST;
			$postsw = new Postsw();
			$result = $postsw->add($data);
			if ($result) {
				setcookie("msg", "Thêm thành công", time() + 3);
				$this->view("backend/post/addPost.php");
			}else{
				setcookie("msg", "Thêm thất bại", time() + 3);
				$this->redirect("/mvc_new/index.php?mod=post&act=create");
			}
		}else{
			$this->view("backend/404.php");
		}
	}

	public function postAccess(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$postsw = new Postsw();
			$postsw = $postsw->getAll();
			$this->view("backend/post/postAccess.php",[
				"postsw" => $postsw,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}
	//

	public function detail(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$id = $_GET['id'];
			$post = $this->model->getById($id);
			$user = new User();
			$user = $user->getById($post['user_id']);
			$category = new Category();
			$category = $category->getById($post['category_id']);
			$post['user'] = $user;
			$post['category'] = $category;
			$this->view("backend/post/detail.php", [
				"post" => $post,
				"user" => $user,
				"category" => $category,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function edit(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$id = $_GET['id'];
			$post = $this->model->getById($id);
			$user = new User();
			$users = $user->getAll();
			$category = new Category();
			$categories = $category->getAll();
			$this->view("backend/post/edit.php", [
				"post" => $post,
				"users" => $users,
				"categories" => $categories,
			]);
		}else{
			$this->view("backend/404.php");
		}
	}

	public function update(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$id = $_POST['id'];
			$data = $_POST;
			$helper = new Helper();
			// $data['slug'] = $data['title'];
			// $data['slug'] = $helper->to_slug($data['slug']);
			// $data['thumbnail'] = $helper->file_upload("uploads", "thumbnail", 5000000, ["img","jpg","jpeg"]);
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg", "Update thành công", time() + 3);
				$this->redirect("/mvc_new/index.php?mod=post&act=index");
			}else{
				setcookie("msg", "Update thất bại", time() + 3);
				$this->redirect("/mvc_new/index.php?mod=post&act=edit&id=$id");
			}
		}else{
			$this->view("backend/404.php");
		}
	}

	public function delete(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$id = $_GET['id'];
			$this->model->Delete($id);
			setcookie("msg", "Delete thành công", time() + 3);
			$this->redirect("/mvc_new/index.php?mod=post&act=index");
		}else{
			$this->view("backend/404.php");
		}
	}

	public function postwaiting(){
		if ($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) {
			$this->view("backend/post/postwaiting.php");
		}else{
			$this->view("backend/404.php");
		}
	}
}
?>