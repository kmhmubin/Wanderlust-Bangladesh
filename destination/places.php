<div class="row mb-5 mt-5">
    <div class="col-md-12">

        <div class="row blog-entries">

            <?php
            $show_blogs = "SELECT * FROM destinations WHERE dest_status = 'published' ORDER BY dest_id DESC";
            // query response
            $result = mysqli_query($conn, $show_blogs);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $dest_id = $row['dest_id'];
                    $dest_author = $row['dest_author'];
                    $dest_title = $row['dest_title'];
                    $dest_city_id = $row['dest_city_id'];
                    $dest_city = $row['dest_city'];
                    $dest_image = $row['dest_image'];
                    $dest_status = $row['dest_status'];
                    $dest_content = $row['dest_content'];
                    $dest_tags = $row['dest_tags'];
                    $dest_date = $row['dest_date'];

            ?>
                    <!-- Single Features Area -->
                    <a href="destination_details.php?dest_id=<?php echo $dest_id; ?>">
                        <div class="col-md-5 ">
                            <div class="single-features-area mb-50">
                                <img src="img/dest/<?php echo $dest_image; ?>" alt="">
                                <div class="feature-content d-flex align-items-center justify-content-between">
                                    <div class="feature-title">
                                        <h5><?php echo $dest_title; ?></h5>
                                        <p><?php echo $dest_city; ?></p>
                                    </div>
                                    <div class="feature-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>


            <?php

                }
            } else {
                // show error message as alert
                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    <strong><i class='fas fa-exclamation-circle'></i></strong> Please Login !
                    </div>";
                header("Location: login.php");
            }
            ?>

        </div>

    </div>
</div>