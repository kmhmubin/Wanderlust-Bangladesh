<?php
$title = "WanderlustBD - Destination Details";
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

                <?php
                if (isset($_GET['dest_id'])) {
                    $id = $_GET['dest_id'];

                    $show_article = "SELECT * FROM destinations WHERE dest_id = '$id'";
                    $respond = mysqli_query($conn, $show_article);
                } else {
                    header("Location: destination.php");
                }
                ?>

                <?php include "destination/destination_article.php"; ?>

                <!-- article categories and tags -->
                <div class="pt-5">
                    <p>Categories: <a href="#"><?php echo $dest_city; ?></a> Tags: <a href="#"><?php echo "#" . $dest_tags;  ?></a></p>
                </div>


            </div>

            <!-- side bar content start -->

            <div class="col-md-12 col-lg-4 sidebar">
                <!-- sidebar search bar -->
                <?php include "destination/des-search.php"; ?>
                <!-- sidebar search bar end -->
                <div class="p-5"></div>
                <!-- Categories List sidebar start -->
                <?php include "destination/city-list.php"; ?>
                <!-- Categories List sidebar end -->

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

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>