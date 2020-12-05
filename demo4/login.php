<?php
include './inc/menu.php' ;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $sdt = $_POST['sdt'];
    $pass = md5($_POST['pass']); 
 
    // $result = $us->insert_user($ten,$sdt1,$sex,$pass1);
    $login_check = $us->login_user($sdt,$pass) ;
}
?>

<link href="./css/stylelogin.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
        <div class="row">
            <table boder="2px">
                <tr class="tr">

                    <div class="col-md-8 login-sec">
                        <h2 class="text-center">Đăng nhập</h2>
                        <span  > <?php 
				    if(isset($login_check))
				        {
				    	echo $login_check ;
				        }
			?></span>
                        <form action="login.php" method=post class="login-form">
                            <div class="form-group">
                                <label  class="text-uppercase">Số điện thoại</label>
                                <input name=sdt type="text" class="form-control" placeholder="">


                            </div>
                            <div class="form-group">
                                <label  class="text-uppercase">mật khẩu</label>
                                <input name=pass type="password" class="form-control" placeholder="">
                            </div>


                            <div class="form-check">
                                <a href="dangky.php">Đăng ký </a>
                                <button type="submit" class="btn btn-login float-right">Đăng nhập</button>
                            </div>

                        </form>

                    </div>
                </tr>


            </table>
           
    </div>
    </div>
</section>
<?php
    include './inc/footer.php';
?>