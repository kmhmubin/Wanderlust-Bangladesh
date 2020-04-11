<?php
include "include/header.php";
include "include/sidenavbar.php";


// check user login or not

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

      <?php include "include/topnavbar.php"; ?>
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Posts total Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Posts</div>
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
                    <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Hotels total Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hotels</div>
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

          <!-- Destination total Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Destination</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <!-- total user number fetch from register table -->
                      <?php

                      $totalDestinationCount = "SELECT dest_id FROM destinations ORDER BY dest_id";
                      $Count_response = mysqli_query($conn, $totalDestinationCount);
                      // store row numbers in a variable
                      $row = mysqli_num_rows($Count_response);
                      echo $row;

                      ?>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-umbrella-beach fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Users total Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <!-- total user number fetch from register table -->
                      <?php

                      $totalUserCount = "SELECT id FROM users ORDER BY id";
                      $Count_response = mysqli_query($conn, $totalUserCount);
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

        <!-- Content Row -->

        <div class="row">

          <div class="col-xl-8 col-lg-7">

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardPost" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Latest Blog Posts</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardPost">
                <div class="card-body">
                  <!-- DataTales Example -->
                  <!-- Fetching data from database in the table -->
                  <?php
                  $show_data = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 5";
                  $query_response = mysqli_query($conn, $show_data);
                  ?>
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>Time</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>Time</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php
                        if (mysqli_num_rows($query_response) > 0) {
                          while ($row = mysqli_fetch_assoc($query_response)) {
                        ?>
                            <tr>
                              <td><?php echo $row['post_title']; ?></td>
                              <td><?php echo $row['post_category']; ?></td>
                              <td><?php echo $row['post_author']; ?></td>
                              <td><?php echo $row['post_date']; ?></td>
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

          </div>

          <div class="col-xl-4 col-lg-5">

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardUser" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">New User</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardUser">
                <div class="card-body">
                  This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                </div>
              </div>
            </div>

          </div>

        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Content Column -->
          <div class="col-lg-6 mb-4">

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardDestination" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Latest Destinations</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardDestination">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>2011/04/25</td>
                          <td> <a href="#" class="btn btn-danger btn-circle">
                              <i class="fas fa-trash"></i>
                            </a> <a href="#" class="btn btn-success btn-circle">
                              <i class="fas fa-check"></i>
                            </a></td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>2011/07/25</td>
                          <td> <a href="#" class="btn btn-danger btn-circle">
                              <i class="fas fa-trash"></i>
                            </a></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mb-4">

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardComment" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Latest Comments</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="card-body">
                <div class="table-responsive">

                  <!-- Fetching data from database in the table -->
                  <?php
                  $show_data = "SELECT * FROM comments ORDER BY comment_date LIMIT 5";
                  $query_response = mysqli_query($conn, $show_data);
                  ?>


                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Comment</th>
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
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include "include/footer.php" ?>


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