<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh sửa bài viết</div>
		<div class="panel-body">
			<form action="index.php?controller=blog/edit&act=edit&id=<?php echo $value["token"] ?>" method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<?php if(isset($value["avatar"]) && $value["avatar"]!=""){ ?>
						<img src="../<?php echo $value["avatar"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="image">
				</div>
				<div class="col-md-9">
					<input type="text" name="name" value="<?php echo $value["name"] ?>" class="form-control" style="margin-bottom: 10px;">
					<select name="catalog" class="form-control" style="margin-bottom: 10px;">
						<?php
							$data = $this->Model->fetch("select * from menu_catalog");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["id"]?>"
								<?php echo isset($value["catalog"])&&$value["catalog"]==$key["id"]?"selected":""; ?>
							><?php echo $key["name"] ?></option>
						<?php } ?>
					</select>
					<div style="margin-bottom: 10px;">
						<textarea name="description" style="width: 100%; max-width: 100%; height: 100px;" class="form-control"><?php echo $value["description"] ?></textarea>
					</div>
					<div style="margin-bottom: 10px;">
						<textarea name="content">
							<?php echo $value["content"] ?>
						</textarea>
						<script>
							CKEDITOR.replace('content');
						</script>
					</div>
					<!-- btn -->
					<input type="submit" class="btn btn-primary" value="Cập nhật">
					<a href="index.php?controller=blog/list" class="btn btn-success">Quay lại</a>
				</div>
			</form>
		</div>
	</div>
</div>