<?php
include './inc/menu.php' ;
if($_SERVER['REQUEST_METHOD']==='POST'){
 
    $ten = $_POST['ten'];
    $sdt1=$_POST['sdt1'];
    $sex=$_POST['gioitinh'];
    $pass1= md5($_POST['pass1']);
    $repass=md5($_POST['repass']);
    $result = $us->insert_user($ten,$sdt1,$sex,$pass1,$repass);
   
}
?>

<link href="./css/stylelogin.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
        <div class="row">
         
            <table>
                <tr>
                    <div class="col-md-7 login-sec">
                        <h2 class="text-center">Đăng Ký</h2>
                        <form class="login-form" action=dangky.php method="post">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label>Tên</label>
                                        <input type="text" class="form-control" placeholder="vd: Thanh Ngân" required
                                            name="ten">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">Số điện thoại</label>
                                <input name=sdt1 type="text" class="form-control" placeholder="vd: 03321144XX">

                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <div class="row" data-toggle="buttons">
                                    <div class="col">
                                        <label class="btn btn-outline-secondary">Nam
                                            <input checked type="radio" name="gioitinh" value="1">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="btn btn-outline-secondary">Nữ
                                            <input type="radio" name="gioitinh" value="0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="text-uppercase">Mật khẩu</label>
                                <input type="password" name=pass1 class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label  class="text-uppercase">Nhập lại mật khẩu</label>
                                <input type="password" name=repass class="form-control" placeholder="">
                            </div>
                            <?php
                 
                            ?> 


                            <div class="form-check">
                                <!-- <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small></small>
                            </label> -->
                            <span  > <?php 
				    if(isset($result))
				        {
				    	echo $result ;
				        }
			?></span>
                                <button type="submit" class="btn btn-login float-right">Đăng Ký</button>
                            </div>

                        </form>

                </tr>

        </div>
        </tr>
        </table>
    </div>
    </div>
</section>
<?php
    include './inc/footer.php';
?>