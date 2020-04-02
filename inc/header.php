<?php
ob_start();
session_start();
include "admin/include/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- *** fav icon *** -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-96x96.png">
    <!-- ***  font awesome kit ***-->
    <script src="https://kit.fontawesome.com/a2e320ebe3.js" crossorigin="anonymous"></script>
    <!-- ***  external css files *** -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- *** theme style files *** -->
    <link rel="stylesheet" href="css/style.css">
    <!-- website title -->
    <title><?php echo $title; ?></title>
</head>

<body>

    <div class="top-area bg-img bg-overlay" style="background-image: url('img/y1.jpg');"></div>
    <div class="p-3"></div>