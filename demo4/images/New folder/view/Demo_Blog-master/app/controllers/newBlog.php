<?php
	
	class newBlogClient extends Controller{
		public function __construct(){

			parent::__construct();

			$data = $this->Model->fetch("select * from menu_list_blog where new=1 order by id desc limit 4");

			include "app/views/newBlog.php";

		}
	}
	new newBlogClient();

?>