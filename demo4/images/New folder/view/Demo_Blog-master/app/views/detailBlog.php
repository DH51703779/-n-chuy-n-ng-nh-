<div class="row">
    <div class="col-md-8">
    	<div class="row">
    		<!--post start-->
    		<div class="col-md-12">  
    			<article class="post hentry">
                    <div class="thumbnails">
                        <img src="<?php echo $value["avatar"] ?>" class="post-thumbnail img-responsive" width="100%" />
                    </div>
    				<div class="post-content-area">
    					<header class="entry-header text-center">
                            <div class="post-cat">
                            	<a href="#" rel="category tag">
                            		<?php
                            			$key = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
                            			if(isset($key["name"]))
                            				echo $key["name"];
                            		?>
                            	</a>
                            </div>
                        	<div class="entry-title" style="font-weight: 600px; font-size: 24px;">
                        		<?php echo $value["name"] ?>
                        	</div>  
    					</header>
                        <!--/.entry-header -->
    					<div class="entry-content">
    						<span style="font-style: italic"><?php echo $value["description"] ?></span>
        					<p style="margin-top: 20px;">
                                <b>Nội dung chính: </b> <br>
        						<?php echo $value["content"] ?>
        					</p>
                    	</div>
                        <!-- .entry-content -->
                    	<div class="entry-meta text-center">
                    		<div class="share-this hidden-xs">
                    			<?php echo $value["dateTime"] ?>
                    		</div>
                        </div>
                        <!-- .entry-meta -->
    				</div>
    		    </article>
    		</div>
    		<!--/post end-->
    	</div>
    </div>
    <!-- /col -->

    <!--sidebar start-->
    <div class="col-md-4">
        <div class="primary-sidebar widget-area" role="complementary">

            <!-- bai viet lien quan -->
            <aside class="widget">
                <h1 class="widget-title">Bài viết liên quan</h1>
                <div class="latest-posts latest">
                    <?php
                        $data = $this->Model->fetch("select * from menu_list_blog where catalog=".$value['catalog']." and token != '$id' limit 4");
                        foreach ($data as $blog) { 
                    ?>
                    <div class="media">
                        <div class="latest-post-thumb">
                            <img src="<?php echo $blog["avatar"] ?>" class="img-responsive" width="100%" />
                        </div>
                        <div class="media-body">
                            <div class="entry-meta">
                                <a href="#" rel="category tag">
                                    <?php
                                        $catalog = $this->Model->fetchOne("select * from menu_catalog where id=".$blog["catalog"]);
                                        if(isset($catalog["name"]))
                                            echo $catalog["name"];
                                    ?>
                                </a>
                            </div>
                            <h3 class="entry-title">
                                <a href="index.php?controller=detailBlog&id=<?php echo $blog["token"] ?>"><?php echo $blog["name"] ?></a>
                            </h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </aside>
                                
            <?php include "app/controllers/newBlog.php"; ?>

        </div>
    </div>
    <!--sidebar end-->
</div>