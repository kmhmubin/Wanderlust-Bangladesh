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
                <h1 class="h3 mb-2 text-gray-800">Hotel Board</h1>

                <div class="row">
                    <!-- Add post Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Add Hotel</div>
                                        <a class="btn btn-success btn-icon-split" type="button" href="add_hotel.php">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-hotel"></i>
                                            </span>
                                            <span class="text">Add Hotel</span>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hotel fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  total post Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Hotels </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <!-- total user number fetch from register table -->
                                            <?php

                                            $totalDestinationCount = "SELECT hotel_id FROM hotels ORDER BY hotel_id";
                                            $Count_response = mysqli_query($conn, $totalDestinationCount);
                                            // store row numbers in a variable
                                            $row = mysqli_num_rows($Count_response);
                                            echo $row;

                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hotel fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Destinations Table</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Title</th>
                                        <th>City</th>
                                        <th>Author</th>
                                        <th>Image</th>

                                        <th>Views</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Title</th>
                                        <th>City</th>
                                        <th>Author</th>
                                        <th>Image</th>

                                        <th>Views</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $show_data = "SELECT * FROM hotels ORDER BY hotel_id DESC";
                                    $query_response = mysqli_query($conn, $show_data);
                                    if (mysqli_num_rows($query_response) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_response)) {

                                            $hotel_id = $row['hotel_id'];
                                            $hotel_name = $row['hotel_name'];
                                            $hotel_city = $row['hotel_city'];
                                            $hotel_author = $row['author'];
                                            $hotel_image = $row['hotel_pic'];
                                            $hotel_content = $row['hotel_info'];
                                            $hotel_city_id = $row['hotel_city_id'];
                                            $hotel_status = $row['hotel_status'];
                                            $hotel_tags = $row['hotel_tags'];
                                            $hotel_date = $row['add_date'];
                                            $hotel_view = $row['hotel_views'];

                                            echo "<tr>";


                                            echo "<td>$hotel_name</td>";

                                            $sql = "SELECT * FROM cities WHERE city_id = '$hotel_city_id'";
                                            $select_city_id = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_assoc($select_city_id)) {
                                                $id = $row['city_id'];
                                                $city_title = $row['city_name'];
                                                echo "<td>$city_title</td>";
                                            }

                                            if (!empty($hotel_author)) {
                                                echo "<td>$hotel_author</td>";
                                            } else {
                                                echo "<td>Unknown</td>";
                                            }

                                            echo "<td> <img src='../img/hotel/{$hotel_image}' width='50px'></td>";



                                            echo "<td>$hotel_view</td>";
                                            echo "<td>$hotel_date</td>";
                                            echo "<td>$hotel_status</td>";

                                            echo "<td><a class='btn btn-warning btn-circle' href='edit_hotel.php?hotel_id={$hotel_id}'><i class='fas fa-pencil-alt'></i></a></td>";
                                            echo "<td><a class='btn btn-danger btn-circle' href='destination_list.php?delete=delete&hotel_id={$hotel_id}'> <i class='fas fa-trash'></i></a></td>";

                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "No Record Found!";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        if (isset($_GET['delete'])) {
                            $post_id = $_GET['$hotel_id'];
                            // delete query
                            $delete_data = "DELETE FROM hotels WHERE hotel_id='$hotel_id'";
                            // query response
                            $delete_response = mysqli_query($conn, $delete_data);

                            if ($delete_response === true) {
                                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <strong><i class='fas fa-check-circle'></i></strong> Delete Successfully!
                                    </div>";
                                header("Location: hotel_list.php");
                            } else {
                                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <strong><i class='fas fa-exclamation-circle'></i></strong> Not Deleted!
                                    </div>";
                                header("Location: hotel_list.php");
                            }
                        }

                        ?>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



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

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    </script>

    <!--  -->