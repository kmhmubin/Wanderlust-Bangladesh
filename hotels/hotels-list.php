<?php
$show_blogs = "SELECT * FROM hotels WHERE hotel_status = 'published' ORDER BY hotel_id DESC";
// query response
$result = mysqli_query($conn, $show_blogs);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $hotel_id = $row['hotel_id'];
        $hotel_name = $row['hotel_name'];
        $hotel_city = $row['hotel_city'];
        $hotel_author = $row['author'];
        $hotel_image = $row['hotel_pic'];
        $hotel_content = $row['hotel_info'];
        $hotel_city_id = $row['hotel_city_id'];
        $hotel_status = $row['hotel_status'];
        $hotel_tags = $row['hotel_tags'];
        $hotel_date = $row['add_date'];
        $hotel_view = $row['hotel_views'];
        $hotel_type = $row['hotel_type'];
        $hotel_price = $row['hotel_price'];

?>

        <div class="row mb-5 mt-5">
            <div class="col-md-12">

                <!--         hotel  box       -->
                <div class="post-entry-horzontal">
                    <a href="article.php">
                        <div class="image element-animate" data-animate-effect="fadeIn">
                            <img src="img/hotel/<?php echo $hotel_image; ?>" alt="hotel_picture">
                        </div>
                        <span class="text">
                            <h2><?php echo $hotel_name; ?></h2>
                            <div class="hotel-meta">
                                <span class="mr-2"></span>&bullet;
                                <span class="mr-2"><?php echo $hotel_type; ?></span> &bullet;
                                <span class="mr-2">BDT <?php echo $hotel_price; ?> </span> &bullet;
                            </div>
                        </span>
                    </a>
                </div>


            </div>
        </div>

        <!-- style="background-image:url(https://i.ibb.co/stmXFvC/dawid-zawila-zb2v-Ba-HYB2-I-unsplash.jpg)" -->
<?php

    }
} else {
    // show error message as alert
    $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fas fa-exclamation-circle'></i></strong> Please Login !
            </div>";
    header("Location: login.php");
}
?>