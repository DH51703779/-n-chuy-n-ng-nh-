<?php 
$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$m = isset($_GET['ma'])?$_GET['ma']:'';
$sql ="delete from nhaxb where manxb=? ";
$stm = $o->prepare($sql);
$stm->execute([$m]);
header('location:nhaxb.php');