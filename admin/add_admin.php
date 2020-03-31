<?php
include "include/header.php";

if (isset($_POST['registerBtn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    // securing data from sql injection
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // securing data from cross site script 
    $fname = htmlentities($fname);
    $lname = htmlentities($lname);
    $username = htmlentities($username);
    $email = htmlentities($email);
    $password = htmlentities($password);

    // checking confirm password
    if ($password === $repeatPassword) {

        // encrypt the password
        $password = password_hash($password, PASSWORD_BCRYPT);
        // insert query in database
        $insert_query = "INSERT INTO users(First_Name,Last_Name,User_Name,email,Password) VALUES ('$fname','$lname','$username','$email','$password')";

        // query response
        $query_response = mysqli_query($conn, $insert_query);

        if ($query_response) {
            $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Admin Added Successfully!
            </div>";
            header("Location: admin_user.php");
        } else {
            $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Admin Not Added!
            </div>";
            header("Location: admin_user.php");
        }
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Confirm Password Not Match!
            </div>";
        header("Location: admin_user.php");
    }
}

// update data from table

if (isset($_POST['updateBtn'])) {
    // assign variable 
    $id = $_POST['edit_id'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    // securing data from sql injection
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // securing data from cross site script 
    $fname = htmlentities($fname);
    $lname = htmlentities($lname);
    $username = htmlentities($username);
    $email = htmlentities($email);
    $password = htmlentities($password);

    $password = password_hash($password, PASSWORD_BCRYPT);
    // update query 
    $update_data = "UPDATE users SET First_Name = '$fname', Last_Name = '$lname', User_Name = '$username', email = '$email', Password = '$password' WHERE id = '$id' ";

    // query response
    $update_response = mysqli_query($conn, $update_data);

    // check condition for data
    if ($update_response) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Update Successfully!
            </div>";
        header("Location: admin_user.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Not Updated!
            </div>";
        header("Location: admin_user.php");
    }
}


// Delete data from database

if (isset($_POST['deleteBtn'])) {
    $id = $_POST['delete_id'];

    // delete query
    $delete_data = "DELETE FROM users WHERE id='$id'";
    // query response
    $delete_response = mysqli_query($conn, $delete_data);

    if ($delete_response === true) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Delete Successfully!
            </div>";
        header("Location: admin_user.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Not Deleted!
            </div>";
        header("Location: admin_user.php");
    }
}
