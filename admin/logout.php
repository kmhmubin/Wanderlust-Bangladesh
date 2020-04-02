<?php
include "include/header.php";

// logout function and session destroy

if (isset($_POST['logoutBtn'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: login.php");
}
