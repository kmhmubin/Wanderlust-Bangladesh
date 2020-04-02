<?php
// assign variable for db
$db_host = "localhost";
$db_user = "root";
$db_pass = "wanderlustbd74";
$db_name = "wanderlustbd";
// connecting to database 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// checking database connection
if (!$conn) {
    die("Couldn't Connect to the database" . mysqli_error($conn));
}
