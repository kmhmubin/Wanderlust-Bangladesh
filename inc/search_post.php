<?php

if (isset($_GET['submit'])) {
    $search = $_GET['search'];
    $search = mysqli_real_escape_string($conn, $search);
    $search = htmlentities($search);

    // query for search
    $sql = "SELECT * FROM posts WHERE post_title LIKE '$search' OR post_content LIKE '$search' OR post_tags LIKE '$search'  OR post_title LIKE '%$search%' OR post_content LIKE '%$search%' OR post_tags LIKE '%$search%' ";
    // response 
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
?>
            <!-- horizontal blog post card -->
            <div class="row mb-5 mt-5">
                <div class="col-md-12">

                    <!--         blog post box       -->
                    <div class="post-entry-horzontal">
                        <a href="article.php">
                            <div class="image element-animate" data-animate-effect="fadeIn">
                                <img src="img/posts/<?php echo $row['post_image'];  ?>" alt="post_image">
                            </div>
                            <span class="text">
                                <div class="post-meta">
                                    <span class="author mr-2"> <?php echo $row['post_author']; ?></span>&bullet;
                                    <span class="mr-2"><?php echo $row['post_date'];  ?> </span> &bullet;
                                    <span class="mr-2"><?php echo $row['post_category']; ?></span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $row['post_comment_count'];  ?></span>
                                </div>
                                <h2><?php echo $row['post_title']; ?></h2>
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
        ?>
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Post Not Found!</h4>
            <p>Ops! Looks like date not found.</p>
            <hr>
            <p class="mb-0">Please try again</p>
        </div>
<?php
    }
} else {
    header("Location: blogs.php");
}
?>