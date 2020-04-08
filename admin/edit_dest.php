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


            if (isset($_GET['dest_id']) && $_GET['dest_id'] != "") {
                // securing id form sql injection

                $the_dest_id = escape($_GET['dest_id']);

                $edit_query = "SELECT * FROM destinations WHERE dest_id = '$the_dest_id'";
                $select_posts_by_id = mysqli_query($conn, $edit_query);
                while ($row = mysqli_fetch_assoc($select_posts_by_id)) {

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
                <h1 class="h3 mb-4 text-gray-800">Edit Destination Board</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Destination Form</h6>
                    </div>

                    <div class="card-body">
                        <?php
                        // edit post

                        if (isset($_POST['update_dest'])) {
                            $dest_author = escape($_POST['dest_author']);
                            $dest_title = escape($_POST['dest_title']);
                            $dest_city_id = escape($_POST['dest_city']);
                            $dest_status = escape($_POST['dest_status']);

                            $dest_content = escape($_POST['dest_content']);
                            $dest_tags = escape($_POST['dest_tags']);


                            // upload dest images


                            $dest_image = $_FILES['image'];
                            $image_name = $_FILES['image']['name'];
                            $tmp_dir = $_FILES['image']['tmp_name'];
                            move_uploaded_file($tmp_dir, "../img/dest/" . $image_name);

                            if (empty($dest_image)) {
                                $query = "SELECT * FROM destinations WHERE dest_id = '$the_dest_id' ";
                                $select_image = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($select_image)) {
                                    $image_name = $row['dest_image'];
                                }
                            }


                            $dest_title = mysqli_real_escape_string($conn, $dest_title);

                            $update_post = "UPDATE destinations SET dest_title='$dest_title', dest_city_id = '$dest_city_id', dest_status = '$dest_status', dest_tags = '$dest_tags', dest_content = '$dest_content', dest_image = '$image_name' WHERE dest_id = '$the_dest_id' ";

                            $update_post_respond = mysqli_query($conn, $update_post);

                            if ($update_post_respond) {
                                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-check-circle'></i></strong> Destination Update Successfully!
                    </div>";
                                header("Location: destination_list.php");
                            } else {
                                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-exclamation-circle'></i></strong> Destination Not Updated!
                    </div>";
                                header("Location: destination_list.php");
                            }
                        }
                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- post form -->

                            <div class="form-group">
                                <label> Destination Title</label>
                                <input type="text" class="form-control form-control-user" value="<?php echo htmlspecialchars(stripslashes($dest_title)); ?>" name="dest_title" placeholder="Post Title">
                            </div>
                            <div class="form-group">
                                <label> Post Author</label>
                                <input type="text" value="<?php echo $_SESSION['username']; ?>" class="form-control form-control-user" name="dest_author" placeholder="Post Author" value="<?php echo $dest_author; ?>">
                            </div>

                            <div class="form-group">
                                <label> Post Category</label>
                                <select class=" form-control form-control-user" name="dest_city">
                                    <?php
                                    $query = "SELECT * FROM cities ";
                                    $select_categories = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($select_categories)) {
                                        $cat_id = $row['city_id'];
                                        $cat_title = $row['city_name'];
                                        if ($cat_id === $dest_city_id) {
                                            echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
                                        } else {
                                            echo "<option value='{$cat_id}'>{$cat_title}</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label> Destination Image</label>

                                <input type="file" class="form-control" name="image" id="image">
                                <div class="p-1">
                                    <img src="../img/dest/<?php echo $dest_image; ?>" alt="" width="100px">
                                </div>

                            </div>
                            <div class="form-group">
                                <label> Destination Content</label>
                                <textarea name="dest_content" cols="80" rows="10" class="form-control" id="ckeditor"><?php echo $dest_content; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label> Destination Tags</label>
                                <input type="text" class="form-control form-control-user" name="dest_tags" placeholder="Separate tags with a comma (,) " value="<?php echo $dest_tags; ?>">
                            </div>
                            <div class="form-group">
                                <label> Destination Status</label>
                                <select class="form-control" name="dest_status">
                                    <option value="<?php echo $dest_status ?>"> <?php echo $dest_status; ?></option>
                                    <?php
                                    if ($dest_status === 'published') {
                                        echo "<option value='draft'>Draft</option>";
                                    } else {
                                        echo "<option value='published'>Publish</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <a href="destination_list.php" class="btn btn-danger">Cancel</a>
                            <input type="submit" name="update_dest" value="Update" class="btn btn-success"></input>
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