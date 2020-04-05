<!-- <?php include "include/header.php"; ?> -->


<div class="container">

  <div class="pt-5">
    <div class="text-center">
      <img src="img/Wanderlust Bangladesh black.png" alt="" srcset="">
    </div>
  </div>
  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <!-- show error message -->
                <!-- show the alert message -->
                <?php

                if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                }

                ?>

                <form class="user" action="login_check.php" method="POST">
                  <div class="form-group">
                    <input type="tex
                    t" name="login_username" class="form-control form-control-user" id="exampleInputUserName" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <input type="password" name="login_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                  </div>
                  <button type="submit" name="loginBtn" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.php">Forgot Password?</a>
                </div>
                <div class="pb-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <?php include "include/footer.php"; ?>
</div>

<?php include "include/scripts.php"; ?>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 4000);
</script>