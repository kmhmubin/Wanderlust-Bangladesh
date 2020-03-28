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
                  <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
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
                  <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
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
                  <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
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
                  <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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
            <div class="collapse show" id="collapseCardComment">
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
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  <?php include "include/footer.php" ?>


  <?php include "include/scripts.php"; ?>