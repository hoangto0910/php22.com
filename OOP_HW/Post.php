<?php 
	class Post{
		public $title;
		public $url;
		public $description;
		public $content;
		//method
		function __construct($title,$url,$description,$content){
			$this->title = $title;
			$this->url = $url;
			$this->description = $description;
			$this->content = $content;
		}
		function Intt(){
			echo "Thông tin chi tiết bài Viết : ";
			echo "<br>- Title : $this->title.";
			echo "<br>- Url : $this->url.";
			echo "<br>- Description : $this->description.";
			echo "<br>- Content : $this->content.";
		}
	}
	$post = new Post("Tiêu đề tin mới","https://portal.zent.asia/class-room/PHP-MySQL2019003/unit/92/exercises","Mô tả bài viết mới","Thiết kế lớp bài viết");
	$post->InTT();
 ?>