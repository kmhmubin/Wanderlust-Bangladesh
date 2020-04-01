<?php
include "include/header.php";


global $conn;

// insert data function

if (isset($_POST['categoryBtn'])) {
    // assign variable

    $cat_name = $_POST['cat_name'];
    $cat_description = $_POST['cat_description'];

    // secure data form sql injection
    $cat_name = mysqli_real_escape_string($conn, $cat_name);
    $cat_description = mysqli_real_escape_string($conn, $cat_description);

    // securing data from cross script 
    $cat_name = htmlentities($cat_name);
    $cat_description = htmlentities($cat_description);

    // insert_categories in categories table
    $insert_categories = "INSERT INTO categories(Category_Name,Category_Description) VALUES('$cat_name','$cat_description')";

    // query response

    $cat_response = mysqli_query($conn, $insert_categories);

    if ($cat_response) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Category Added Successfully!
            </div>";
        header("Location: categories.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Category Not Added! Please write something!
            </div>";
        header("Location: categories.php");
    }
}
