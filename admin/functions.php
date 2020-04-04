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
        // get the category_id 
        $select_cat = mysqli_query($conn, "SELECT id FROM categories WHERE Category_Name = '$post_category' ");
        $row = mysqli_fetch_assoc($select_cat);
        $post_category_id = $row['id'];

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
        // $post_content = htmlentities($post_content);
        $post_tags = htmlentities($post_tags);
        $post_status = htmlentities($post_status);


        $date = date("l d F Y ");
        $post_views = 0;
        $post_comment_count = 0;

        //    image upload 
        $post_image = $_FILES['image'];
        $image_name = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_dir = $_FILES['image']['tmp_name'];
        $image_type = $_FILES['image']['type'];
        // check image type
        if ($image_type == "image/jpeg" || $image_type == "image/png" || $image_type == "image/jpg") {
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

// publish or draft post

function modifyStatus($id)
{
    global $conn;

    $post_status_query = mysqli_query($conn, "SELECT post_status FROM posts WHERE post_id = '$id'");
    if (mysqli_num_rows($post_status_query) > 0) {
        $result = mysqli_fetch_assoc($post_status_query);
        $status = $result['post_status'];
        if ($status == "draft") {
            $query = mysqli_query($conn, "UPDATE posts SET post_status = 'published' WHERE post_id = '$id'");
        } else {
            $query = mysqli_query($conn, "UPDATE posts SET post_status = 'draft' WHERE post_id = '$id'");
        }
        return true;
    } else {
        return false;
    }
}
// escape function
function escape($string)
{
    global $conn;

    return mysqli_real_escape_string($conn, trim($string));
}


// comment delete , approve , unapproved

// Approve comment from database

if (isset($_POST['approveBtn'])) {
    $comment_id = $_POST['approve'];

    // delete query
    $approve_data = "UPDATE comments SET  comment_status = 'Approve' WHERE comm_id = '$comment_id'";
    // query response
    $approve_response = mysqli_query($conn, $approve_data);

    if ($approve_response === true) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Comment Approve!
        </div>";
        header("Location: comment.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Comment Not Approved!
        </div>";
        header("Location: comment.php");
    }
}

// Approve comment from database

if (isset($_POST['unapprovedBtn'])) {
    $comment_id = $_POST['unapproved'];

    // delete query
    $approve_data = "UPDATE comments SET  comment_status = 'Unapproved' WHERE comm_id = '$comment_id'";
    // query response
    $approve_response = mysqli_query($conn, $approve_data);

    if ($approve_response === true) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Comment Unapproved!
        </div>";
        header("Location: comment.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Comment Not Unapproved!
        </div>";
        header("Location: comment.php");
    }
}



// Delete comment from database

if (isset($_POST['deleteBtn'])) {
    $comment_id = $_POST['delete_id'];

    // delete query
    $delete_data = "DELETE FROM comments WHERE comm_id='$comment_id'";
    // query response
    $delete_response = mysqli_query($conn, $delete_data);

    if ($delete_response === true) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Delete Successfully!
        </div>";
        header("Location: comment.php");
    } else {
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Not Deleted!
        </div>";
        header("Location: comment.php");
    }
}
