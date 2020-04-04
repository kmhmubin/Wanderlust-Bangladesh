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
                    <!-- Add post Card Example -->
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

                    <!--  total post Card Example -->
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
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Image</th>
                                        <th>Comments</th>
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
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Image</th>
                                        <th>Comments</th>
                                        <th>Views</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $show_data = "SELECT * FROM posts ORDER BY post_id DESC";
                                    $query_response = mysqli_query($conn, $show_data);
                                    if (mysqli_num_rows($query_response) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_response)) {

                                            $post_id = $row['post_id'];
                                            $post_title = $row['post_title'];
                                            $post_category = $row['post_category'];
                                            $post_author = $row['post_author'];
                                            $post_image = $row['post_image'];
                                            $post_content = $row['post_content'];
                                            $post_category_id = $row['post_category_id'];
                                            $post_status = $row['post_status'];
                                            $post_tags = $row['post_tags'];
                                            $post_comment_count = $row['post_comment_count'];
                                            $post_date = $row['post_date'];
                                            $post_view = $row['post_views'];

                                            echo "<tr>";

                                            // echo "<td>$post_id</td>";
                                            echo "<td>$post_title</td>";

                                            $sql = "SELECT * FROM categories WHERE id = '$post_category_id'";
                                            $select_categories_id = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_assoc($select_categories_id)) {
                                                $id = $row['id'];
                                                $cat_title = $row['Category_Name'];
                                                echo "<td>$cat_title</td>";
                                            }

                                            if (!empty($post_author)) {
                                                echo "<td>$post_author</td>";
                                            } else {
                                                echo "<td>Unknown</td>";
                                            }

                                            echo "<td> <img src='../img/posts/{$post_image}' width='50px'></td>";


                                            $query = "SELECT * FROM `comments` WHERE comment_post_id = '$post_id'";
                                            $select_comment = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($select_comment) > 0) {
                                                $row = mysqli_fetch_assoc($select_comment);
                                                $comment_id = $row['comm_id'];
                                                $count_comments = mysqli_num_rows($select_comment);
                                                echo "<td><a href = 'comment.php?id=$post_id'>$count_comments</a></td>";
                                            } else {
                                                echo "<td>0</td>";
                                            }


                                            echo "<td>$post_view</td>";
                                            echo "<td>$post_date</td>";
                                            echo "<td>$post_status</td>";

                                            echo "<td><a class='btn btn-warning btn-circle' href='edit_post.php?p_id={$post_id}'><i class='fas fa-pencil-alt'></i></a></td>";
                                            echo "<td><a class='btn btn-danger btn-circle' href='post_list.php?delete=delete&p_id={$post_id}'> <i class='fas fa-trash'></i></a></td>";

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
                            $post_id = $_GET['p_id'];
                            // delete query
                            $delete_data = "DELETE FROM posts WHERE post_id='$post_id'";
                            // query response
                            $delete_response = mysqli_query($conn, $delete_data);

                            if ($delete_response === true) {
                                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <strong><i class='fas fa-check-circle'></i></strong> Delete Successfully!
                                    </div>";
                                header("Location: post_list.php");
                            } else {
                                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <strong><i class='fas fa-exclamation-circle'></i></strong> Not Deleted!
                                    </div>";
                                header("Location: post_list.php");
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