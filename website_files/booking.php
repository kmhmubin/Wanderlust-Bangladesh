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
    <link rel="stylesheet" href="assets/css/hotel.css">
    <title>Booking</title>
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
                        <a href="dest.php" class="nav-link">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a href="booking.php" class="nav-link active">Booking</a>
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
                    <h1 id="destination">Bookings</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="hotels">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <!-- cards -->
                    <div class="card border border-primary">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/maple_leaf.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Western Plus Maple Leaf</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fas fa-map-marker-alt"></i> Dhaka
                                </div>
                                <div class="col-sm-6">
                                    <i class="fas fa-star"></i> 4-star hotel
                                </div>
                            </div>
                            <div class="card-text pt-2 pb-2">
                                Straightforward airport hotel with modern rooms & suites, plus a spa, a restaurant & a bar.
                            </div>
                            <!-- footer button -->
                            <div class="row text-center">
                                <a class="btn btn-outline-primary btn-lg btn-block" href="#" role="button">Check Availability</a>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>

                <div class="col-md-4 mb-4">
                    <!-- cards -->
                    <div class="card border border-primary">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/maple_leaf.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">Amari Dhaka</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fas fa-map-marker-alt"></i> Dhaka
                                </div>
                                <div class="col-sm-6">
                                    <i class="fas fa-star"></i> 5-star hotel
                                </div>
                            </div>
                            <div class="card-text pt-2 pb-2">
                                Elegant high-rise hotel offering 2 bar & a restaurant, plus a rooftop pool, a spa & event space.
                            </div>
                            <!-- footer button -->
                            <div class="row text-center">
                                <a class="btn btn-outline-primary btn-lg btn-block" href="#" role="button">Check Availability</a>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
                </div>

                <div class="col-md-4 mb-4">
                    <!-- cards -->
                    <div class="card border border-primary">
                        <!--card image -->
                        <div class="view overlay">
                            <img src="assets/img/intercontinental.jpg" alt="Card image cap" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- card content -->
                        <div class="card-body">
                            <h4 class="card-title">InterContinental Dhaka</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fas fa-map-marker-alt"></i> Dhaka
                                </div>
                                <div class="col-sm-6">
                                    <i class="fas fa-star"></i> 5-star hotel
                                </div>
                            </div>
                            <div class="card-text pt-2 pb-2">
                                The InterContinental Dhaka is a prominent luxury hotel in Ramna in central Dhaka,the capital of Bangladesh.
                            </div>
                            <!-- footer button -->
                            <div class="row text-center">
                                <a class="btn btn-outline-primary btn-lg btn-block" href="#" role="button">Check Availability</a>
                            </div>
                        </div>
                        <!-- cards end -->
                    </div>
                    <!-- col end -->
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