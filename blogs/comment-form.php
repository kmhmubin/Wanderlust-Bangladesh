 <!-- comment form -->
 <?php
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
        if (isset($_POST['comment'])) {

            $comment_name = $_POST['c_name'];
            $comment_email = $_POST['c_email'];
            $comment_body = $_POST['c_body'];
            // securing from sql injection
            $comment_name = mysqli_real_escape_string($conn, $comment_name);
            $comment_email = mysqli_real_escape_string($conn, $comment_email);
            $comment_body = mysqli_real_escape_string($conn, $comment_body);
            $id = mysqli_real_escape_string($conn, $id);
            // securing from cross script 
            $comment_name = htmlentities($comment_name);
            $comment_email = htmlentities($comment_email);
            $comment_body = htmlentities($comment_body);
            $id = htmlentities($id);
            // insert comment into data table
            $comment_sql = "INSERT INTO comments(comment_name,comment_email,comment_body,comment_status,post_id,comment_date) VALUES ('$comment_name','$comment_email','$comment_body','Unapproved','$post_id',now())";
            // database response
            $comment_response = mysqli_query($conn, $comment_sql);
            if ($comment_response) {
                $_SESSION['success'] = "<div class='alert alert-success' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-check-circle'></i></strong> Comment Added Successfully!
            </div>";
            } else {
                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Comment Not Added!
            </div>";
            }
        }
    }


    ?>
 <div class="comment-form-wrap pt-5">
     <h3 class="mb-5">Leave a comment</h3>
     <!-- show the alert message -->
     <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }

        if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }

        ?>
     <hr>

     <form action="article.php?post=<?php echo $post_id; ?>" class="p-5 bg-light" method="POST">
         <div class="form-group">
             <label for="name">Name *</label>
             <input type="text" class="form-control" id="name" name="c_name">
         </div>
         <div class="form-group">
             <label for="email">Email *</label>
             <input type="email" class="form-control" id="email" name="c_email">
         </div>
         <div class="form-group">
             <label for="message">Message</label>
             <textarea name="c_body" id="message" cols="30" rows="10" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <input type="submit" value="Post Comment" class="btn btn-primary" name="comment">
         </div>

     </form>
 </div>
 <!-- comment form end -->