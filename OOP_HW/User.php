<?php 
	class User{
		public $name;
		public $email;
		public $password;
		public $avatar;
		// method
		function __construct($name, $email, $password, $avatar){
			$this->name = $name;
			$this->email = $email;
			$this->password = $password;
			$this->avatar = $avatar;
		}
		function Intt(){
			echo "Thông Tin người dùng : ";
			echo "<br>- Họ tên : . $this->name.";
			echo "<br>- Email : $this->email.";
			echo "<br>- Password : $this->password";
			echo "<br>- Avatar : $this->avatar.";
		}
	}
	$user = new User("Đặng Tô Hoàng", "dangtohoang@gmail.com", "311229", "/anh.png");
	$user->Intt();
 ?>