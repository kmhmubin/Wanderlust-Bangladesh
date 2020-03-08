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
    <title>Profile Info</title>
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
                        <a href="video.php" class="nav-link">Video</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="avatar image" class="rounded-circle z-depth-0">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                            <a href="uprofile.php" class="dropdown-item"><i class="fas fa-user-circle"></i> Profile</a>
                            <a href="signin.php" class="dropdown-item"><i class="fas fa-user-times"></i> Logout</a>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-light text-info border border-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-user-edit"></i> Edit Profile</h1>
                </div>
            </div>
        </div>
    </header>


    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block">
                        <i class="fas fa-lock"></i> Change Password
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger btn-block">
                        <i class="fas fa-trash"></i> Delete Account
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROFILE -->
    <section id="profile">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" value="" placeholder="Your User Name">
                                </div>
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" value="" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="lname">User Name</label>
                                    <input type="text" class="form-control" value="" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="location" class="form-control" value="" placeholder="Your Location">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="gender" class="form-control" value="" placeholder="Your Gender">
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="dob" class="form-control" value="" placeholder="Your Date of Birth">
                                </div>
                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea class="form-control" name="editor1"> </textarea>
                                </div>
                            </form>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-info btn-lg ">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Your Avatar</h3>
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="" class="d-block img-fluid mb-3">

                    <form class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your pic">
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-danger btn-block">Delete Image</button>
                </div>
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