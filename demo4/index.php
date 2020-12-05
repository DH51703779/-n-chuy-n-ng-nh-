<?php
include'inc\menu.php';
?>
    <!-- Slideshow -->
    <div id="slides" class="carousel slide" data-ride="carousel" >
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner" >
            
            <div class="carousel-item active">
                <img src="images/canh/restaurant-691397.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">GS restaurant</h1>
                   
                </div>
            </div>
            <div class="carousel-item ">
                <img src="images/canh/restaurant-449952.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">GS restaurant</h1>
                   
                </div>
            </div>
            <div class="carousel-item ">
                <img src="images/canh/kitchen-731351_1920.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">GS restaurant</h1>
                   
                </div>
            </div>
        </div>
    </div>

<!--Marketing massengae-->
<div class="container-fluid">
    <div class="jumbotron">
        <div class=" col-sm-12 col-md-9 col-lg-9 col-xl-10"></div>
         <h1>CHÀO MỪNG BẠN ĐẾN NHÀ HÀNG GS </h1>
           <h4> Hội tụ trọn vẹn tinh hoa của ẩm thực
             Việt Nam . Không chỉ thu hút,
              ấn tượng bởi cách bày biện trang trí mà các món ăn còn ngon,
               đẹp mắt, dậy hương thơm ngào ngạt đặc trưng và vô cùng bổ dưỡng.
                Với thực đơn phong phú hơn 200 món ăn đặc sắc và tinh tế,
                 Món ăn của chúng tôi luôn chiều lòng được mọi thực khách.</h4  >
    </div>
</div>

<!--card-->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="./images/food/suonheo.jpg">
                <div class="carousel-caption">
                    <h6 class="display-2"></h6>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        Thực đơn GS
                    </button>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="images/canh/table-791167_1920.jpg">
                <div class="carousel-caption">
                    <h6 class="display-2"></h6>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        Không gian GS
                    </button>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="images/coffee-2425294_1920.jpg">
                <div class="carousel-caption">
                    <h6 class="display-2"></h6>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        Đặt bàn GS
                    </button>
                </div>
			</div>
		</div>
	</div>
</div>
<!---->
<hr>
<!--Marketing massengae-->

<div class="container-fluid">
    <div class="food_GSs">
    <div class="jumbotron">
        <div class=" col-sm-12 col-md-9 col-lg-9 col-xl-10"></div>
         <h1> Món ăn GS </h1> 
           <h4> Mới lạ chính là thứ bạn nhớ tới khi nhắc đến món ăn GS, với những đầu bếp giàu kinh nghiệm và óc sáng tạo 
               mỗi tháng chúng tôi đều cho ra mắt những món ăn mới mang đậm bản sắc của GS , và chỉ đến GS bạn mới được thưởng thức những món ăn này  </h4  >
    </div>
</div>
</div>



  <!-- Item slider end-->
  <div class="food_GS">
  <div class="slide hi-slide">
    <div class="hi-prev "></div>
      <div class="hi-next "></div>
      <ul>
          <li class="classa" > 
          <img src="images/food/bonuongnguqua.jpg" alt="Img 1" /></li>
          <li class="classa"><img  src="./images/food/boxaodau.jpg" alt="Img 2" /></li>
          <li class="classa"><img  src="./images/food/bonuongy.jpg" alt="Img 3" /></li>
          <li class="classa"><img  src="./images/food/chinese-3855829_1920.jpg" alt="Img 4" /></li>
          <li class="classa"><img  src="./images/food/suonheo.jpg" alt="Img 5" /></li>
          <li class="classa"><img src="images/food/food-2720418_1920.jpg" alt="Img 6" /></li>
          <li class="classa" ><img src="images/food/bonuongnguqua.jpg" alt="Img 1" /></li>
          
      </ul>
  </div>
  

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.hislide.js" ></script>
  <script>
      $('.slide').hiSlide();
  </script>
 
  </div>
<!--footer -->

<?php
include'inc\footer.php';
?>