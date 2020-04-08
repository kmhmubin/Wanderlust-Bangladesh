<?php
include "include/header.php";
include "include/sidenavbar.php";
?>
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
                <h1 class="h3 mb-4 text-gray-800">Add Destinations Form</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Destination Form</h6>
                    </div>

                    <div class="card-body">


                        <form action="functions.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <!-- post form -->

                            <div class="form-group">
                                <label> Destination Title</label>
                                <input type="text" class="form-control form-control-user" name="title" placeholder="Destination Title">
                            </div>
                            <div class="form-group">
                                <label> Destination Author</label>
                                <input type="text" value="<?php echo $_SESSION['username']; ?>" class="form-control form-control-user" name="author" placeholder="Post Author">
                            </div>

                            <div class="form-group">
                                <label> Destination City</label>
                                <select class=" form-control form-control-user" name="city">
                                    <?php
                                    $cities_grab = "SELECT * FROM cities";
                                    $cities_respond = mysqli_query($conn, $cities_grab);
                                    while ($row = mysqli_fetch_assoc($cities_respond)) {
                                        $cities_name = $row['city_name'];
                                        echo "<option value='$cities_name'>$cities_name</option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label> Destination Image</label>
                                <input type="file" class="form-control form-control-user" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label> Destination Info</label>
                                <textarea name="content" cols="80" rows="10" class="form-control" id="ckeditor"></textarea>
                            </div>

                            <div class="form-group">
                                <label> Destination Tags</label>
                                <input type="text" class="form-control form-control-user" name="tags" placeholder="Separate tags with a comma (,) ">
                            </div>
                            <div class="form-group">
                                <label> Destination Status</label>
                                <select class="form-control" name="status">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>
                            <a href="posts_list.php" class="btn btn-danger">Cancel</a>
                            <input type="submit" name="dest" value="Publish Destination" class="btn btn-success"></input>
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