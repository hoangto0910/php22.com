<?php 
	class Category{
		public $name;
		public $url;
		public $category_id;
		public $image;
		public $description;
		// method
		function __construct($name, $url, $category_id, $image, $description){
			$this->name = $name;
			$this->url = $url;
			$this->category_id = $category_id;
			$this->image = $image;
			$this->description = $description;
		}
		function Intt(){
			echo "Thông Tin Danh mục : ";
			echo "<br>- Tên Danh Mục : $this->name";
			echo "<br>- Đường dẫn : $this->url";
			echo "<br>- Ảnh : $this->image";
			echo "<br>- Mô tả : $this->description";
		}
	}
	$category = new Category("Thời Sự", "abcddc.com", 1, "/anhdep.jpg", "Mô tả tin tức thời sự trong và ngoài nước");
	$category->Intt();
 ?>