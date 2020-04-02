 <?php

    if (mysqli_num_rows($respond) > 0) {
        while ($row = mysqli_fetch_assoc($respond)) {

            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_category = $row['post_category'];
            $post_category_id = $row['post_category_id'];
            $post_author = $row['post_author'];
            $post_content = $row['post_content'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_comment_count = $row['post_comment_count'];
            $post_views = $row['post_views'];
            $post_tags = $row['post_tags'];

    ?>


         <!-- article content start -->
         <div class="col-md-12 col-lg-8 main-content">
             <img src="img/posts/<?php echo $post_image;  ?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                 <span class="author mr-2"><?php echo $post_author; ?></span>&bullet;
                 <span class="mr-2"><?php echo $post_date; ?> </span> &bullet;
                 <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment_count;  ?></span>
             </div>
             <h1 class="mb-4"><?php echo $post_title; ?></h1>
             <a class="category mb-5" href="#"><?php echo $post_category; ?></a>

             <div class="post-content-body">
                 <p class="lead"><?php echo $post_content; ?></p>



             </div>

             <!-- article content end -->


     <?php
        }
    }

        ?>