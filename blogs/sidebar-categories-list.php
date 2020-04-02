  <!-- Categories List sidebar start -->
  <div class="sidebar-box">
      <h3 class="heading">Categories</h3>
      <ul class="categories">

          <?php
            $category_grab = "SELECT * FROM categories";
            $cat_response = mysqli_query($conn, $category_grab);
            $span = 4;
            while ($row = mysqli_fetch_assoc($cat_response)) {
                $cat_title = $row['Category_Name'];
                echo " <li><a href=''> $cat_title <span>($span) </span></a></li>";
            }

            ?>
      </ul>
  </div>
  <!-- Categories List sidebar end -->