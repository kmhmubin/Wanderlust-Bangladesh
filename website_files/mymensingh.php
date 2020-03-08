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

    <title>Mymensingh</title>
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
            <h1>Mymensingh</h1>
            <h6>City in Bangladesh</h6>
            <p pt-1>
                Mymensingh is the capital of Mymensingh Division of Bangladesh. The city is located on the Brahmaputra River, about 120 km north of Dhaka the capital of the country. Border area cover Himalayan state of India, Gazipur District, Tangail District, Jamalpur District, Netrokona District, Kishoreganj District. Mymensingh is the 8th administrative divisional headquarter and 12th City corporation of Bangladesh. According to Ministry of Public Administration, Mymensingh is ranked 4th in district status. It is a major financial center of North Central Bangladesh and the fifth largest city in Bangladesh. The density of Mymensingh city is 44,458/km² which is the second most densely populated city in Bangladesh. Mymensingh attracts 25 percent of health tourists visiting Bangladesh. Mymensingh is the anglicised pronunciation of the original name Momenshahi, referring to a Muslim ruler called Shah Momin. Its elevation is over 19 m above sea level, the highest of Bangladesh's major cities. Mymensingh related with old Brahmaputra river, handcrafted duvet called Nakshikantha and a rural ballad called Maimansingha Gitika
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
        <div class="container p-2">
            <h1 class="text-center">When to visit</h1>
            <div class="underline"></div>
            <p>Peak travel season in subtropical Dhaka is Feb-may-May when temperatures are warm. At Pohela Boishak (Apr), locals celebrate the Bengali New Year with parades.</p>
            <table class="table">
                <thead>
                    <th scope="col">Month</th>
                    <th scope="col">Popularity</th>
                    <th scope="col">High/Low</th>
                    <th scope="col">Precip</th>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> February</th>
                        <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></td>
                        <td>29&#176; / 18&#176; </td>
                        <td> 4 %</td>
                    </tr>
                    <tr>
                        <th scope="row"> March </th>
                        <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></td>
                        <td> 32&#176; / 22&#176; </td>
                        <td> 8 %</td>
                    </tr>
                    <tr>
                        <th scope="row"> April</th>
                        <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></td>
                        <td> 33&#176; / 25&#176; </td>
                        <td> 18 %</td>
                    </tr>
                    <tr>
                        <th scope="row"> May </th>
                        <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></td>
                        <td>33&#176; / 26&#176; </td>
                        <td> 36 %</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <div class="container">
            <h1 class="text-center">Map</h1>
            <div class="underline"></div>
        </div>
    </section>

    <section>
        <div class="container">
            <h1 class="text-center">Plan a trip</h1>
            <div class="underline"></div>
            <p> Plan your trip with help of our best article. </p>

            <div class="container my-5 py-5 z-depth-1">


                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-4 mb-md-0">

                            <h3 class="font-weight-bold">If you only have a day</h3>

                            <p class="text-muted">A busy day spent exploring must-see attractions, including Jatiya Sangsad. Spend your time more wisely and explore more efficiently.</p>

                            <h5 class="blue-text pb-2 pt-1"><i class="fas fa-map-marker-alt"></i> 7 Places </h5>

                            <a class="btn btn-purple btn-md ml-0" href="#" role="button">Start now <i class="fas fa-plane"></i></a>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-4 mb-md-0">

                            <!--Image-->
                            <div class="view overlay z-depth-1-half">
                                <img src="assets/img/Ahsan-Manzil.jpg" class="img-fluid" alt="">
                                <a href="#">
                                    <div class="mask rgba-white-light"></div>
                                </a>
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->


                </section>
                <!--Section: Content-->


            </div>


        </div>
    </section>

    <?php require_once 'footer.php'; ?>
    <script src="assets/js/app.js"></script>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/mdb.min.js"></script>
</body>

</html>