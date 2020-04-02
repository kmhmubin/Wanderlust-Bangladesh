<!-- Post tags list sidebar -->
<div class="sidebar-box">
    <h3 class="heading">Tags</h3>
    <ul class="tags">
        <?php
        $show_tags = "SELECT * FROM posts ORDER BY post_id DESC";
        // query response
        $result = mysqli_query($conn, $show_tags);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <li><a href=""><?php echo $row['post_tags']; ?></a></li>
        <?php

            }
        }
        ?>
    </ul>
</div>
<!-- Post tags list sidebar end-->