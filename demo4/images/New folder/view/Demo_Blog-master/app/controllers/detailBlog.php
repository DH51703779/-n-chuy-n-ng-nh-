<?php

	class detailBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:"";
			$value = $this->Model->fetchOne("select * from menu_list_blog where token='$id'");

			include "app/views/detailBlog.php";
		}
	}
	new detailBlog();

?>