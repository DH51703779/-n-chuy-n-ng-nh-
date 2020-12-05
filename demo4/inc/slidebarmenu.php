
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>GS Restaurant</h3>
        </div>

        <ul class="list-unstyled components">
            <p>
            <form action=thucdon.php method=post>
                <input name=key type="search" placeholder="Search">
                <button type="submit" >tìm</button>
            </form>
            </p>
            <?php
            $show_loai = $loaimon->show_loaimenu();
            if($show_loai){

                while($result = $show_loai->fetch_assoc()){
                    	
            ?>
            <li class="active">
                <a href="?id_loai=<?php echo $result['id_loai']?>"><?php echo $result['name_loai']?> </a>
            </li>

            <?php
                }
            } 
                ?>
           
         
        </ul>
    </nav>