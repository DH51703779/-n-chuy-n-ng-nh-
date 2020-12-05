<?php

	class login extends Controller{

		public function __construct(){

			parent::__construct();

			if($_SERVER["REQUEST_METHOD"] == "POST"){

				$email = $_POST["email"];
				$password = $_POST["password"];

				$check = $this->Model->fetchOne("select * from users where email='$email'");

				if( isset($check["email"]) ) {
					if( md5($password) == $check["password"] ){
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["name"];
						header("location: index.php");
					}
				}

			}

			include "views/login.php";
		}

	}
	new login();

?>