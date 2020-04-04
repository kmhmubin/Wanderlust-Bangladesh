<?php
include "include/header.php";
?>


<!-- Sidebar -->
<?php include "include/sidenavbar.php";


if (isset($_SESSION['username'])) {
    // if username is true show those
?>

    <!-- End of Sidebar -->

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

                    <div class="card-body">



                        <form action="add_admin.php" method="POST">
                            <!-- edit form -->
                            <input type="hidden" name="edit_id" value="">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_fname" value="" id="exampleFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_lname" value="" id="exampleLastName" placeholder="Last  Name">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="edit_username" value="" id="exampleInputUserName" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="edit_email" value="" id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="edit_password" value="" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" name="image" value="">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="facebook" value="" placeholder="Facebook Profile">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="twitter" value="" placeholder="Twitter Profile">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="instagram" value="" placeholder="Instagram Profile">
                            </div>
                            <div class="form-group">
                                <textarea name="bio" class="form-control" id="bio" cols="" rows="5" placeholder="Add Bio"></textarea>
                            </div>


                            <a href="profile.php" class="btn btn-danger">Cancel</a>
                            <button type="submit" name="updateBtn" class="btn btn-primary">Update</button>
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