   <?php
    $show_blogs = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 5";
    // query response
    $result = mysqli_query($conn, $show_blogs);
    ?>

   <!-- sidebar  popular posts list  -->

   <div class="sidebar-box">
       <h3 class="heading">Popular Posts</h3>
       <div class="post-entry-sidebar">
           <ul>
               <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                       <li>
                           <a href="article.php?post=<?php echo $row['post_id']; ?>">
                               <img src="img/posts/<?php echo $row['post_image']; ?>" alt="Image placeholder" class="mr-4">
                               <div class="text">
                                   <h4><?php echo $row['post_title']; ?></h4>
                                   <div class="post-meta">
                                       <span class="mr-2"><?php echo $row['post_date']; ?></span>
                                   </div>
                               </div>
                           </a>
                       </li>
               <?php
                    }
                }
                ?>
           </ul>
       </div>
   </div>
   <!-- Popular post list sidebar end -->