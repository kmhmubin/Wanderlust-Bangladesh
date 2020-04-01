<?php
include "include/header.php";
?>


<!-- Sidebar -->
<?php include "include/sidenavbar.php";  ?>
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
            <h1 class="h3 mb-2 text-gray-800">Edit Category Info</h1>
            <div class="pt-5"></div>


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Form</h6>
                </div>

                <div class="card-body">


                    <?php
                    if (isset($_POST['edit_btn'])) {
                        $id = $_POST['edit_id'];

                        $edit_data = "SELECT * FROM categories WHERE id='$id'";
                        $edit_response = mysqli_query($conn, $edit_data);

                        foreach ($edit_response as $row) {

                    ?>
                            <form action="cat_add.php" method="POST">
                                <!-- edit form -->
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="edit_name" value="<?php echo $row['Category_Name']; ?>" id="exampleFirstName" placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <textarea name="edit_description" class="form-control" id="exampleInputCategoryDes" cols="10" rows="10" placeholder="Category Description"><?php echo $row['Category_Description']; ?>
                                    </textarea>
                                </div>
                                <a href="categories.php" class="btn btn-danger">Cancel</a>
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