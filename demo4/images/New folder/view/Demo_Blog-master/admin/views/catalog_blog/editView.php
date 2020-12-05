<div class="col-md-6 col-md-offset-3" style="margin-top: 50px; margin-bottom: 100px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Cập nhật chủ đề</div>
		<div class="panel-body">
			<form action="index.php?controller=catalog_blog/edit&id=<?php echo $value["id"] ?>&act=edit" method="post">
				<input type="text" class="form-control" readonly value="<?php echo $value["name"] ?>">
				<input type="text" name="topic" class="form-control" required placeholder="Tên chủ đề mới" style="margin: 7px 0;">
				<input type="submit" value="Cập nhật" class="btn btn-primary">
				<a href="index.php?controller=catalog_blog/list" class="btn btn-success">Quay lại</a>
			</form>
		</div>
	</div>
</div>