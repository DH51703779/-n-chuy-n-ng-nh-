<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách bài viết
        </h1>
    </div>
</div>

<a href="index.php?controller=blog/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm bài viết</a>

<table class="table table-bordered">
	<tr>
		<td width="50px;">STT</td>
		<td width="130px">Image</td>
		<td>Name</td>
		<td width="120px;">Catalog</td>
		<td width="120px">Date created</td>
		<td width="80px;">More</td>
	</tr>
	<?php 
		$stt=0;
		foreach ($data as $value) {
			$stt++;
	?>
	<tr>
		<td style="text-align: center;"><?php echo $stt; ?></td>
		<td>
			<img src="../<?php echo $value["avatar"] ?>" alt="Error" width="100%">
		</td>
		<td><?php echo $value["name"] ?></td>
		<td>
			<?php
				$catalog = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
				if(isset($catalog["name"]))
					echo $catalog["name"];
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=blog/detail&id=<?php echo $value["token"] ?>">View</a>
			<a href="index.php?controller=blog/edit&id=<?php echo $value["token"] ?>">Update</a>
			<a href="index.php?controller=blog/list&act=delete&id=<?php echo $value['token'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=blog/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>