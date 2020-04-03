 <?php

    $comment = "SELECT * FROM comments WHERE comment_post_id = '$post_id' AND  comment_status = 'Approve' ORDER BY comm_id DESC ";

    $comment_response = mysqli_query($conn, $comment);
    ?>



 <!-- comments  -->
 <ul class="comment-list">
     <?php
        if (mysqli_num_rows($comment_response) > 0) {
            while ($row = mysqli_fetch_assoc($comment_response)) {

        ?>
             <li class="comment">
                 <div class="vcard">
                     <!-- <img src="" alt="Image placeholder"> -->
                 </div>
                 <div class="comment-body">
                     <h3><?php echo $row['comment_name']; ?></h3>
                     <p><?php echo $row['comment_body']; ?></p>
                     <p><?php echo $row['comment_date']; ?></p>
                 </div>
             </li>
     <?php
            }
        }
        ?>

 </ul>

 <!-- comments end -->