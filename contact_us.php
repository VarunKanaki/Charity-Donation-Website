<?php 

require_once('lib/functions_pro.php');
$obj = new Charity();


    if(isset($_POST['submit_btn']))
    {
        $var_full_name = $_POST['full_name'];
        $var_email_id = $_POST['email_id'];
        $var_message = $_POST['message'];
    
        $obj->set_contact_us($var_full_name,$var_email_id,$var_message);
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Charity circle-Contact us</title>
        <link rel="stylesheet" type="text/css" href="css/contact_us.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">

        <link type="text/javascript" href="js/bootstrap.bundle.js">
        <link type="text/javascript" href="js/bootstrap.esm.js">
        <link type="text/javascript" href="js/bootstrap.js">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    
        <!--Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    </head>
    <body>
    <?php
        require_once('header.php');
    ?>
    <br>
        <div class="contact-header_section">
            <div class="container text-center">
                <div class="row align-items-start">
                  <div class="col col-md-5">
                    <h1 class="headre_text">Contact Us</h1>
                  </div>
                  <div class="col col-md-1"></div>
                  <div class="col col-md-6">
                    <img src="images/contactus_head.jpeg" class="header_img" width="100%" height="300px">
                  </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col col-md-6">
                    
                    <h2>Get in touch</h2>
                    <p>
                        <div class="container">
                            <div class="contactInfo">
                                <div class="box">
                                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="text">
                                            <h3>Address</h3>
                                            <p>Government Polytechnic, Akkalkot Road, Shanti Chowk, Solapur, Maharashtra</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="text">
                                            <h3>Phone</h3>
                                            <p>+91 9112447876</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="icon"><i class="fa-solid fa-envelope" aria-hidden="true"></i></div>
                                        <div class="text">
                                            <h3>Email</h3>
                                            <p>charitycircle09@gmail.com </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="col col-md-6">
                        <div class="contactform">
                            <form action="contact_us.php" method="post">
                                <h2>Send Message</h2>
                                <div class="inputbox">
                                    <input type="text" name="full_name" required="required">
                                    <span>Full Name</span>
                                </div>
                                <div class="inputbox">
                                    <input type="text" name="email_id" required="required">
                                    <span>Email</span>
                                </div>
                                <div class="inputbox">
                                    <textarea required="required" name="message"></textarea>
                                    <span>Type Your Message...</span>
                                </div>
                                <div class="inputbox">
                                    <input type="submit" name="submit_btn" value="send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>How to get here</h1>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.7755407004774!2d75.92275571850584!3d17.671880964950788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da5dc381e2b5%3A0x74dd6309403c8258!2sGovernment%20Polytechnic%2C%20Solapur!5e0!3m2!1sen!2sin!4v1687764126344!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <?php
        require_once('footer.php');
    ?>

    </body>
</html>