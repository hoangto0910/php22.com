<?php
require_once "Models/Post.php";
require_once "Models/Category.php";
require_once "Controllers/BaseController.php";
require_once "Models/User.php";
class HomeController extends BaseController{
	private $post;
	function __construct(){
		$this->post = new Post();
	}

	public function login(){
		$this->view("backend/dashboard.php",[
			"user" => $_SESSION['user'],
		]);
	}

	public function error(){
		$this->view("backend/404.php");
	}

	public function index(){
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		$sotin1trang = 5;
		$from = ($page - 1) * $sotin1trang;
		$posts_menu = $this->post->select(["id","title","thumbnail","created_at","slug"])->where(["category_id" => 8])->limit(8)->get();
			// echo "<pre>";
			// 	print_r($posts_menu);
			// echo "</pre>";
		$this->model = new Post();
		$posts_blog = $this->model->select(["id","title","thumbnail","description","created_at","slug","view_count"])->orderBy("created_at", "DESC")->limitPage($from, $sotin1trang)->get();
		
		$this->popular = new Post();
		$posts_popular = $this->popular->select(["id","title","thumbnail","created_at","slug","view_count"])->where(["category_id" => 8])->orderBy("view_count", "DESC")->limit(5)->get();
		
		$this->category = new Category();
		$categories = $this->category->select(["id","name","slug"])->get();
		
		$this->view("frontend/show/index.php", [
			"posts_menu" => $posts_menu,
			"posts_blog" => $posts_blog,
			"posts_popular" => $posts_popular,
			"categories" => $categories,
		], $page = $page);
	}

	public function showPost(){
		$id = $_GET['id'];
			// $slug = $_GET['slug'];
			// $path = $slug . ".php";
		$posts_menu = $this->post->select(["id","title","thumbnail","created_at","slug"])->where(["category_id" => 8])->limit(8)->get();
		
		$this->model = new Post();
		$posts_detail = $this->model->select([""])->where(["id" => $id])->get();
			// echo "<pre>";
			// 	print_r($posts_detail);
			// echo "</pre>";
			// die();
		$user = new User();
		$user = $user->getById($posts_detail[0]['user_id']);
		$category = new Category();
		$category = $category->getById($posts_detail[0]['category_id']);
		$posts_detail[0]['user'] = $user;
		$posts_detail[0]['category'] = $category;

		$this->popular = new Post();
		$posts_popular = $this->popular->select(["id","title","thumbnail","created_at","slug","view_count"])->where(["category_id" => 8])->orderBy("view_count", "DESC")->limit(5)->get();
		
		$this->category = new Category();
		$categories = $this->category->select(["id","name","slug"])->get();
		
		$this->view("frontend/pages/showPost.php", [
			"posts_menu" => $posts_menu,
			"posts_detail" => $posts_detail,
			"posts_popular" => $posts_popular,
			"categories" => $categories,
		]);
	}
	
	public function showCategory(){
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		$slug = $_GET['slug'];
		$path = $slug . ".php" ;
		$sotin1trang = 3;
		$from = ($page - 1) * $sotin1trang;

		$posts_menu = $this->post->select(["id","title","thumbnail","created_at","slug"])->where(["category_id" => 8])->limit(8)->get();

		$this->popular = new Post();
		$posts_popular = $this->popular->select(["id","title","thumbnail","created_at","slug","view_count"])->where(["category_id" => 8])->orderBy("view_count", "DESC")->limit(5)->get();

		$this->category = new Category();
		$categories = $this->category->select(["id","name","slug"])->get();

		$this->model = new Post();
		$posts = $this->model->select([""])->where(["category_id" => $id])->orderBy("created_at", "DESC")->limitPage($from, $sotin1trang)->get();

		$this->view("frontend/pages/$path", [
			"posts_menu" => $posts_menu,
			"posts_popular" => $posts_popular,
			"categories" => $categories,
			"posts" => $posts,
		], $page = $page);
	}

	public function contact(){
		$this->view("frontend/show/contact.php");
	}
}
?>