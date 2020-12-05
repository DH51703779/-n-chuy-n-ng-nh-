<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết bài viết</div>
		<div class="panel-body">
			<div class="col-md-3">
				<img src="../<?php echo $value["avatar"] ?>" alt="Error" width="100%" />
			</div>
			<div class="col-md-9">
				<h2 style="margin: 0;">
					<?php echo $value["name"] ?>
				</h2>
				<p style="margin-top: 10px; font-style: italic">
					<b>Mô tả: </b>
					<?php echo $value["description"] ?>
				</p>
				<p>
					<b>Thuộc danh mục:</b>
					<?php
						$catalog = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
						if(isset($catalog["name"]))
							echo $catalog["name"];
					?>
				</p>
				<fieldset>
					<legend>Nội dung chính</legend>
					<?php echo $value["content"] ?>
				</fieldset>
				<!-- btn -->
				<a href="index.php?controller=blog/edit&id=<?php echo $value["token"];?>" class="btn btn-primary">Cập nhật</a>
				<a href="index.php?controller=blog/list" class="btn btn-success">Quay lại</a>
			</div>
		</div>
	</div>
</div>
