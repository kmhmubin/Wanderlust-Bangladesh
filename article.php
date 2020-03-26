<?php
include "inc/header.php";
include "inc/navbar.php";
// include "inc/loader.php";
?>

<!-- main content area  -->
<div class="wrap">

    <!-- article page style -->
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate">

                <?php include "blogs/article-content.php"; ?>

                <!-- article categories and tags -->
                <div class="pt-5">
                    <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
                </div>


                <!-- comment section -->
                <div class="pt-5">
                    <!-- comments -->
                    <h3 class="mb-5">1 Comments</h3>
                    <?php include "blogs/comments.php"; ?>
                    <!-- comment form -->
                    <?php include "blogs/comment-form.php"; ?>
                </div>
                <!-- comment section end -->

            </div>

            <!-- side bar content start -->

            <div class="col-md-12 col-lg-4 sidebar">
                <!-- sidebar search bar -->
                <?php include "blogs/sidebar-search.php"; ?>
                <!-- sidebar search bar end -->
                <!-- sidebar author section start -->
                <?php include "blogs/sidebar-author.php"; ?>
                <!-- sidebar  popular posts list  -->
                <?php include "blogs/sidebar-popular-post.php"; ?>
                <!-- Popular post list sidebar end -->
                <!-- Categories List sidebar start -->
                <?php include "blogs/sidebar-categories-list.php"; ?>
                <!-- Categories List sidebar end -->
                <!-- Post tags list sidebar -->
                <?php include "blogs/sidebar-post-tags.php"; ?>
                <!-- Post tags list sidebar end-->
            </div>
            <!-- Side bar end here -->

        </div>
</div>
</section>

<!-- article page style end -->

<!-- Related Post section -->

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3 ">Related Post</h2>
                <hr class="p-2">
            </div>
        </div>
        <!-- related post cards -->
        <?php include "blogs/related-posts.php"; ?>
    </div>
</section>
</div>

<!-- main content area end  -->


<!-- include footer -->
<?php
require_once "inc/footer.php";
?>