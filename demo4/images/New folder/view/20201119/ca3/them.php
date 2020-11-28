<?php
include 'connect.php';
/*$arr = [
'002',  //masach
'sach 02',	//tensach
'mota',
10, //gia
'h.jpg',//hinh
'gd',//manxb
'th',//maloai
];
*/
function postIndex($i, $v='')
{
	return isset($_POST[$i])?$_POST[$i]:$v;
}
$hinh = $_FILES['hinh']['error']==0?$_FILES['hinh']['name']:'';
$arr = [
postIndex('masach'),
postIndex('tensach'),	//tensach
postIndex('mota'),
postIndex('gia'), //gia
$hinh,
postIndex('manxb'),//manxb
postIndex('maloai'),//maloai
];
$sql="INSERT INTO sach (masach, tensach, mota, gia,  hinh, manxb,maloai)  
			    VALUES (?,       ?,      ?,    ?,       ?,     ?,    ?)";
$stm= $conn->prepare($sql);
$stm->execute($arr);
if ($hinh!='')
{	move_uploaded_file($_FILES['hinh']['tmp_name'], "img/$hinh");
}
header('location:sach.php');