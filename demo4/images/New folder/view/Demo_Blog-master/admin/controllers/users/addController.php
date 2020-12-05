<?php 

	class addUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					
					$username = $_POST["username"];
					$email = $_POST["email"];
					$password1 = $_POST["password1"];
					$password2 = $_POST["password2"];

					if ($password1 != $password2) {
						header("location: index.php?controller=users/add&err=false ");
					}
					else {
						$password = md5($password1);
						$token = new Token();
						$strToken = $token->generate(10);

						$this->Model->execute("insert into users(name,email,password,token) values('$username', '$email','$password','$strToken')");
						header("location: index.php?controller=users/list");
					}

					break;
			}

			include "views/users/addView.php";
		}
	}
	new addUsers();

 ?>