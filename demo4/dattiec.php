<?php
include'inc\menu.php';

?>
<style>
.container {
    background: url(images/coffee-2425294_1920.jpg) !important;

}

label {
    color: white;
}

.row label {
    color: white !important;
}

.carousel-inner img {
    width: 100%;
    height: 15rem;
}
.rowtable{
    width:3.8rem !important;
    font-size:15px !important;
}
.rowtable1{
    width:3.8rem !important;
    font-size:15px !important;
}
.bgtd{
    background-color: none !important;
}
table{ 
    border:2px solid saddlebrown;
    background-color: white;
}
th{
    border:2px solid saddlebrown;
    color: darkgray;
    background-color: #000;
    font-size: 15px;
    
}
td{
    border-top:1px solid #ccc;
    border-bottom:1px solid #ccc;
    font-size: 20px;
}

</style>

<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">

    </ul>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="images/canh/restaurant-691397.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Đặt bàn GS</h1>

            </div>
        </div>

    </div>
</div>
<!--content-->
<div class="container bground">


    <form>
        <div class="row padding">
            <div class="col-md-5">
                <h2>Đặt bàn</h2>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label>Tên</label>
                            <input type="text" class="form-control" placeholder="Tên của bạn" required name="">
                        </div>
                        <div class="col">
                            <label>Họ</label>
                            <input type="text" class="form-control" placeholder="Họ của bạn" required name="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Giới tính</label>
                    <div class="row" data-toggle="buttons">
                        <div class="col">
                            <label class="btn btn-outline-secondary">Nam
                                <input type="radio" name="gioi-tinh" value="Nam">
                            </label>
                        </div>
                        <div class="col">
                            <label class="btn btn-outline-secondary">Nữ
                                <input type="radio" name="gioi-tinh" value="Nữ">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại của bạn" required name="">
                </div>
                <div class="form-group">
                    <label>Ngày đặt tiệc</label>
                    <input type="date" class="form-control" placeholder="Ngày đặt" required name="">
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label>Giờ bắt đầu</label>
                            <input type="time" class="form-control" required name="">
                        </div>
                        <div class="col">
                            <label>giờ kết thúc</label>
                            <input type="time" class="form-control" required name="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label>Số lượng khách</label>
                            <input type="text" class="form-control" placeholder="Số lượng khách" required name="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Khu vực đặt</label>
                    <select class="form-control">
                        <option selected>Khu vực</option>
                        <option>Sảnh</option>
                        <option>VIP</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dịch vụ</label>
                    <div class="row" data-toggle="buttons">
                        <div class="col">
                            <label class="btn btn-outline-secondary">Trang trí
                                <input type="checkbox" name="dichvu" value="trangtri">
                            </label>
                        </div>
                        <div class="col">
                            <label class="btn btn-outline-secondary">karaoke
                                <input type="checkbox" name="dichvu" value="karaoke">
                            </label>
                        </div>

                    </div>

                </div>
                <div class="form-group">
                    <input type="checkbox" required name="">
                    <label>Tôi đồng ý điều khoản đặt tiệc</label>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Gửi</button>
                </div>
            </div>
           		 <div class="col-md-7">
                    <h2> Danh sách món ăn </h2>
					<table >
						<tr>
                                <th width="30%">Tên món</th>
								<th width="25%">Hình</th>
								<th width="20%">Giá</th>
								<th width="15%">Số lượng </th>
								<th width="10%">xóa</th>
                        </tr>
                        <tr>
								<td  width="30%" >Heo nướng</td>
								<td width="25%" ><img height=60 width=150 src="./images/food/boham.jpg" alt=""/></td>
								<td  width="20%"> 20000</td>
                                <td >
									<form action="" method="post">
										<input class="rowtable" type="number" name="" value="1"/>
										<input class="rowtable1"type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td  width="10%"><a href="">X</a></td>
                            </tr>
                            <tr>
								<td  width="30%" >Heo nướng</td>
								<td width="25%" ><img height=60 width=150 src="./images/food/boham.jpg" alt=""/></td>
								<td  width="20%"> 20000</td>
                                <td >
									<form action="" method="post">
										<input class="rowtable" type="number" name="" value="1"/>
										<input class="rowtable1"type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td  width="10%"><a href="">X</a></td>
							</tr>
                    </table>
                    <table style="float:left;text-align:center;" width="30%">
							<tr>
								<td width="20%"> <input class="rowtable1"type="submit" name="submit" value="Thêm Món"/></td>
								
							</tr>
							
					   </table>
                    <table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Tiền món ăn : </th>
								<td> 210000</td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>0</td>
							</tr>
							<tr>
								<th>Tổng cộng :</th>
								<td>210000 </td>
							</tr>
					   </table>
				
				</div>

         </div>


        </div>
    </form>




</div>


<!--footer-->
<?php
 include'inc\footer.php';
 ?>