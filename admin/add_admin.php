<?php
include "include/header.php";
include "include/flash_message.php";


if (isset($_POST['registerBtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    // securing data from sql injection
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // securing data from cross site script 
    $username = htmlentities($username);
    $email = htmlentities($email);
    $password = htmlentities($password);

    // checking confirm password
    if ($password === $repeatPassword) {

        // encrypt the password
        $password = password_hash($password, PASSWORD_BCRYPT);
        // insert query in database
        $insert_query = "INSERT INTO admin_user(username,email,password) VALUES ('$username','$email','$password')";

        // query response
        $query_response = mysqli_query($conn, $insert_query);

        if ($query_response) {
            hello("message", "Admin Added");
            header("Location: admin_user.php");
        } else {
            hello("message", "Admin Not Added");
            header("Location: admin_user.php");
        }
    } else {
        hello("msg", "Password Not Match");
        header("Location: admin_user.php");
    }
}
