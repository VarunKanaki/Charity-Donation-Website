<?php

require_once('lib/functions_pro.php');
$obj = new Charity();


	if(isset($_POST['submit_btn']))
	{
	$var_full_name = $_POST['full_name'];
	 $var_email_id  = $_POST['email_id'];
	 $var_mobile_no = $_POST['mobile_no'];
	$var_gender    = $_POST['gender'];
	 $var_age       = $_POST['age'];
    
		
     $obj->set_volunteer_details($var_full_name,$var_email_id,$var_mobile_no,$var_gender,$var_age);
		
	}
?>
<html>
<head>
    <title>Regirestration</title>
    <link rel="stylesheet" href="css/become_volunteer_style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    
</head>
<body>
    <?php
    require_once('header.php');
?>
<br>
    <div class="container register text-center">
        <div class="row align-items-start">
            <div class=" col col-md-4 register-left">
                
                <h3>Welcome to <br>Charity Circle</h3>
                <p>Become a part of our volunteer family</p> 
                 
            </div>
            <div class=" col col-md-8 register-right">
                    <h3 class="register-heading">Become a Volunteer</h3>
                    <div class="row register-form">
                        <form action="become_volunteer.php" method="post">
                            <div class="container">
                                <div class="form-become_volunteer">
                                    <div class="inputbox">
                                        <input class="input_designe" type="text" name="full_name" required="required">
                                        <i class="fa-solid fa-user" style="color: #000000;"></i>
                                        <span>Full Name</span>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" class="input_designe" name="email_id" required="required">
                                        <i class="fa-solid fa-envelope" style="color: #000000;"></i>
                                        <span>Email Address</span>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" class="input_designe" name="mobile_no" required="required">
                                        <i class="fa-solid fa-mobile" style="color: #000000;"></i>
                                        <span>Mobile Number</span>
                                    </div>
                                    
                                    <div>                    
                                        <label >select gender:</label>
                                        <input class="radio" type="radio" name="gender" value="male"/>Male
                                        <input class="radio" type="radio" name="gender" value="Female"/>Female
                                    </div>
                    
                                    <div class="inputbox">
                                        <input type="text" class="input_designe" name="age" required="required">
                                        <span>Age</span>
                                    </div>
                                  
                                    <div>
                                        <input type="checkbox" name="terms_conditions" value="terms_condition">By checking submit, you aggery to our <a href="">Terms & Consitions</a>, <br>visitors Agreement and <a href="">Privacy policy</a>
                                     <div>
                                    <div >
                                        <input type="submit" name="submit_btn" class="btnRegister"  value="Register"/>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once('footer.php');
?>
</body>
</html>