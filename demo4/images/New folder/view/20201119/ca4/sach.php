<?php
include 'connect.php'; 			$sql1 ="select * from sach";
$sql2="select * from nhaxb"; 	$sql3 ="select * from loai";
$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql2);	$data2 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql3);	$data3 = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="themsach.php" method="post" enctype="multipart/form-data">
masach <input type=text name=masach> <br>
ten sach <input type=text name=tensach> <br>
mo ta <textarea name=mota> </textarea> <br>
gia <input type=text name=gia> <br>
hinh <input type=file name=hinh> <br>
Loai: <select name=maloai>
		<?php 
		foreach ($data3 as $key => $value) {
			?><option value='<?php echo $value['maloai'] ?>'>
				<?php echo $value['tenloai'] ?>
			  </option>
			<?php
		}
		?>
	</select> <br>
Nhaxb: <select name=manxb>
		<?php 
		foreach ($data2 as $key => $value) {
			?>
			<option value='<?php echo $value['manxb'] ?>'>
				<?php echo $value['tennxb'] ?>
			</option>
			<?php
		}
		?>
	</select> <br>
	<input type="submit">
</form>
<table>
	<?php 
	foreach ($data1 as $key => $value) 
	{
	?>
	<tr>
		<td><?php echo $value['masach'] ?> </td>
		<td><?php echo $value['tensach'] ?></td>
		<td><?php echo $value['hinh'] ?></td>
		<td>
			<a href="xoasach.php?masach=<?php echo $value['masach'] ?>">
			xoa</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>


