   <!-- Cities List sidebar start -->
   <div class="sidebar-box">
       <h3 class="heading">Cities</h3>
       <ul class="categories">
           <?php
            $city_grab = "SELECT * FROM cities";
            $cat_response = mysqli_query($conn, $city_grab);
            while ($row = mysqli_fetch_assoc($cat_response)) {
                $cat_id = $row['city_id'];
                $cat_title = $row['city_name'];
                $sql = mysqli_query($conn, "SELECT * FROM destinations WHERE dest_city_id = $cat_id");
                $span = mysqli_num_rows($sql);
                echo " <li><a href=''> $cat_title</a></li>";
            }

            ?>

       </ul>
   </div>
   <!-- Cities List sidebar end -->