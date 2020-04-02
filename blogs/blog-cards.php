<?php
$show_blogs = "SELECT * FROM posts";
// query response
$result = mysqli_query($conn, $show_blogs);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

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
        $post_ = $row['post_title'];
?>
        <!-- horizontal blog post card -->
        <div class="row mb-5 mt-5">
            <div class="col-md-12">

                <!--         blog post box       -->
                <div class="post-entry-horzontal">
                    <a href="article.php">
                        <div class="image element-animate" data-animate-effect="fadeIn">
                            <img src="../img/posts/<?php echo $post_image;  ?>" alt="" srcset="">
                        </div>
                        <span class="text">
                            <div class="post-meta">
                                <span class="author mr-2"> <?php echo $post_author; ?></span>&bullet;
                                <span class="mr-2"><?php echo $post_date;  ?> </span> &bullet;
                                <span class="mr-2"><?php echo $post_category ?></span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment_count;  ?></span>
                            </div>
                            <h2><?php echo $post_title; ?></h2>
                        </span>
                    </a>
                </div>
                <!--        blog post box end        -->

                <!--        blog post box end        -->
            </div>
        </div>
        <!-- horizontal blog post cards end -->

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