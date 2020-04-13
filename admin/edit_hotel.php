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


            if (isset($_GET['hotel_id']) && $_GET['hotel_id'] != "") {
                // securing id form sql injection

                $the_hotel_id = escape($_GET['hotel_id']);

                $edit_query = "SELECT * FROM hotels WHERE hotel_id = '$the_hotel_id'";
                $select_hotels_by_id = mysqli_query($conn, $edit_query);
                while ($row = mysqli_fetch_assoc($select_hotels_by_id)) {

                    $hotel_id = $row['hotel_id'];
                    $hotel_name = $row['hotel_name'];
                    $hotel_city = $row['hotel_city'];
                    $hotel_city_id = $row['hotel_city_id'];
                    $hotel_type = $row['hotel_type'];
                    $hotel_map = $row['hotel_map'];
                    $hotel_info = $row['hotel_info'];
                    $hotel_price = $row['hotel_price'];
                    $hotel_website = $row['website'];
                    $hotel_author = $row['author'];
                    $hotel_pic = $row['hotel_pic'];
                    $hotel_address = $row['hotel_address'];
                    $hotel_views = $row['hotel_views'];
                    $hotel_tags = $row['hotel_tags'];
                    $hotel_status = $row['hotel_status'];
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

                        if (isset($_POST['hotel_update'])) {
                            $hotel_name = escape($_POST['hotel_name']);
                            $hotel_author = escape($_POST['author']);
                            $hotel_city = escape($_POST['city']);
                            $hotel_content = escape($_POST['content']);
                            $hotel_tags = escape($_POST['tags']);
                            $hotel_status = escape($_POST['status']);
                            $hotel_type = escape($_POST['hotel_type']);
                            $hotel_map = escape($_POST['hotel_map']);
                            $hotel_price = escape($_POST['hotel_price']);
                            $hotel_website = escape($_POST['hotel_website']);
                            $hotel_address = escape($_POST['hotel_address']);


                            // upload dest images


                            $hotel_image = $_FILES['image'];
                            $image_name = $_FILES['image']['name'];
                            $tmp_dir = $_FILES['image']['tmp_name'];
                            move_uploaded_file($tmp_dir, "../img/hotel/" . $image_name);

                            if (empty($hotel_image)) {
                                $query = "SELECT * FROM `hotels` WHERE hotel_id = '$the_hotel_id' ";
                                $select_image = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($select_image)) {
                                    $image_name = $row['hotel_pic'];
                                }
                            }



                            $update_hotel = "UPDATE hotels SET hotel_name = '$hotel_name', hotel_author = '$hotel_author', hotel_city_id = '$hotel_city', hotel_info = '$hotel_content', hotel_tags = '$hotel_tags', hotel_status = '$hotel_status', hotel_type = '$hotel_type', hotel_map = '$hotel_map', hotel_price = '$hotel_price', website = '$hotel_website', hotel_address = '$hotel_address', hotel_pic = '$image_name' WHERE hotel_id = '$the_hotel_id'  ";

                            $update_hotel_respond = mysqli_query($conn, $update_hotel);

                            if ($update_hotel_respond) {
                                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-check-circle'></i></strong> Hotel Update Successfully!
                    </div>";
                                header("Location: hotel_list.php");
                            } else {
                                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-exclamation-circle'></i></strong> Hotel Not Updated!
                    </div>";
                                header("Location: hotel_list.php");
                            }
                        }
                        ?>

                        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <!-- post form -->

                            <div class="form-group">
                                <label> Hotel Name</label>
                                <input type="text" class="form-control form-control-user" name="hotel_name" placeholder="Hotel Name" value="<?php echo $hotel_name; ?>">
                            </div>
                            <div class="form-group">
                                <label> Hotel Added by Author</label>
                                <input type="text" value="<?php echo $_SESSION['username']; ?>" class="form-control form-control-user" name="author" placeholder="Post Author">
                            </div>

                            <div class="form-group">
                                <label> Hotel Situated City</label>
                                <select class=" form-control form-control-user" name="city">
                                    <?php
                                    $query = "SELECT * FROM cities ";
                                    $select_categories = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($select_categories)) {
                                        $cat_id = $row['city_id'];
                                        $cat_title = $row['city_name'];
                                        if ($cat_id === $hotel_city_id) {
                                            echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
                                        } else {
                                            echo "<option value='{$cat_id}'>{$cat_title}</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label> Hotel Image</label>
                                <input type="file" class="form-control form-control-user" name="image" id="image">
                                <div class="p-1">
                                    <img src="../img/hotel/<?php echo $hotel_pic; ?>" alt="" width="100px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Hotel Type</label>
                                <input type="text" class="form-control form-control-user" name="hotel_type" placeholder="Hotel Type ex: 4-star" value="<?php echo $hotel_type; ?>">
                            </div>
                            <div class="form-group">
                                <label> Hotel Map</label>
                                <input type="text" class="form-control form-control-user" name="hotel_map" placeholder="Hotel Map url" value="<?php echo($hotel_map); ?>">
                            </div>
                            <div class="form-group">
                                <label> Hotel Price</label>
                                <input type="text" class="form-control form-control-user" name="hotel_price" placeholder="Hotel Price" value="<?php echo($hotel_price); ?>">
                            </div>
                            <div class="form-group">
                                <label> Hotel Website Address</label>
                                <input type="text" class="form-control form-control-user" name="hotel_website" placeholder="Hotel Website Address" value="<?php echo($hotel_website); ?>">
                            </div>
                            <div class="form-group">
                                <label> Hotel Address</label>
                                <input type="text" class="form-control form-control-user" name="hotel_address" placeholder="Hotel Address" value="<?php echo($hotel_address); ?>">
                            </div>

                            <div class="form-group">
                                <label> Hotel Description</label>
                                <textarea name="content" cols="80" rows="10" class="form-control" id="ckeditor"><?php echo "$hotel_info"; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label> Hotel Tags</label>
                                <input type="text" class="form-control form-control-user" name="tags" placeholder="Separate tags with a comma (,) " value="<?php echo($hotel_tags); ?>">
                            </div>
                            <div class="form-group">
                                <label> Hotel Status</label>
                                <select class="form-control" name="status" >
                                   <option value="<?php echo $hotel_status ?>"> <?php echo $hotel_status; ?></option>
                                    <?php
                                    if ($hotel_status === 'published') {
                                        echo "<option value='draft'>Draft</option>";
                                    } else {
                                        echo "<option value='published'>Publish</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <a href="hotel_list.php" class="btn btn-danger">Cancel</a>
                            <input type="submit" name="hotel_update" value="Update" class="btn btn-success"></input>
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