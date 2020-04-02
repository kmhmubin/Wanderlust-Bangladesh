<?php
include "include/header.php";


//  add post function

function add_post()
{
    global $conn;

    if (isset($_POST['publish'])) {
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_category = $_POST['category'];
        $post_category_id = $_POST['category_id'];
        $post_content = $_POST['content'];
        $post_tags = $_POST['tags'];
        $post_status = $_POST['status'];

        // securing data from sql injection
        $post_title = mysqli_real_escape_string($conn, $post_title);
        $post_author = mysqli_real_escape_string($conn, $post_author);
        $post_category = mysqli_real_escape_string($conn, $post_category);
        $post_category_id = mysqli_real_escape_string($conn, $post_category_id);
        $post_content = mysqli_real_escape_string($conn, $post_content);
        $post_tags = mysqli_real_escape_string($conn, $post_tags);
        $post_status = mysqli_real_escape_string($conn, $post_status);

        // securing data from cross script
        $post_title = htmlentities($post_title);
        $post_author = htmlentities($post_author);
        $post_category = htmlentities($post_category);
        $post_category_id = htmlentities($post_category_id);
        $post_content = htmlentities($post_content);
        $post_tags = htmlentities($post_tags);
        $post_status = htmlentities($post_status);


        $date = date("l d F Y ");
        $post_views = 0;
        $post_comment_count = 0;

        //    image uploade
        $post_image = $_FILES['post_image'];
        $image_name = $_FILES['post_image']['name'];
        $image_size = $_FILES['post_image']['size'];
        $tmp_dir = $_FILES['post_image']['tmp_name'];
        $image_type = $_FILES['post_image']['type'];
        // check image type
        if ($image_type == "post_image/jpeg" || $image_type == "post_image/png" || $image_type == "post_image/jpg") {
            // check image size not bigger than 5mb
            if ($image_size <= 5242880) {
                // move image from temp dir to database
                move_uploaded_file($tmp_dir, "../img/posts/" . $image_name);


                // insert data into table
                $insert_post = "INSERT INTO posts(post_title,post_category,post_category_id,post_author,post_content,post_date,post_image,post_comment_count,post_views,post_tags,post_status) VALUES('$post_title','$post_category','$post_category_id','$post_author','$post_content','$date','$image_name','$post_comment_count','$post_views','$post_tags','$post_status') ";
                // response query
                $post_response = mysqli_query($conn, $insert_post);
                // check response
                if ($post_response) {
                    $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Post Added Successfully!
            </div>";
                    header("Location: post_list.php");
                } else {
                    $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Post Not Added!
            </div>";
                    header("Location: post_list.php");
                }
            } else {
                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Image size too big! Less than 5MB!
            </div>";
                header("Location: add_post.php");
            }
        } else {
            $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Wrong Image Format!
            </div>";
            header("Location: add_post.php");
        }
    }
}

add_post();
