<?php
include "include/header.php";

$error = [];

if (isset($_POST['loginBtn'])) {

    $username = $_POST['login_username'];
    $pwd = $_POST['login_password'];


    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $row = mysqli_fetch_assoc($sql);

    $db_user = $row['username'];
    $db_pwd = $row['password'];
    $profile_pic = $row['profile_pic'];

    $rehashpwd = md5($pwd);

    if ($username == $db_user  && $db_pwd == $rehashpwd) {
        $_SESSION['username'] = $username;
        $_SESSION['profile_pic'] = $profile_pic;
        header("Location: index.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <strong><i class='fas fa-exclamation-circle'></i></strong> Post Not Updated!
                    </div>";
        header("Location: login.php");
    }
}
