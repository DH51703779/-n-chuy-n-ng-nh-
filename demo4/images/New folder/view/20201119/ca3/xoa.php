<?php
include 'connect.php';
$ms = isset($_GET['masach'])?$_GET['masach']:'';
$sql="delete from sach where masach = ?";
$stm= $conn->prepare($sql);
$stm->execute([$ms]);
header('location:sach.php');