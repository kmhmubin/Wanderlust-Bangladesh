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

            <!-- Add admin modal form -->

            <!--Add  Modal -->
            <div class="modal fade" id="addAdminProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Category Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="user" action="cat_add.php" method="POST">
                            <div class="modal-body">
                                <!-- modal body start -->

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="cat_name" id="exampleInputCategory" placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <textarea name="cat_description" class="form-control" id="exampleInputCategoryDes" cols="10" rows="5" placeholder="Category Description"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="categoryBtn">Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


            <!-- Begin Page Content -->
            <div class="container-fluid">



                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Category Board</h1>

                <div class="row">
                    <!-- Add admin Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Add Category</div>
                                        <button class="btn btn-success btn-icon-split" type="button" data-toggle="modal" data-target="#addAdminProfile">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-user-plus"></i>
                                            </span>
                                            <span class="text">Add Category</span>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-tags fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Admin Users total Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Categories</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <!-- total user number fetch from register table -->
                                            <?php

                                            $totalCount = "SELECT id FROM categories ORDER BY id";
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
                        <h6 class="m-0 font-weight-bold text-primary">Category Table</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- Fetching data from database in the table -->
                            <?php
                            $show_data = "SELECT * FROM categories";
                            $query_response = mysqli_query($conn, $show_data);
                            ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php
                                    if (mysqli_num_rows($query_response) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_response)) {
                                    ?>

                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['Category_Name']; ?></td>
                                                <th><?php echo $row['Category_Description']; ?></th>
                                                <td>
                                                    <form action="cat_edit.php" method="POST">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-warning btn-circle">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                                <td>
                                                    <form action="cat_add.php" method="POST">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
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