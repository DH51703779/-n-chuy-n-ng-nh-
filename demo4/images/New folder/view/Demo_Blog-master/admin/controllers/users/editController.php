<?php 

	class editUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;

			switch ($act) {
				case 'edit':					
					$name = $_POST["username"];
					$password = $_POST["password"];
					$this->Model->execute("update users set name='$name' where token='$id' ");

					if($password != ''){
						$pass = md5($password);
						$this->Model->execute("update users set password='$pass' where token='$id' ");
					}
					header("location: index.php?controller=users/list");

					break;
				
				default:
					$value = $this->Model->fetchOne("select * from users where token='$id'");
					break;
			}

			include "views/users/editView.php";
		}
	}
	new editUsers();

 ?>