<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];
	}
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}
	switch ($mod) {
		case 'category':
			require_once "controllers/CategoryController.php";
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->index();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'add':
					$controller_obj->create();
					break;
				case 'add_process':
					$controller_obj->store();
					break;
				case 'delete':
					$controller_obj->destroy();
				default:
					echo "Không tồn tại action Category";					
					break;
			}
			break;
		case 'post':
			require_once "controllers/PostController.php";
			$post_obj = new PostController();
			switch ($act) {
				case 'list':
					$post_obj->index();
					break;
				case 'detail':
					$post_obj->detail();
					break;
				case 'edit':
					$post_obj->edit();
					break;
				case 'update':
					$post_obj->update();
					break;
				case 'add':
					$post_obj->create();
					break;
				case 'add_process':
					$post_obj->store();
					break;
				case 'delete':
					$post_obj->destroy();
				default:
					echo "Không tồn tại action Post";			
					break;
			}
			break;
		case 'user':
			require_once "controllers/UserController.php";
			$user_obj = new UserController();
			switch ($act) {
				case 'list':
					$user_obj->index();
					break;
				case 'detail':
					$user_obj->detail();
					break;
				case 'edit':
					$user_obj->edit();
					break;
				case 'update':
					$user_obj->update();
					break;
				case 'add':
					$user_obj->create();
					break;
				case 'add_process':
					$user_obj->store();
					break;
				case 'delete':
					$user_obj->destroy();
				default:
					echo "Không tồn tại action User";			
					break;
			}
			break;
		default:
			echo "Không có Model cần tìm";
			break;
	}
 ?>