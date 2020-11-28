<?php

include'inc\menu_td.php';
?>
    <!-- Slideshow -->
    <div id="slides" class="carousel slide" data-ride="carousel" >
        <ul class="carousel-indicators">
            
        </ul>
        <div class="carousel-inner" >
            
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
    
    <?php
    include'inc\listmon.php';
    ?>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>


<?php
include'inc\footer.php';
?>