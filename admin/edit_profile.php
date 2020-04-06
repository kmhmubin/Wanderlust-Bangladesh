<?php
include "include/header.php";
?>


<!-- Sidebar -->
<?php include "include/sidenavbar.php";


if (isset($_SESSION['username'])) {

    // if username is true show those
    $user = $_SESSION['username'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");
    $row = mysqli_fetch_assoc($sql);
    $username = $row['username'];
    $profile_pic = $row['profile_pic'];
    $role = $row['role'];
    $email = $row['email'];
    $join_date = $row['join_date'];
    $fname = $row['first_name'];
    $lname = $row['last_name'];
    $gender = $row['gender'];
    $bio = $row['bio'];
    $pass = $row['password'];


?>

    <!-- End of Sidebar -->
    <?php

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
                        $edit_username = escape($_POST['edit_username']);
                        $edit_fname = escape($_POST['edit_fname']);
                        $edit_lname = escape($_POST['edit_lname']);
                        $edit_email = escape($_POST['edit_email']);

                        $edit_gender = escape($_POST['gender']);
                        $edit_bio = escape($_POST['bio']);

                        // update password

                        $oldPwd = $_POST['old_password'];
                        $newPwd = $_POST['new_password'];

                        $pwdFromDB = $pass;
                        $hashPwd = md5($oldPwd);
                        if ($pwdFromDB == $hashPwd) {
                            $newHashPwd = md5($newPwd);
                            $updatePass = mysqli_query($conn, "UPDATE users SET password = '$newHashPwd' WHERE username = '$user'");
                        }

                        // update image
                        if (isset($_FILES['image']) && $_FILES['image']['name'] != "") {
                            $dir = "../img/user/";
                            $filename = $_FILES['image']['name'];
                            $fileTmpName = $_FILES['image']['tmp_name'];
                            $fileExt = explode('.', $filename);
                            $fileActExt = strtolower(end($fileExt));

                            $newImage = uniqid("wbd", true) . "." . $fileActExt;
                            $target = $dir . basename($newImage);
                            move_uploaded_file($fileTmpName, $target);
                            $query = mysqli_query($conn, "UPDATE users SET profile_pic = '$target' WHERE username = '$user'");
                        }



                        // update profile info

                        $update_profile = "UPDATE users SET username = '$edit_username' ,first_name = '$edit_fname', last_name ='$edit_lname', email = '$edit_email', gender = '$edit_gender', bio = '$edit_bio' WHERE username = '$user'";

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
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_username" value="<?php echo $username; ?>" id="exampleUserName" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_fname" value="<?php echo $fname; ?>" id="exampleFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_lname" value="<?php echo $lname; ?>" id="exampleLastName" placeholder="Last  Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="edit_email" value="<?php echo $email; ?>" id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="old_password" value="" id="#oldPwd" placeholder="Old Password">
                                <p id="check" style="font-size: 11px"></p>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="new_password" value="" id="exampleInputPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" name="image" value="<?php echo $profile_pic; ?>">
                                <div class="p-1">
                                    <img src="<?php echo $profile_pic; ?>" alt="" width="100px">
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
                                <textarea name="bio" class="form-control" id="bio" cols="" rows="5" placeholder="Add Bio"><?php echo $bio; ?> </textarea>
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