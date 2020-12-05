<?php

	class EditBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$name = $_POST["name"];
					$metaTitle = RemoveString($name);
					$catalog = $_POST["catalog"];
					$description = $_POST["description"];
					$content = $_POST["content"];
					$this->Model->execute("update menu_list_blog set name='$name', metaTitle='$metaTitle', catalog=$catalog, description='$description', content='$content' where token='$id' ");

					if(strlen($_FILES["image"]["name"]) != ""){
						$image = "public/images/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/".time().$_FILES["image"]["name"]);
						$this->Model->execute("update menu_list_blog set avatar='$image' where token='$id'");
					}


					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=blog/detail&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from menu_list_blog where token='$id'");
					break;
			}

			include "views/blog/editView.php";
		}	
	}
	new EditBlog();

?>