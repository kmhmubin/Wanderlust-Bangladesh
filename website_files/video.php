<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="icon" href="assets/img/favicon-96x96.png" type="image/png" />
    <script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>
    <script src="https://kit.fontawesome.com/a2e320ebe3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/video.css">
    <title>Video</title>
</head>

<body>
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
                        <a href="video.php" class="nav-link active">Video</a>
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
    <section class="vid-intro py-5 text-dark">
        <div class="container">
            <header>
                <h1 id="tv">Travel Videos</h1>
                <P id="tvp">love travel videos, they are inspiring, beautiful and always put you in a good mood. Travel videos have the effect of igniting the wanderlust inside all of us, inspiring us, and encouraging us to start doing something new with our lives.</P>
            </header>
        </div>
    </section>
    <section id="video-gallery">
        <div class="container">
            <h1 class="text-center">Beauty of Bangladesh</h1>
            <div class="underline"></div>
            <!-- gallery box -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rDYdeq3JW_E" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Spread the word!</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb sharer button" href="#" id="share-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw sharer button" href="#" id="share-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins sharer button" href="#" id="share-li"><i class="fab fa-linkedin-in"></i></a>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!--Modal: Name-->
                    <a><img class="img-fluid z-depth-1" src="assets/img/y1.jpg" alt="video" data-toggle="modal" data-target="#modal1"></a>
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W7Dxp6cCyac" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Spread the word!</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb sharer button" href="#" id="share-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw sharer button" href="#" id="share-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins sharer button" href="#" id="share-li"><i class="fab fa-linkedin-in"></i></a>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <a><img class="img-fluid z-depth-1" src="assets/img/y2.jpg" alt="video" data-toggle="modal" data-target="#modal6"></a>
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZJVoKponxII" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Spread the word!</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb sharer button" href="#" id="share-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw sharer button" href="#" id="share-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins sharer button" href="#" id="share-li"><i class="fab fa-linkedin-in"></i></a>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a><img class="img-fluid z-depth-1" src="assets/img/y3.jpg" alt="video" data-toggle="modal" data-target="#modal4"></a>
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QNUSIOMb6vI" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Spread the word!</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb sharer button" href="#" id="share-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw sharer button" href="#" id="share-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins sharer button" href="#" id="share-li"><i class="fab fa-linkedin-in"></i></a>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!--Modal: Name-->
                    <a><img class="img-fluid z-depth-1" src="assets/img/y4.jpg" alt="video" data-toggle="modal" data-target="#modal1"></a>
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jG8PY8-qCII" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Spread the word!</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb sharer button" href="#" id="share-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw sharer button" href="#" id="share-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins sharer button" href="#" id="share-li"><i class="fab fa-linkedin-in"></i></a>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <a><img class="img-fluid z-depth-1" src="assets/img/y5.jpg" alt="video" data-toggle="modal" data-target="#modal6"></a>
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_e_hEWZP8mU" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Spread the word!</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb sharer button" href="#" id="share-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw sharer button" href="#" id="share-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins sharer button" href="#" id="share-li"><i class="fab fa-linkedin-in"></i></a>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a><img class="img-fluid z-depth-1" src="assets/img/y6.jpg" alt="video" data-toggle="modal" data-target="#modal4"></a>
                </div>

                <!-- end of row -->
            </div>
        </div>
    </section>



    <?php require_once 'footer.php'; ?>

    <!-- js -->
    <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>