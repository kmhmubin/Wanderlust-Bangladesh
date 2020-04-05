<?php
include "include/header.php";
include "include/sidenavbar.php";
?>

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

?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php include "include/topnavbar.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">User Profile Page</h1>
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

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-4 col-lg-5">

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <div>
                                    <!-- Card Content - Collapse -->
                                    <img class="card-img-top" src='../img/user/<?php echo $user_image; ?>' alt="Card image">
                                    <div class="card-body">
                                        <h2 class="text-center"><?php echo ucfirst($username); ?></h2>
                                        <div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8 col-lg-7">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profile Details</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive p-5">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>User Name</td>
                                                    <td><?php echo ucfirst($user_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>First Name</td>
                                                    <td><?php echo ucfirst($fname); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name</td>
                                                    <td><?php echo ucfirst($lname); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><?php echo "{$user_email}"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td><?php echo "{$user_gender}"; ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Join Year</td>
                                                    <td><?php echo "{$user_joining_year}"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bio</td>
                                                    <td><?php echo "{$user_bio}"; ?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="pl-5 pb-5">
                                    <a href="edit_profile.php" class="btn btn-primary text-white btn-lg">Edit Profile</a>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

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