  <!-- **** search form area **** -->

  <div class="wb-search-form d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="search-close-btn" id="closeBtn">
                      <i class="far fa-times-circle" aria-hidden="true"></i></i>
                  </div>
                  <!-- search form  -->
                  <form action="search.php" method="GET">
                      <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations">
                      <input type="submit" class="d-none" value="submit">
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!-- *** search form area end  *** -->

  <!--**** header area start **** -->
  <header class="header_area" id="header">
      <div class="container-fluid h-100">
          <div class="row h-100">
              <div class="col-12 h-100">
                  <nav class="h-100 navbar navbar-expand-lg">
                      <a href="index.php" class="navbar-brand"><img src="img/Wanderlust Bangladesh.png" alt="logo"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wbnav" aria-controls="wbnav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

                      <!-- nav menu -->

                      <div class="collapse navbar-collapse" id="wbnav">
                          <ul class="navbar-nav mr-auto" id="wbnav">
                              <li class="nav-item active">
                                  <a href="index.php" class=" nav-link">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                  <a href="destination.php" class="nav-link">Destinations</a>
                              </li>
                              <li class="nav-item">
                                  <a href="hotels.php" class="nav-link">Booking</a>
                              </li>
                              <li class="nav-item">
                                  <a href="blogs.php" class="nav-link">Blog</a>
                              </li>
                              <li class="nav-item">
                                  <a href="contact.php" class="nav-link">Contact</a>
                              </li>
                          </ul>

                          <!-- search button -->
                          <div class="wb-search-btn">
                              <a href="#" id="search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</a>
                          </div>

                          <!-- sign in  -->
                          <div class="wb-signin-btn">
                              <a href="login.php"> Sign in</a>
                          </div>
                          <div class="wb-signin-btn">
                              <a href="signup.php"> Sign up</a>
                          </div>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- *** header area end *** -->