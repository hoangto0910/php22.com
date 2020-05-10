<?php
	require_once "BaseController.php";
	require_once "Models/User.php";
	class AuthController extends BaseController{
		protected $user;

		function __construct(){
			$this->user = new User();
		}

		public function login(){
			if (!isset($_POST['btn_submit'])) {
				if (isset($_SESSION['user'])) {
					$this->redirect("/mvc_new/index.php?mod=home&act=login");
				}else{
					$this->view("backend/auth/login.php");
				}
			}else{
				$email = $_POST['email'];
				$password = $_POST['password'];

				//kiem tra dieu kien

				//c1: kiem tra dong thoi email password
				$users = $this->user->select(["name","email","password","role"])->where(['email' => $email, "password" => md5($password)])->get();


				//c2 : Kiem tra email truoc kiem tra password
				if (count($users) == 0) {
					setcookie("error", "Đăng nhập Không thành công", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=auth&act=login");
					exit();
				}else{
					//Dang nhap thanh cong
					$user = $users[0];
					$_SESSION['user'] = $user;
					setcookie("success", "Đăng nhập Thành công", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=home&act=login");
				}
			}
		}
		
		// public function login(){
		// 	if (!isset($_POST['btn_submit'])) {
		// 		$this->view("backend/auth/login.php");
		// 	}else{
		// 		$email = $_POST['email'];
		// 		$password = $_POST['password'];
		// 		$users = $this->user->select(["name","email","password"])->where(["email" => $email, "password" => md5($password)])->get();

		// 		if (count($users == 0)) {
		// 			setcookie("error", " Đăng nhập thất bại", time() + 3);
		// 			$this->redirect("/mvc_new/index.php?mod=auth&act=login");
		// 			exit();
		// 		}else{
		// 			$user = $users[0];
		// 			$_SESSION['user'] = $user;
		// 			setcookie("success", "Đăng nhập thành công", time() + 3);
		// 			$this->redirect("/mvc_new/index.php?mod=home&act=index");
		// 		}
		// 	}
		// }

		public function logout(){
			unset($_SESSION['user']);
			$this->redirect("/mvc_new/index.php?mod=auth&act=login");
		}
		public function register(){
			if (!isset($_POST['btn_submit'])) {
				$this->view("backend/auth/register.php");
			}else{
				$data = $_POST;
				//Kiem tra user  da ton tai khong
				// $users = $this->user->where1("email", $data['email']);
				$users = $this->user->select(["email"])->where(['email' => $data['email']])->get();
				if (count($users) !== 0) {
					setcookie("error", "Email " . $data['email'] . " đã tồn tại ", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=auth&act=register");
					exit();
				}

				if ($data['password'] != $data['repassword']) {
					setcookie("error", "Mật Khẩu không khớp", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=auth&act=register");
					exit();
				}

				$data['password'] = md5($data['password']);

				$data_insert = [
					'name' => $data['name'],
					'email' => $data['email'],
					'password' => $data['password'],
				];
				$insert = $this->user->add($data_insert);
				if ($insert) {
					setcookie("success", "Đăng ký thành công", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=auth&act=login");
				}else{
					setcookie("error", "Đăng ký thất bại", time() + 3);
					$this->redirect("/mvc_new/index.php?mod=auth&act=register");
				}
			}
		}
	}
 ?>