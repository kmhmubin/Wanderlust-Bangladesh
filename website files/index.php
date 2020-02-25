<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fav icon -->
    <link rel="icon" href="assets/img/favicon-96x96.png" type="image/png" />
    <script src="https://kit.fontawesome.com/a2e320ebe3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Wanderlust Bangladesh</title>

</head>

<body>
    <!-- nav bar -->
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
    <!-- HOME SECTION -->
    <header id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container">
                <div class="row">
                    <div class="col-lg-8 d-none d-lg-block" id="banner-left">
                        <h1 class="display-2" id="bd"><strong>Bangladesh</strong>
                        </h1>
                        <div class="d-flex">
                            <div class="p-4 align-self-center" id="tagline">
                                is monsoon mists over the delta <br> with green hills and secrets.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card text-center card-form" id="qikcrd">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active" id="flight-tab" data-toggle="tab" role="tab" aria-controls="flight" aria-selected="true">Flight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" id="hotel-tab" data-toggle="tab" role="tab" aria-controls="hotel" aria-selected="false">Hotel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <!-- flight tab part -->
                                <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                    <form class="form-wrap">
                                        <input type="text" class="form-control " name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                                        <input type="text" class="form-control " name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                        <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                        <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                        <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                        <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">
                                        <a href="#" class="btn btn-outline-warning text-uppercase">Search flights</a>
                                    </form>
                                </div>
                                <!-- hotel tab-->
                                <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                    <form class="form-wrap">
                                        <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                                        <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                        <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                        <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                        <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                        <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">
                                        <a href="#" class="btn btn-outline-warning text-uppercase">Search Hotels</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- intro section -->
    <section class="intro">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="col-lg-10 col-md-10 intro-text">
                    <h2>
                        Welcome to Bangladesh
                    </h2>
                    <p>Bangladesh is south Asia's greenest jewel – a country braided with rivers, with a rich
                        culture waiting to
                        be explored by pioneering travellers.</p>
                </div>
                <div class="col-lg-10 col-md-10 text-center">
                    <button type="button" class="btn btn-outline-info" value="Show DIV" id="bt" onclick="toggle(this)">
                        Read More
                    </button>
                </div>
            </div>
            <!-- Hidden text section -->
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="col-lg-10 col-md-10" id="hidden-text">
                    <h4>A Land of Rivers</h4>
                    <p> Welcome to river country. Bangladesh is braided together by more than 700 rivers, producing a
                        deliciously
                        lush landscape with more shades of green than you ever imagined. Travelling by boat is a way of life
                        here,
                        and provides a fabulous opportunity to see the country from a more unusual angle. This is one of the
                        world’s
                        most densely populated countries, but once you’re slowly floating downriver on a small wooden rowboat,
                        it’s
                        easy to imagine you have it all to yourself. Whether you're travelling to hectic Dhaka or to the
                        Sundarbans'
                        mangrove forests, boats large and small will help you explore Bangladesh's riches.</p>

                    <h4>Hidden Riches</h4>

                    <p>The mangrove forests and tigers of the Sundarbans National Park are Bangladesh's most famous attraction,
                        but the
                        country has a host of lesser-known attractions that are waiting to be discovered. Highlights include the
                        Buddhist remains at Paharpur and the 15th-century mosques and mausoleums of Bagerhat, both of which are
                        Unesco
                        World Heritage Sites. While modern Bangladesh is majority Muslim, its hill tracts are still home to
                        Buddhist and
                        Christian Adivasi tribal peoples, while temples in Dhaka and beyond attest to the influence of Hindu
                        culture on
                        the country.</p>

                    <h4>Warm & Welcoming</h4>
                    <p>Getting off the beaten track is something of a travel cliché these days, but Bangladesh is somewhere
                        that
                        tourism remains in its infancy. It's easy to get the sensation that you're breaking ground here, even if
                        your
                        pioneering spirit is frequently attended to by being the centre of attention. Bangla culture is famously
                        welcoming – rarely will you have cause to suspect the ulterior motives that can sometimes bedevil travel
                        in
                        other parts of south Asia. If you enjoy making friends, mixing with locals and travelling without
                        bumping
                        into
                        too many other tourists, then this is probably just the country to explore.</p>
                    <h4>Slow Down</h4>
                    <p>Be prepared to embrace Bangladesh in all its possibilities and quirks. This isn't a destination to be
                        rushed.
                        Poor infrastructure and an undeveloped tourist industry means that you’ll be left frustrated if you’re
                        trying to
                        travel in too much of a hurry. So slow down; don’t try to pack too much into your itinerary. Bangladesh
                        isn’t a
                        tick-the-sights-off-the-list type of country. It’s a place to relax, meet people and discover new ideas
                        and ways
                        of life. Taking your time will allow the country to reveal the best of itself at its own pace, as sure
                        and
                        steady as the rivers that flow through its veins. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- intro video -->
    <section class="intro-video">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QNUSIOMb6vI" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- top experiences cards -->
    <section class="top-experience">
        <div class="container">
            <div class="card-title">
                <h1 class="display-3 text-center">Popular Destination</h1>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast day.</p>
            </div>
            <!-- Card deck -->
            <div class="card-deck">

                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="assets/img/des1.jpg" alt="Lalbagh Fort">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">

                        <!--Title-->
                        <h4 class="card-title ">Lalbagh Fort</h4>
                        <!--Text-->
                        <p class="card-text">Lalbagh Fort or Fort Aurangabad, an incomplete Mughal palace fortress at Dhaka on the river Buriganga in the southwestern part of the old city.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-outline-info btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="assets/img/des2.jpg" alt="Sundarbans">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">

                        <!--Title-->
                        <h4 class="card-title">Sundarbans</h4>
                        <!--Text-->
                        <p class="card-text">The Sundarbans is a mangrove area in the delta formed by the confluence of Ganges, Brahmaputra and Meghna Rivers in the Bay of Bengal.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-outline-info btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="assets/img/des3.jpg" alt="Jaflong">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">

                        <!--Title-->
                        <h4 class="card-title">Jaflong</h4>
                        <!--Text-->
                        <p class="card-text">Jaflong is a hill station and popular tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-outline-info btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->

            </div>
        </div>
        <!-- Card deck -->
    </section>

    <!-- Footer -->
    <section class="ftr">
        <footer class="page-footer font-small blue-grey lighten-5">

            <div style="background-color: #21d192;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">Get connected with us on social networks!</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
            </div>

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3 text-dark">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">Wanderlust Bangladesh</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they
                            would much rather look at a presentation and understand the message. It has come to a point.</p>

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Cities</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a class="text-info" href="#!">Dhaka</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Chittagong</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Sylhet</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Rajshahi</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Khulna</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Mymensingh</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Barisal</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Rangpur</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Knowledge Zone</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a class="text-info" href="#!">About Us</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">When to visit</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Foods & Drinks</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Culture</a>
                        </p>
                        <p>
                            <a class="text-info" href="#!">Geography</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home mr-3"></i> Uttara, Bangladesh</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center text-dark py-3">© 2020 Copyright:
                <a class="text-info" href="index.php"> Wanderlust-Bangladesh</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>

    <script src="assets/js/app.js"></script>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>