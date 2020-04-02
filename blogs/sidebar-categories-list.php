  <!-- Categories List sidebar start -->
  <div class="sidebar-box">
      <h3 class="heading">Categories</h3>
      <ul class="categories">

          <?php
            $category_grab = "SELECT * FROM categories";
            $cat_response = mysqli_query($conn, $category_grab);
            while ($row = mysqli_fetch_assoc($cat_response)) {
                $cat_id = $row['id'];
                $cat_title = $row['Category_Name'];
                $sql = mysqli_query($conn, "SELECT * FROM posts WHERE post_category_id = $cat_id");
                $span = mysqli_num_rows($sql);
                echo " <li><a href=''> $cat_title <span>($span) </span></a></li>";
            }

            ?>
      </ul>
  </div>
  <!-- Categories List sidebar end -->