<?php
include "include/header.php";


if (isset($_POST['loginBtn'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    // securing from sql injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // securing from cross site script attack
    $username = htmlentities($username);
    $password = htmlentities($password);

    // decrypt the password
    $sql = "SELECT Password FROM users WHERE User_Name = '$username'";
    // database response
    $response = mysqli_query($conn, $sql);
    // selecting the specific row from database
    $row = mysqli_fetch_assoc($response);
    // assign the row from the database
    $pass = $row['Password'];
    // checking the user input with database value
    if (password_verify($password, $pass)) {
        // session for username 
        $_SESSION['username'] = $username;
        // when true
        header("Location: index.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Username/ Password Not Match!
            </div>";
        header("Location: index.php");
    }
}
