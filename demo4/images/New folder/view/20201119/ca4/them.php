<?php 
$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$m = isset($_POST['manxb'])?$_POST['manxb']:'';
$t = isset($_POST['tennxb'])?$_POST['tennxb']:'';
$sql ="insert into nhaxb(manxb, tennxb) values(?, ?)";
$a=[$m, $t];

$stm = $o->prepare($sql);
$stm->execute($a);
header('location:nhaxb.php');