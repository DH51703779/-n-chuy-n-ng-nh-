<?php
    require_once 'session.php';
    session::init();
?>
<?php
include './lib/database.php';
include './helpers/format.php';

spl_autoload_register(function($class){
    include_once "classes/".$class.".php";});


        $db= new Database();
        $fm= new Format();
        $ct= new cart();
        $us = new user();
        $loaimon = new loaimon();
        $mon = new mon(); 

?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/slidebar.css" rel="stylesheet">
    <style>
    .card-title {
        font-size: 20px;
    }

    .card-body {
        height: 8rem !important;
    }

    .carousel-inner img {
        width: 100%;
        height: 15rem;
    }
 
    input[type=search] {
    border: solid 1px #ccc;
    padding: 9px 10px 9px 32px;
    width: 10rem;
 
    -webkit-border-radius: 10em;
    -moz-border-radius: 10em;
    border-radius: 10em;

    
  
}
button{
    border: solid 1px #ccc;
    padding-left: 10px ;
    width: 1rem;
    -webkit-border-radius: 10em;
    -moz-border-radius: 10em;
    border-radius: 10em;

    
}
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <!-- chieều ngang-->
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
                <!--biểu tượng menu -->
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!-- thể hiện menu-->
                    <li class="nav-item">
                        <a class="nav-link active" href="trangchu.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="thucdon.php">Thực đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="thuvien.php">Thư viện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="tintuc.php">Tin tức</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="dattiec.php">Đặt bàn</a>
                </li>
                <?php
                                if(isset($_GET['action'])&& $_GET['action']=='logout'){
                                    Session::destroy();
                                }
                            ?>
              
                <li class=" sizebaby">
                <?php if(!empty(session::get('name'))){ ?>
                                <a ><?php echo session::get('name') ?></a>
                                <a href="?action=logout"> <img height=35 width= 35 src="images/logout.png" ></a>
							<?php }else 
							
							{?>
							<a href="login.php"><img height=35 width= 35 src="images/login.png" ></a>
							 	

							<?php }?>
                    <!-- <a class="nav-link " href="login.php" ><img height=35 width= 35 src="images/login.png" ></a> -->
                </li>
                </ul>
            </div>
        </div>
    </nav>