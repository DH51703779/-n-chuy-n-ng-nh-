<?php
include 'connect.php';
$stm = $conn->query('select * from nhaxb');
$nhaxb = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm = $conn->query('select * from loai');
$loai = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="them.php" method="post" enctype="multipart/form-data">
ma sach	<input type="text" name="masach"> <br>
Ten sach <input type="text" name="tensach"> <br>
mo ta <textarea name="mota" id="" cols="30" rows="10"></textarea> <br>
Gia	<input type="text" name="gia"> <br>
hinh <input type="file" name="hinh"> <br>
Loai <select name="maloai" id="">
	<?php foreach ($loai as $key => $value) 
	{ ?>
		<option value="<?php echo $value['maloai'] ?>">
			<?php echo $value['tenloai'] ?>
		</option>
		<?php
	}?>
     </select> <br>
Nha xb <select name="manxb">
	<?php foreach ($nhaxb as $key => $value) 
	{ ?>
		<option value="<?php echo $value['manxb'] ?>">
			<?php echo $value['tennxb'] ?>
		</option>
		<?php
	}?>
</select> <br>
	
	<input type="submit">

</form>

<?php
$sql="select * from sach ";
//$stm= $conn->query();
$stm = $conn->prepare($sql);
$stm->execute();

$data = $stm->fetchAll(PDO::FETCH_ASSOC);//lay data la mang ket hop
//echo '<pre>';print_r($data);
?>
<table>
<?php
foreach ($data as $key => $value) 
{	?>
	<tr>
		<td><?php echo $value['masach'] ?></td>
		<td><?php echo $value['tensach'] ?></td>
		<td><?php echo number_format($value['gia']) ?></td>
		<td>
			<a href="xoa.php?masach=<?php echo $value['masach'] ?>">Xoa</a>
		</td>
	</tr>
	<?php
}
?>
</table>