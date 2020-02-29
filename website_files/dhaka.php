<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="icon" href="assets/img/favicon-96x96.png" type="image/png" />
    <script src="https://kit.fontawesome.com/a2e320ebe3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/dhaka.css">

    <title>Dhaka</title>
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
                        <a href="signup.php" class="nav-link btn btn-outline-info">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="dk_header">
        <div class="container">
            <h1>Dhaka</h1>
            <h6>Capital of Bangladesh</h6>
            <p pt-1>
                Dhaka is the capital city of Bangladesh, in southern Asia. Set beside the Buriganga River, it’s at the center of national government, trade and culture. The 17th-century old city was the Mughal capital of Bengal, and many palaces and mosques remain. American architect Louis Khan’s National Parliament House complex typifies the huge, fast-growing modern metropolis.<br /><br />
                In Dhaka’s old city, grand, 17th-century Lalbagh Fort contains a museum of paintings, weapons and decorative arts. The Dhakeshwari Temple is the focus of the city’s Hindu community. The National Museum traces Bangladesh’s natural, religious and political history. Graphic displays at the Liberation War Museum reveal the horrors of the 1971 War of Independence. The elaborate 19th-century Ahsan Manzil, or Pink Palace, stands beside the river. Wooden boats offer trips on the water from the busy Sadarghat boat terminal, the heart of traditional riverside life. Colorful painted rickshaws are the city’s main mode of transport.
            </p>
        </div>
    </header>
    <section class="destination">
        <div class="container pb-2">
            <h1 class="text-center">Places to visit</h1>
            <div class="underline"></div>

            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/des1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Lalbagh Fort Museum</h4>
                                    <p class="card-text">17th-century fort with art & antiques.</p>
                                    <a class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/Ahsan-Manzil.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Ahsan Manzil Museum</h4>
                                    <p class="card-text">Landmark place of the Dhaka Nawabs.</p>
                                    <a class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/jatiya_sangsad.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Jatiya Sangsad Bhaban</h4>
                                    <p class="card-text">Parliament building with modern design. </p>
                                    <a class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/star_mosque.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Star Mosque</h4>
                                    <p class="card-text">Muslim Culture Architecture</p>
                                    <a class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/sonargaon.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Sonargaon</h4>
                                    <p class="card-text">Museums,folk art, history and folk music</p>
                                    <a class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->

        </div>

    </section>
    <section>
        <div class="container p-2 bg-warning">
        </div>
    </section>

    <script src="assets/js/app.js"></script>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/mdb.min.js"></script>
</body>

</html>