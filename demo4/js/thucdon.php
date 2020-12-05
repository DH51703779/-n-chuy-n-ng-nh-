<?php

include'inc\menu_td.php';
?>
<!-- Slideshow -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">

    </ul>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="images/canh/restaurant-691397.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Thực đơn GS</h1>

            </div>
        </div>

    </div>
</div>

<!--thuc don-->
<div class="wrapper">
    <!-- Sidebar -->
    <?php
    include'inc\slidebarmenu.php';
   ?>
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Danh mục</span>
                </button>

            </div>
        </nav>
      

        <div class="row padding">
        <?php 
    
    $id= isset($_GET['id_loai'])?$_GET['id_loai']:'10';
$listmon= $mon->getmonbyloai($id);
?>
            <?php
               if($listmon){
                while($result_mon = $listmon->fetch_assoc()){
            ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/food/<?php echo $result_mon['images']?>">
                    <div class="card-body">
                        <h4 class="card-text">
                            <?php echo $result_mon['name_mon'] ?>
                        </h4>
                        <h4 class="card-title">
                            <?php echo $result_mon['gia_mon'] ?> VNĐ
                        </h4>

                        <a href="#" class="btn btn-outline-secondary">Đặt món</a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>



<?php
include'inc\footer.php';
?>