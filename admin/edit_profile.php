<?php
include "include/header.php";
?>


<!-- Sidebar -->
<?php include "include/sidenavbar.php";


if (isset($_SESSION['username'])) {
    // if username is true show those
?>

    <!-- End of Sidebar -->
    <?php
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM users WHERE User_Name = '$username'";
        $select_user_profile_info = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($select_user_profile_info)) {
            $user_id = $row['id'];
            $user_name = $row['User_Name'];
            $fname = $row['First_Name'];
            $lname = $row['Last_Name'];
            $user_email = $row['email'];
            $user_password = $row['Password'];
            $user_image = $row['profile_image'];
            $user_bio = $row['bio'];
            $user_gender = $row['gender'];
            $user_fb = $row['fb'];
            $user_tw = $row['tw'];
            $user_ig = $row['ig'];
            $user_joining_year = $row['join_year'];
            $user_post = $row['post_id'];
        }
    }

    function escape($string)
    {
        global $conn;

        return mysqli_real_escape_string($conn, trim($string));
    }

    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include "include/topnavbar.php";  ?>
            <!-- End of Topbar -->


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Edit Admin Profile</h1>


                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Profile Edit Form</h6>
                    </div>

                    <?php
                    if (isset($_POST['edit_user'])) {
                        $username = escape($_POST['username']);
                        $edit_fname = escape($_POST['edit_fname']);
                        $edit_lname = escape($_POST['edit_lname']);
                        $edit_email = escape($_POST['edit_email']);
                        $edit_password = escape($_POST['edit_password']);
                        $password = password_hash($edit_password, PASSWORD_BCRYPT);
                        $edit_gender = escape($_POST['gender']);
                        $edit_bio = escape($_POST['bio']);
                        $edit_fb = escape($_POST['facebook']);
                        $edit_tw = escape($_POST['twitter']);
                        $edit_ig = escape($_POST['instagram']);

                        $edit_user_image = escape($_FILES['image']['name']);
                        $edit_image_temp = escape($_FILES['image']['tmp_name']);

                        move_uploaded_file($edit_image_temp, "../img/user/$edit_user_image");

                        if (empty($edit_user_image)) {
                            $sql = "SELECT * FROM users WHERE id = '$user_id'";
                            $select_image = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($select_image)) {
                                $edit_user_image = $row['profile_image'];
                            }
                        }

                        // update profile info

                        $update_profile = "UPDATE users SET First_Name = '$edit_fname', Last_Name ='$edit_lname', email = '$edit_email',Password = '$password', gender = '$edit_gender',profile_image = '$edit_user_image', bio = '$edit_bio', fb = '$edit_fb', tw = '$edit_tw', ig = '$edit_ig' WHERE id = '$user_id'";

                        $update_profile_response = mysqli_query($conn, $update_profile);

                        if ($update_profile_response) {
                            $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-check-circle'></i></strong> Profile Update Successfully!
                    </div>";
                            header("Location: profile.php");
                        } else {
                            $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-exclamation-circle'></i></strong> Profile Not Updated!
                    </div>";
                            header("Location: profile.php");
                        }
                    }


                    ?>
                    <div class="card-body">



                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- edit form -->
                            <input type="hidden" name="edit_id" value="">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_fname" value="<?php echo $fname; ?>" id="exampleFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_lname" value="<?php echo $lname; ?>" id="exampleLastName" placeholder="Last  Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="edit_email" value="<?php echo $user_email; ?>" id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="edit_password" value="<?php echo $user_password; ?>" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" name="image" value="<?php echo $user_image; ?>">
                                <div class="p-1">
                                    <img src="../img/user/<?php echo $user_image; ?>" alt="" width="100px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="facebook" value="<?php echo $user_fb; ?>" placeholder="Facebook Profile">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="twitter" value="<?php echo $user_tw; ?>" placeholder="Twitter Profile">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="instagram" value="<?php echo $user_ig; ?>" placeholder="Instagram Profile">
                            </div>
                            <div class="form-group">
                                <textarea name="bio" class="form-control" id="bio" cols="" rows="5" placeholder="Add Bio"><?php echo $user_bio; ?> </textarea>
                            </div>


                            <a href="profile.php" class="btn btn-danger">Cancel</a>
                            <button type="submit" name="edit_user" class="btn btn-primary">Update</button>
                        </form>





                    </div>







                </div>
            </div>

            <?php include "include/footer.php"; ?>


            <?php include "include/scripts.php"; ?>

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