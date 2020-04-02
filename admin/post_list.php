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
                <h1 class="h3 mb-2 text-gray-800">Posts Board</h1>

                <div class="row">
                    <!-- Add admin Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Add Post</div>
                                        <a class="btn btn-success btn-icon-split" type="button" href="add_post.php">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-user-plus"></i>
                                            </span>
                                            <span class="text">Add Post</span>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
                                        <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Posts </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <!-- total user number fetch from register table -->
                                            <?php

                                            $totalPostCount = "SELECT post_id FROM posts ORDER BY post_id";
                                            $Count_response = mysqli_query($conn, $totalPostCount);
                                            // store row numbers in a variable
                                            $row = mysqli_num_rows($Count_response);
                                            echo $row;

                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
                        <h6 class="m-0 font-weight-bold text-primary">Posts Table</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Fetching data from database in the table -->
                            <?php
                            $show_data = "SELECT * FROM posts";
                            $query_response = mysqli_query($conn, $show_data);
                            ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Image</th>
                                        <th>Content</th>
                                        <th>Comments</th>
                                        <th>Views</th>
                                        <th>Publish Data</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Image</th>
                                        <th>Content</th>
                                        <th>Comments</th>
                                        <th>Views</th>
                                        <th>Publish Data</th>
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
                                                <td><?php echo $row['post_id']; ?></td>
                                                <td><?php echo $row['post_title']; ?></td>
                                                <td><?php echo $row['post_category']; ?></td>
                                                <td><?php echo $row['post_author']; ?></td>
                                                <td><?php echo $row['post_image']; ?></td>
                                                <td> <img src="../img/posts/<?php echo $row['post_image']; ?>" width="50px;"></td>
                                                <td><?php echo $row['post_content']; ?></td>
                                                <td><?php echo $row['post_comment_count']; ?></td>
                                                <td><?php echo $row['post_views']; ?></td>
                                                <td><?php echo $row['post_date']; ?></td>

                                                <td>
                                                    <form action="post_edit.php" method="POST">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['post_id']; ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-warning btn-circle">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                                <td>
                                                    <form action="functions.php" method="POST">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['post_id']; ?>">
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