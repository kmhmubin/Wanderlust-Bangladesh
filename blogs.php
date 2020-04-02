<?php
$title = "WanderlustBD - Blogs";
include "inc/header.php";
include "inc/navbar.php";
// include "inc/loader.php";
?>


<div class="wrap">
    <section class="site-section pt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="mb-4">Latest Posts</h2>
                    <hr>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <!-- horizontal blog post cards -->
                    <?php include "blogs/blog-cards.php"; ?>
                    <!-- page navigation -->
                    <?php include "blogs/page-navigation.php"; ?>
                </div>
                <!-- main content end -->

                <!-- side bar content start -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <!-- sidebar search -->
                    <?php include "blogs/sidebar-search.php"; ?>
                    <div class="p-2"></div>
                    <!-- sidebar  popular posts list  -->
                    <?php include "blogs/sidebar-popular-post.php"; ?>
                    <!-- Categories List sidebar start -->
                    <?php include "blogs/sidebar-categories-list.php"; ?>
                    <!-- Post tags list sidebar -->
                    <?php include "blogs/sidebar-post-tags.php"; ?>

                </div>
                <!-- Side bar end here -->
            </div>
        </div>
    </section>

</div>



<?php include "inc/footer.php"; ?>