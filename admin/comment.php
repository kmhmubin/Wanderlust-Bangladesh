<?php
include "include/header.php";
?>


<!-- Sidebar -->
<?php include "include/sidenavbar.php";  ?>
<!-- End of Sidebar -->

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
                <h1 class="h3 mb-2 text-gray-800">Comment Board</h1>

                <div class="row">

                    <!-- Admin Users total Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Comments</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <!-- total user number fetch from register table -->
                                            <?php

                                            $totalCount = "SELECT comm_id FROM comments";
                                            $Count_response = mysqli_query($conn, $totalCount);
                                            // store row numbers in a variable
                                            $row = mysqli_num_rows($Count_response);
                                            echo $row;

                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-tags fa-2x text-gray-300"></i>
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
                        <h6 class="m-0 font-weight-bold text-primary">Comments Table</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- Fetching data from database in the table -->
                            <?php
                            $show_data = "SELECT * FROM comments ORDER BY comment_date ";
                            $query_response = mysqli_query($conn, $show_data);
                            ?>


                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Comment</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Post</th>
                                        <th>Approve</th>
                                        <th>Unapproved</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Comment</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Post</th>
                                        <th>Approve</th>
                                        <th>Unapproved</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>

                                <tbody>

                                    <?php
                                    if (mysqli_num_rows($query_response) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_response)) {
                                            $comment_post_id = $row['comment_post_id'];
                                    ?>

                                            <tr>
                                                <td><?php echo $row['comm_id']; ?></td>
                                                <td><?php echo  $row['comment_name']; ?></td>
                                                <td><?php echo $row['comment_body']; ?></td>
                                                <td><?php echo $row['comment_email']; ?></td>
                                                <td><?php echo $row['comment_status']; ?></td>

                                                <td><?php echo $row['comment_date']; ?></td>
                                                <td><?php echo $row['comment_post_id']; ?></td>
                                                <td>
                                                    <form action="functions.php" method="POST">
                                                        <input type="hidden" name="approve" value="<?php echo $row['comm_id']; ?>">
                                                        <button type="submit" name="approveBtn" class="btn btn-success btn-circle">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                                <td>
                                                    <form action="functions.php" method="POST">
                                                        <input type="hidden" name="unapproved" value="<?php echo $row['comm_id']; ?>">
                                                        <button type="submit" name="unapprovedBtn" class="btn btn-warning btn-circle">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                                <td>
                                                    <form action="functions.php" method="POST">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['comm_id']; ?>">
                                                        <button type="submit" name="deleteBtn" class="btn btn-danger btn-circle">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                    <?php

                                        }
                                    } else {
                                        echo "No Record Found!";
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
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