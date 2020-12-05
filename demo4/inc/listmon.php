<div class="row padding">
        <?php 
    $key =isset($_POST['key'])?$_POST['key']:'';
    $id= isset($_GET['id_loai'])?$_GET['id_loai']:'10';
    $listmon= $mon->getmonbyloai($id);
    $monkey=$mon->getmonkey($key);
?>
            <?php
            if(empty($key)){
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
            } else{
                if($monkey){
                    while($result_mon = $monkey->fetch_assoc()){
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
            }
            ?>

</div>
