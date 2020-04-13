 <?php

    $author = "SELECT FROM users Where";

    $result = mysqli_query($conn, $author);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['username'];
            $profile_pic =  $row['profile_pic'];
            $bio = $row['bio'];

    ?>

         <!-- sidebar author section start -->
         <div class="sidebar-box">
             <div class="bio text-center">
                 <img src="img/user/<?php echo $profile_pic; ?>" alt="author image" class="img-fluid">
                 <div class="bio-body">
                     <h2><?php echo $username; ?></h2>
                     <p><?php echo $bio; ?></p>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- sidebar author section start -->
 <?php

        }
    }

    ?>