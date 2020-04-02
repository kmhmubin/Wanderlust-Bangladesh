<?php
// assign variable for db
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "wbd";
// connecting to database 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$db = mysqli_select_db($conn, $db_name);

// check connection

if ($db) {
  // echo "Database Connected";
} else {
  // die("Couldn't Connect to the database" . mysqli_error($db));
  // header("Location: db.php");
  echo "
     <div class='container-fluid'>

          <!-- 404 Error Text -->
          <div class='text-center'>
            <div class='error mx-auto' data-text='404'>404</div>
            <p class='lead text-gray-800 mb-5'>Page Not Found</p>
            <p class='text-gray-500 mb-0'>It looks like you found a glitch in the matrix...</p>
            <a href='login.php'>&larr; Back to Dashboard</a>
          </div>

        </div>
    ";
}
