<?php

if(isset($_POST['register'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    // check condition
    if (empty($userName)) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Username Required!
            </div>";
        header("Location: signup.php");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Email is  Invalid!
            </div>";
        header("Location: signup.php");
    } elseif (empty($email)) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Email is  Required!
            </div>";
        header("Location: signup.php");
    } elseif (strlen($password) <= 4) {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Password too short!
            </div>";
        header("Location: signup.php");
    } else {
        if (empty($error)) {
            $random = rand(1, 3);

            switch ($random) {
                case "1":
                    $profile_pic = "img/user/pp1.png";
                    break;
                case "2":
                    $profile_pic = "img/user/pp2.png";
                    break;
                case "3":
                    $profile_pic = "img/user/pp3.png";
                    break;
            }
            $hashedPwd = md5($password);
            $sql = mysqli_query($conn, "INSERT INTO users(id, username,email,password,profile_pic,is_active,post_id,role,join_date) VALUES('','$userName','$email','$hashedPwd','$profile_pic','yes','0','Client',now())");
            if ($sql) {
                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Admin Added Successfully!
            </div>";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Admin Not Added!
            </div>";
                header("Location: index.php");
            }
        }
    }
}
