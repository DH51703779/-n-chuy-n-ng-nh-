<form action="them.php" method="post">
	manxb<input type="text" name="manxb"> <br>
	ten nxb<input type="text" name="tennxb"> <br>
	<input type="submit">
</form>
<?php
/**
 * thao tac voi csdl gom 4 buoc.
 * 1. ket noi
 * 2. Viet sql
 * 3. Thuc thi sql
 * 4. Xu ly ket qua
 */
$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$o->query('set names utf8');
$sql ="select * from nhaxb";
$stm = $o->query($sql);//tra ve 1 doi tuong PDO Statement
$data = $stm->fetchAll();
//echo '<pre>';print_r($data);
?>
<table>
	<?php 
	foreach ($data as $key => $value) 
	{
		?>
	<tr>
		<td><?php echo $key+1 ?></td>
		<td><?php echo $value['manxb'] ?></td>
		<td><?php echo $value['tennxb'] ?></td>
		<td>
			<a href="xoa.php?ma=<?php echo $value['manxb'] ?>">Xoa</a>
		</td>
	</tr>
	<?php 
    }
	?>
</table>