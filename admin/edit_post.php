<?php
include "include/header.php";
include "include/sidenavbar.php";
?>
<?php
if (isset($_SESSION['username'])) {
    // if username is true show those
    $user = $_SESSION['username'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");
    $row = mysqli_fetch_assoc($sql);
    $username = $row['username'];
    $profile_pic = $row['profile_pic'];
    $role = $row['role'];



?>
    <script src="vendor/ckeditor5-build-classic/ckeditor.js"></script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php include "include/topnavbar.php"; ?>

            <?php
            // escape strings

            function escape($string)
            {
                global $conn;

                return mysqli_real_escape_string($conn, trim($string));
            }


            if (isset($_GET['p_id']) && $_GET['p_id'] != "") {
                // securing id form sql injection

                $the_post_id = escape($_GET['p_id']);

                $edit_query = "SELECT * FROM posts WHERE post_id = '$the_post_id'";
                $select_posts_by_id = mysqli_query($conn, $edit_query);
                while ($row = mysqli_fetch_assoc($select_posts_by_id)) {

                    $post_id = $row['post_id'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_category_id = $row['post_category_id'];
                    $post_category = $row['post_category'];
                    $post_image = $row['post_image'];
                    $post_status = $row['post_status'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
                    $post_date = $row['post_date'];
                    $post_comment_count = $row['post_comment_count'];
                }
            }
            ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- show the alert message -->
                <?php
                if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }

                if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }

                ?>

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Edit Post Board</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Post Form</h6>
                    </div>

                    <div class="card-body">
                        <?php
                        // edit post

                        if (isset($_POST['update_post'])) {
                            $post_author = escape($_POST['post_author']);
                            $post_title = escape($_POST['post_title']);
                            $post_category_id = escape($_POST['post_category']);
                            $post_status = escape($_POST['post_status']);
                            $post_image = escape($_FILES['image']['name']);
                            $post_image_temp = escape($_FILES['image']['tmp_name']);
                            $post_content = escape($_POST['post_content']);
                            $post_tags = escape($_POST['post_tags']);

                            move_uploaded_file($post_image_temp, "../img/posts/$post_image");

                            if (empty($post_image)) {
                                $sql = "SELECT * FROM posts WHERE post_id = '$the_post_id'";
                                $select_image = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($select_image)) {
                                    $post_image = $row['post_image'];
                                }
                            }

                            $post_title = mysqli_real_escape_string($conn, $post_title);

                            $update_post = "UPDATE posts SET post_title='$post_title', post_category_id = '$post_category_id', post_status = '$post_status', post_tags = '$post_tags', post_content = '$post_content', post_image = '$post_image' WHERE post_id = '$the_post_id' ";

                            $update_post_respond = mysqli_query($conn, $update_post);

                            if ($update_post_respond) {
                                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-check-circle'></i></strong> Post Update Successfully!
                    </div>";
                                header("Location: post_list.php");
                            } else {
                                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-exclamation-circle'></i></strong> Post Not Updated!
                    </div>";
                                header("Location: post_list.php");
                            }
                        }
                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- post form -->

                            <div class="form-group">
                                <label> Post Title</label>
                                <input type="text" class="form-control form-control-user" value="<?php echo htmlspecialchars(stripslashes($post_title)); ?>" name="post_title" placeholder="Post Title">
                            </div>
                            <div class="form-group">
                                <label> Post Author</label>
                                <input type="text" value="<?php echo $_SESSION['username']; ?>" class="form-control form-control-user" name="post_author" placeholder="Post Author" value="<?php echo $post_author; ?>">
                            </div>

                            <div class="form-group">
                                <label> Post Category</label>
                                <select class=" form-control form-control-user" name="post_category">
                                    <?php
                                    $query = "SELECT * FROM categories ";
                                    $select_categories = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($select_categories)) {
                                        $cat_id = $row['id'];
                                        $cat_title = $row['Category_Name'];
                                        if ($cat_id === $post_category_id) {
                                            echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
                                        } else {
                                            echo "<option value='{$cat_id}'>{$cat_title}</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label> Post Image</label>

                                <input type="file" class="form-control" name="image" id="image">
                                <div class="p-1">
                                    <img src="../img/posts/<?php echo $post_image; ?>" alt="" width="100px">
                                </div>

                            </div>
                            <div class="form-group">
                                <label> Post Content</label>
                                <textarea name="post_content" cols="80" rows="10" class="form-control" id="ckeditor"><?php echo $post_content; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label> Post Tags</label>
                                <input type="text" class="form-control form-control-user" name="post_tags" placeholder="Separate tags with a comma (,) " value="<?php echo $post_tags; ?>">
                            </div>
                            <div class="form-group">
                                <label> Post Status</label>
                                <select class="form-control" name="post_status">
                                    <option value="<?php echo $post_status ?>"> <?php echo $post_status; ?></option>
                                    <?php
                                    if ($post_status === 'published') {
                                        echo "<option value='draft'>Draft</option>";
                                    } else {
                                        echo "<option value='published'>Publish</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <a href="posts_list.php" class="btn btn-danger">Cancel</a>
                            <input type="submit" name="update_post" value="Update" class="btn btn-success"></input>
                        </form>


                    </div>







                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <script>
            ClassicEditor.create(document.getElementById('ckeditor'));
        </script>

        <?php include "include/footer.php" ?>


        <?php include "include/scripts.php"; ?>

        <!-- assign the editor to the id  -->

        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        </script>

    <?php

}
// if there is no user then re-direct to login page
else {
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