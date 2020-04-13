<!-- include header and navbar -->
<?php
$title = "WanderlustBD - Contact";
include "inc/header.php";
include "inc/navbar.php";
// include "inc/loader.php";
?>

<?php
//  securing data from sql injection and cross site scripts
function clean($data)
{
    // securing data from all harm
    global $conn;
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

function send_message(){
    global $conn;
    if(isset($_POST['submit'])){
        $name = escape($_POST['name']);
        $subject = escape($_POST['subject']);
        $mailFrom = escape($_POST['email']);
        $message = escape($_POST['message']);

        $mailTo = "";
        $headers = "From: ". $mailFrom;
        $txt = "You have received an e-mail from ". $name . ".\n\n".$message;

        if(mail($mailTo, $subject, $txt, $headers)=== true)
        {
            echo "mail sent";
        }else{
            echo "mail not sent";
        }
    }
}
send_message();
?>
<div class="wrap">
    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-9 main-content">

                    <form action="" method="POST" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control ">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control ">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </div>
                    </form>


                </div>

                <!-- END main-content -->

            </div>
        </div>
    </section>

</div>




<!-- include footer -->
<?php
require_once "inc/footer.php";
?>