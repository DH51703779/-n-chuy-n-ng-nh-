<?php

	class EditCatalogBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'edit':
					$name = $_POST["topic"];
					$metaTitle = RemoveString($name);
					$this->Model->execute("update menu_catalog set name='$name', metaTitle='$metaTitle' where id=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=catalog_blog/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from menu_catalog where id=$id");
					break;
			}


			include "views/catalog_blog/editView.php";
		}
	}
	new EditCatalogBlog();
	
?>