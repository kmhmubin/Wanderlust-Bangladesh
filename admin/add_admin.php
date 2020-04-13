<?php
include "include/header.php";

$error = [];
if (isset($_POST['registerBtn'])) {
    $username = clean($_POST['username']);
    $email = clean($_POST['email']);
    $pwd = $_POST['password'];

    // check condition
    if (empty($username)) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Username Required!
            </div>";
        header("Location: admin_user.php");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Email is  Invalid!
            </div>";
        header("Location: admin_user.php");
    } elseif (empty($email)) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Email is  Required!
            </div>";
        header("Location: admin_user.php");
    } elseif (strlen($pwd) <= 4) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Password too short!
            </div>";
        header("Location: admin_user.php");
    } else {
        if (empty($error)) {
            $random = rand(1, 3);

            switch ($random) {
                case "1":
                    $profile_pic = "../img/user/pp1.png";
                    break;
                case "2":
                    $profile_pic = "../img/user/pp2.png";
                    break;
                case "3":
                    $profile_pic = "../img/user/pp3.png";
                    break;
            }
            $hashedPwd = md5($pwd);
            $sql = mysqli_query($conn, "INSERT INTO users(id, username,email,password,profile_pic,is_active,post_id,role,join_date) VALUES('','$username','$email','$hashedPwd','$profile_pic','yes','0','Admin',now())");
            if ($sql) {
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
            <strong><i class='fas fa-check-circle'></i></strong> Admin Not Added!
            </div>";
                header("Location: admin_user.php");
            }
        }
    }
}

function clean($data)
{
    // securing data from all harm
    global $conn;
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}



// update data from table

if (isset($_POST['updateBtn'])) {
    // assign variable 
    $id = $_POST['edit_id'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
   

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
  


    // update query 
    $update_data = "UPDATE users SET first_name = '$fname', last_name = '$lname', username = '$username', email = '$email',  WHERE id = '$id' ";

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