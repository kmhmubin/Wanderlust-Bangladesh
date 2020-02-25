<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="icon" href="assets/img/favicon-96x96.png" type="image/png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/signup.css">
    <title>Sign Up</title>
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="main-nav">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <h3 id="name">Wanderlust Bangladesh</h3>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="dest.php" class="nav-link">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a href="booking.php" class="nav-link">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a href="video.php" class="nav-link">Video</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="signin.php" class="nav-link">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link btn btn-outline-info active">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- sign up form -->

    <section class="signup py-5">
        <div class="container">
            <form id="form" class="form">
                <h2>Register With Us</h2>
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter username" />
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Enter email" />
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter password" />
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password2">Confirm Password</label>
                    <input type="password" id="password2" placeholder="Enter password again" />
                    <small>Error message</small>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <!-- footer -->
    <section class="ftr">
        <footer class="page-footer font-small blue-grey lighten-5">
            <!-- Copyright -->
            <div class="footer-copyright text-center text-dark py-3" style="background-color: #21d192;">© 2020 Copyright:
                <a class="text-light" href="index.php"> Wanderlust-Bangladesh</a>
            </div>
            <!-- Copyright -->
        </footer>
    </section>

    <!-- js -->
    <script src="assets/js/signup.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>