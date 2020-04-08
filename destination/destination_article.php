 <?php

    if (mysqli_num_rows($respond) > 0) {
        while ($row = mysqli_fetch_assoc($respond)) {

            $dest_id = $row['dest_id'];
            $dest_title = $row['dest_title'];
            $dest_city = $row['dest_city'];
            $dest_city_id = $row['dest_city_id'];
            $dest_author = $row['dest_author'];
            $dest_content = $row['dest_content'];
            $dest_date = $row['dest_date'];
            $dest_image = $row['dest_image'];
            $dest_views = $row['dest_views'];
            $dest_tags = $row['dest_tags'];

    ?>


         <!-- article content start -->
         <div class="col-md-12 col-lg-8 main-content">
             <img src="img/dest/<?php echo $dest_image;  ?>" alt="Image" class="img-fluid mb-5">
             <h1 class="mb-4"><?php echo $dest_title; ?></h1>
             <a class="category mb-5" href="#"><?php echo $dest_city; ?></a>

             <div class="post-content-body">
                 <p class="lead"><?php echo $dest_content; ?></p>


             </div>

             <!-- article content end -->


     <?php
        }
    }

        ?>