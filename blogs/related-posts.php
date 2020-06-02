    <?php
    $show_blogs = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 3";
    // query response
    $result = mysqli_query($conn, $show_blogs);
    ?>

    <div class="row">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <!--    post box      -->
                <div class="col-md-6 col-lg-4">
                    <a href="" article.php?post=<?php echo $row['post_id']; ?> class="a-block sm d-flex align-items-center height-md">
                        <div class="text">
                            <div class="post-meta">
                                <!-- <span class="category">Lifestyle</span> -->
                                <span class="mr-2"><?php echo $row['post_date']; ?> </span> &bullet;
                                <!-- <span class="ml-2"><span class="fa fa-comments"></span> 3</span> -->
                            </div>
                            <h3><?php echo $row['post_title']; ?></h3>
                        </div>
                    </a>
                </div>
        <?php
            }
        }
        ?>
        <!--    post box end      -->
    </div>