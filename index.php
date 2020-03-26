<?php

require_once "inc/header.php";
require_once "inc/navbar.php";
?>
<!-- *** Introduction Box *** -->
<div class="wrap">
    <!-- intro section -->
    <section class="banner_area dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" id="intro_text">
                    <h1 class="display-2" id="bd"><strong>Bangladesh</strong>
                    </h1>
                    <div>
                        <div class="p-4 align-self-center" id="tagline">
                            is monsoon mists over the delta <br> with green hills and secrets.
                        </div>
                    </div>
                    <a href="#" class="btn bg-warning">Learn Bangladesh</a>
                </div>
            </div>
        </div>
    </section>

    <!-- feature destination -->
    <?php include "home/f-destination.php"; ?>


    <!-- latest blog posts -->
    <?php include "home/latest-blog.php"; ?>

    <!-- knowledge zone -->
    <?php include "home/knowledge-zn.php"; ?>

</div>


<!-- *** introduction box end -->


<?php
include "inc/footer.php";
?>