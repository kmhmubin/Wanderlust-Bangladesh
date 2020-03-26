<!-- include header and navbar -->
<?php
include "inc/header.php";
include "inc/navbar.php";
// include "inc/loader.php";
?>


<!-- main container -->

<div class="wrap">
    <section class="site-section pt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="mb-4">Hotels</h2>
                    <hr>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <!-- place card -->
                    <?php include "hotels/hotels-list.php"; ?>
                    <!-- page navigation -->
                    <?php include "blogs/page-navigation.php"; ?>
                </div>
                <!-- main content end -->

                <!-- side bar content start -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <!-- sidebar search -->
                    <?php include "hotels/hotels-search.php"; ?>
                    <!-- Categories List sidebar start -->
                    <?php include "hotels/hotels-cities.php"; ?>

                </div>
                <!-- Side bar end here -->
            </div>
        </div>
    </section>
</div>




<!-- include footer -->
<?php
require_once "inc/footer.php";
?>