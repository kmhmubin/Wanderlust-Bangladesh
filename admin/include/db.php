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
    echo "Database Connected";
} else {
    die("Couldn't Connect to the database" . mysqli_error($db));
    header("Location: db.php");
}
