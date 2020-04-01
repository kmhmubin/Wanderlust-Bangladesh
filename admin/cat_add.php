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


// update existing data from table

if (isset($_POST['updateBtn'])) {
    // assign variable 
    $id = $_POST['edit_id'];
    $catName = $_POST['edit_name'];
    $catDescription = $_POST['edit_description'];

    // securing data from sql injection
    $catName = mysqli_real_escape_string($conn, $catName);
    $catDescription = mysqli_real_escape_string($conn, $catDescription);

    // securing data from cross site script 
    $fname = htmlentities($catName);
    $lname = htmlentities($catDescription);

    // update query 
    $update_data = "UPDATE categories SET Category_Name = '$catName', Category_Description = '$catDescription' WHERE id = '$id' ";

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
        header("Location: categories.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Not Updated!
            </div>";
        header("Location: categories.php");
    }
}

// delete categories from table


if (isset($_POST['deleteBtn'])) {
    $id = $_POST['delete_id'];

    // delete query
    $delete_data = "DELETE FROM categories WHERE id='$id'";
    // query response
    $delete_response = mysqli_query($conn, $delete_data);

    if ($delete_response === true) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Delete Successfully!
            </div>";
        header("Location: categories.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Not Deleted!
            </div>";
        header("Location: categories.php");
    }
}
