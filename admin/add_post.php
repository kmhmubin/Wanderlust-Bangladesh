<?php
include "include/header.php";
include "include/sidenavbar.php";
?>

<script src="vendor/ckeditor5-build-classic/ckeditor.js"></script>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php include "include/topnavbar.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
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

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Add Post Board</h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Post Form</h6>
                </div>

                <div class="card-body">


                    <form action="functions.php" method="POST" enctype="multipart/form-data">
                        <!-- post form -->

                        <div class="form-group">
                            <label> Post Title</label>
                            <input type="text" class="form-control form-control-user" name="title" placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <label> Post Author</label>
                            <input type="text" value="<?php echo $_SESSION['username']; ?>" class="form-control form-control-user" name="author" placeholder="Post Author">
                        </div>

                        <div class="form-group">
                            <label> Post Category</label>
                            <select class=" form-control form-control-user" name="category">
                                <?php
                                $category_grab = "SELECT * FROM categories";
                                $cat_response = mysqli_query($conn, $category_grab);
                                while ($row = mysqli_fetch_assoc($cat_response)) {
                                    $cat_title = $row['Category_Name'];
                                    echo "<option value='$cat_title'>$cat_title</option>";
                                }

                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label> Post Image</label>
                            <input type="file" class="form-control form-control-user" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label> Post Content</label>
                            <textarea name="content" cols="80" rows="10" class="form-control" id="ckeditor"></textarea>
                        </div>

                        <div class="form-group">
                            <label> Post Tags</label>
                            <input type="text" class="form-control form-control-user" name="tags" placeholder="Separate tags with a comma (,) ">
                        </div>
                        <div class="form-group">
                            <label> Post Status</label>
                            <select class="form-control" name="status">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>
                        <a href="posts_list.php" class="btn btn-danger">Cancel</a>
                        <input type="submit" name="publish" value="Publish Post" class="btn btn-success"></input>
                    </form>


                </div>







            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <script>
        ClassicEditor.create(document.getElementById('ckeditor'));
    </script>

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