<?php
include "include/header.php";
?>


<!-- Sidebar -->
<?php include "include/sidenavbar.php";

    // if username is true show those

    // if username is true show those
    if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");
        $row = mysqli_fetch_assoc($sql);
        $username = $row['username'];
        $profile_pic = $row['profile_pic'];
        $role = $row['role'];
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
                <div class="pt-5"></div>


                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Form</h6>
                    </div>

                    <div class="card-body">


                        <?php
                        if (isset($_POST['edit_btn'])) {
                            $id = $_POST['edit_id'];

                            $edit_data = "SELECT * FROM users WHERE id='$id'";
                            $edit_response = mysqli_query($conn, $edit_data);

                            foreach ($edit_response as $row) {

                        ?>
                                <form action="" method="POST">
                                    <!-- edit form -->
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="edit_fname" value="<?php echo $row['first_name']; ?>" id="exampleFirstName" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="edit_lname" value="<?php echo $row['last_name']; ?>" id="exampleLastName" placeholder="Last  Name">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="edit_username" value="<?php echo $row['username']; ?>" id="exampleInputUserName" placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="edit_email" value="<?php echo $row['email']; ?>" id="exampleInputEmail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="edit_password" value="<?php echo $row['password']; ?>" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>User Role</label>
                                        <select name="updateUserRole" class=" form-control">
                                            <option value="Admin">Admin</option>
                                            <option value="Client">Client</option>
                                        </select>
                                    </div>

                                    <a href="admin_user.php" class="btn btn-danger">Cancel</a>
                                    <button type="submit" name="updateBtn" class="btn btn-primary">Update</button>
                                </form>
                        <?php

                            }
                        }
                        ?>




                    </div>







                </div>
                <!-- /.container-fluid -->
                <div class="pt-5"></div>
                <div class="pt-5"></div>
                <div class="pt-5"></div>
            </div>
            <!-- End of Main Content -->
            <div class="pt-5"></div>
            <div class="pt-5"></div>


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