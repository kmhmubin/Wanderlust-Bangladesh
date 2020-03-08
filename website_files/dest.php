<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="icon" href="assets/img/favicon-96x96.png" type="image/png" />
    <script src="https://kit.fontawesome.com/a2e320ebe3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/dest.css">
    <title>Destinations</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
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
                        <a href="dest.php" class="nav-link active">Explore</a>
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
                        <a href="signup.php" class="nav-link btn btn-outline-info">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header section -->

    <header id="d_title">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 id="destination">Destination</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- destination cards section -->
    <section class="td py-4">
        <div class="container">
            <!-- rows -->
            <div class="row">
                <div class="col mb-4">
                    <!-- cards -->
                    <div class="card border border-warning">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/dhaka-city.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Dhaka</h4>
                            <p class="card-text">
                                Huge modern city with 17th-century old town, home to Mughal Places & modern parliament complex.
                            </p>
                            <!-- footer button -->
                            <div class="row text-center" id="cf">
                                <div class="col pl-3">
                                    <a href="dhaka.php" class="btn btn-outline-info btn-compass"><i class="fas fa-compass"></i> Travel Guide</a>
                                </div>
                                <div class="col">
                                    <a href="booking.php" class="btn btn-outline-info btn-hotel "><i class="fas fa-hotel"></i> Hotels</a>
                                </div>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>

                <div class="col mb-4">
                    <!-- cards -->
                    <div class="card border border-success">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/des2.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Sundarbans</h4>
                            <p class="card-text">
                                One of the world's natural wonders, this massive forest is also a tiger & ecological preserve.
                            </p>
                            <!-- footer button -->
                            <div class="row text-center" id="cf">
                                <div class="col pl-3">
                                    <a href="sundarbans.php" class="btn btn-outline-info btn-compass"><i class="fas fa-compass"></i> Travel Guide</a>
                                </div>
                                <div class="col">
                                    <a href="booking.php" class="btn btn-outline-info btn-hotel "><i class="fas fa-hotel"></i> Hotels</a>
                                </div>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>

                <div class="col mb-4">
                    <!-- cards -->
                    <div class="card border border-primary">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/des4.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Cox's Bazar</h4>
                            <p class="card-text">
                                Cox's Bazar is a city, fishing port, tourism centre in southeastern Bangladesh.
                            </p>
                            <!-- footer button -->
                            <div class="row text-center" id="cf">
                                <div class="col pl-3">
                                    <a href="cox.php" class="btn btn-outline-info btn-compass"><i class="fas fa-compass"></i> Travel Guide</a>
                                </div>
                                <div class="col">
                                    <a href="booking.php" class="btn btn-outline-info btn-hotel "><i class="fas fa-hotel"></i> Hotels</a>
                                </div>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- rows end -->
            </div>

            <!-- rows -->
            <div class="row">
                <div class="col mb-4">
                    <!-- cards -->
                    <div class="card border border-warning">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/cg.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Chittagong</h4>
                            <p class="card-text">
                                Chittagong is large port city on the southeastern coast of Bangladesh.
                            </p>
                            <!-- footer button -->
                            <div class="row text-center" id="cf">
                                <div class="col pl-3">
                                    <a href="chittagong.php" class="btn btn-outline-info btn-compass"><i class="fas fa-compass"></i> Travel Guide</a>
                                </div>
                                <div class="col">
                                    <a href="booking.php" class="btn btn-outline-info btn-hotel "><i class="fas fa-hotel"></i> Hotels</a>
                                </div>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>

                <div class="col mb-4">
                    <!-- cards -->
                    <div class="card border border-success">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/sylhet.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Sylhet</h4>
                            <p class="card-text">
                                Sylhet is a city in eastern Bangladesh, on the Surma River.
                            </p>
                            <!-- footer button -->
                            <div class="row text-center" id="cf">
                                <div class="col pl-3">
                                    <a href="sylhet.php" class="btn btn-outline-info btn-compass"><i class="fas fa-compass"></i> Travel Guide</a>
                                </div>
                                <div class="col">
                                    <a href="booking.php" class="btn btn-outline-info btn-hotel "><i class="fas fa-hotel"></i> Hotels</a>
                                </div>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>

                <div class="col mb-4">
                    <!-- cards -->
                    <div class="card border border-primary">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/stmartin.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">St. Martin's Island</h4>
                            <p class="card-text">
                                St. Martin's Island is a small island in the northeastern part of the Bangladesh.
                            </p>
                            <!-- footer button -->
                            <div class="row text-center" id="cf">
                                <div class="col pl-3">
                                    <a href="cox.php" class="btn btn-outline-info btn-compass"><i class="fas fa-compass"></i> Travel Guide</a>
                                </div>
                                <div class="col">
                                    <a href="booking.php" class="btn btn-outline-info btn-hotel "><i class="fas fa-hotel"></i> Hotels</a>
                                </div>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- rows end -->
            </div>


        </div>
    </section>





    <?php require_once 'footer.php'; ?>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>