<?php
include 'connect.php';
$hinh = $_FILES['hinh']['error']==0?$_FILES['hinh']['name']:'';
function postIndex($i, $v='')
{
	return isset($_POST[$i])?$_POST[$i]:$v;
}
$data =[
	postIndex('masach'),
	postIndex('tensach'),
	postIndex('mota'),
	postIndex('gia'),
	$hinh,
	postIndex('maloai'),
	postIndex('manxb')
];
$sql="insert into sach(masach, tensach, mota, gia, hinh, maloai, manxb)
	values(?, ?, ?, ?, ?, ?, ?)";
$stm= $o->prepare($sql);
$stm->execute($data);
if ($hinh !='')
	move_uploaded_file($_FILES['hinh']['tmp_name'], "img/$hinh");
header('location:sach.php');