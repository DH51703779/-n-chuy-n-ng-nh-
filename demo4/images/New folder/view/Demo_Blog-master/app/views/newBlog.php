<aside class="widget">
    <h1 class="widget-title">Bài viết mới</h1>
    <div class="latest-posts latest">

        <?php foreach ($data as $value) {  ?>
            <div class="media">
                <div class="latest-post-thumb">
                    <img src="<?php echo $value["avatar"] ?>" class="img-responsive" width="100%" />
                </div>
                <div class="media-body">
                    <div class="entry-meta">
                        <a href="#" rel="category tag">
                            <?php
                                $key = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
                                if(isset($key["name"]))
                                    echo $key["name"];
                            ?>
                        </a>
                    </div>
                    <h3 class="entry-title">
                        <a href="index.php?controller=detailBlog&id=<?php echo $value["token"] ?>"><?php echo $value["name"] ?></a>
                    </h3>
                </div>
            </div>
        <?php } ?>

    </div>
</aside>