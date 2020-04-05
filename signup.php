<?php
$title = "WanderlustBD - Sign Up";
include "inc/header.php";
include "inc/navbar.php";
include "login/header-signin.php";
?>

<div class="wrap">
    <div class="pt-3"></div>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="check_register.php" method="POST" onsubmit="return validation()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstName" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastName" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                    </div>
                                    <span id="nameError" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="userName" class="form-control form-control-user" id="exampleInputUserName" placeholder="User Name">
                                    <span id="userError" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                    <span id="emailError" class="text-danger"></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        <span id="passError" class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="repeatPassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                        <span id="repeatPassError" class="text-danger"></span>
                                    </div>
                                </div>
                                <input type="submit" name="register" value="Register Account" class="btn btn-primary btn-user btn-block">
                                <!-- <a href="login.php" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forget-pass.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="pt-3"></div>
</div>

<script src="js/validation.js"></script>



<?php
include "login/footer-signin.php";
require_once "inc/footer.php";
?>