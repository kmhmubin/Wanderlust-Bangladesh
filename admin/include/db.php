<?php
// assign variable for db
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "wbd";
// connecting to database 
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// checking database connection
if (!$connection) {
    die("Couldn't Connect to the database" . mysqli_error($connection));
}

