<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm bài viết</div>
		<div class="panel-body">
			<form action="index.php?controller=blog/add&act=add" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<td width="10%">Tên bài viết</td>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên bài viết" class="form-control" required>
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<td>Ảnh</td>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<!-- end upload -->
					<!-- catalog -->
					<tr>
						<td>Chủ đề</td>
						<td>
							<select name="catalog" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from menu_catalog");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["id"];?>"><?php echo $value["name"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<!-- end catalog -->
					<tr>
						<td>Mô tả bài viết</td>
						<td>
							<textarea name="description" style="min-width: 100%; width: 100%; height: 100px; margin: 10px 0;" class="form-control" placeholder="Mô tả bài viết"></textarea>
						</td>
					</tr>
				</table>
				<div>
					<span>Nội dung bài viết</span> <br>
					<textarea name="content"></textarea>
					<script>
						CKEDITOR.replace('content');
					</script>
				</div>
				<input type="submit" class="btn btn-primary" value="Thêm bài viết" style="margin-top: 10px;">
				<a href="index.php?controller=blog/list" class="btn btn-success" style="margin-top: 10px;">Quay lại</a>
			</form>
		</div>
	</div>
</div>