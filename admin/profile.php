<?php
include "include/header.php";
include "include/sidenavbar.php";
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
                                    <img class="card-img-top" src="../img/user/user.png" alt="Card image">
                                    <div class="card-body">
                                        <h2 class="text-center">Smile</h2>
                                        <div>
                                            <hr>
                                        </div>
                                        <div class="row justify-content-center">
                                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                                            <div class="p-2"></div>
                                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                                            <div class="p-2"></div>
                                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>

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
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>First Name</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>Otto@otto.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>Male</td>
                                                </tr>

                                                <tr>
                                                    <td>Join Year</td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>Bio</td>
                                                    <td>Otto</td>
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