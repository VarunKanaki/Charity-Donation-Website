<?php
//include tthe function file
require_once('lib/functions_pro.php');
$obj=new Charity();

$flag=0;

//check if form is submitted
if(isset($_POST['submit_button']))
{
	 $var_username=$_POST['Username'];
	 $var_pswd=$_POST['Password'];
	 $var_phone=$_POST['phone'];
	 $var_email=$_POST['email'];
	 $var_gender=$_POST['gender'];
	 $var_address=$_POST['address'];
	//echo $var_profile=$_POST['profile_photo'];
	$var_system_captcha= $_POST['system_captcha'];
	$var_user_captcha= $_POST['user_captcha'];
	
	if($var_system_captcha==$var_user_captcha)
	{
			
		$valid_formats = array("jpg","png","gif","bmp","jpeg","JPEG","JPG","BMP","PNG","GIF");

		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{	
	
		$name 				= 	$_FILES['profile_photo']['name'];
		$size 				= 	$_FILES['profile_photo']['size'];
		$var_profile = 	$name;
		
		if(strlen($name))
			{				
				list($txt, $ext) = explode(".", $name);
				
				if(in_array($ext,$valid_formats))
				{
					$tmp = $_FILES['profile_photo']['tmp_name'];
					
					$img_Dir = "profile_photos/";
					
					if(!file_exists($img_Dir))
					{
						mkdir($img_Dir);
					}
					
					if(move_uploaded_file($tmp,$img_Dir.$name))
					{
						
					}
					else
					{
						
						$image_error	=	"failed" ;
						$flag				=	1;
					}	
				}
				else
				{
					
					$image_error	= "Invalid file format";
					$flag				=	1;	
				}	
			}	
	}
		

	
		
		if($obj->set_sign_up($var_username,$var_pswd,$var_phone,$var_email,$var_gender,$var_address,$var_profile))
		{
		
		$flag=5;
		
			/*	//Send Whatsapp Message
			$whatsapp_message = "
				💥💥💥💥💥💥💥💥 \n

				*DREAM TECHNOLOGY*

				Dear $var_full_name,
				Thank You For Joining With Us \n

				\n Note:Automatic Software Message".
				"\n💥💥💥💥💥💥💥💥";

				$url =	"http://web.cloudwhatsapp.com/wapp/api/send?apikey=7a7bc6e92e1447d4ac545dac48eebee4&mobile=$var_mobile_number&msg=".urlencode($whatsapp_message);
					echo $response = file_get_contents($url);
					
						//Send Message
			$forwardURL = 'http://sms.bulksmsind.in/sendSMS?'.http_build_query(array(
				'username' => "abc",
				'sendername' => "DRMTCH",
				'smstype' => "TRANS",
				'numbers' => $contact_no,
				'message' => $user_message,
				'apikey' => "1b4a8d6a-5760-40c7-b7eb-e31119e19cad",
			));*/
	
		}
		else
		{
			$flag=2;
		}
	}
	else
	{
		$flag=3;
	}

}
?>

<html>
      <head>
            <title>
                                SIGN-UP
                                </title>
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
                            <link rel="stylesheet" type="text/css" href="css/signgrid.css">
                              <link rel="stylesheet" type="text/css" href=" @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');">
                                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>                                
                                
                                
                                <script type="text/js" src="js/bootstrap.js"></script>
                                <script type="text/js" src="js/bootstrap.esm.js"></script>
                                <script type="text/js" src="js/bootstrap.bundle.js"></script>
                                
                 </head> 
<body>

                <div class="container cstm_grid">
                  <div class="row">
                    <div class="col col-md-6">
                      <div class="img">
                        <img src="images/phone.png">
                    </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="signup-container">
                        <form action="signgrid.php" method="POST" enctype="multipart/form-data">
                                        <center><img class="welcome"src="images/undraw_welcome_cats_thqn (1).png"></center>
                                        <h2>SIGN-UP</h2>
										<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<?php
if($flag==5)
{
?>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
   <b> Your account created Successfully!!!!!</b>
  </div>
</div>
<?php
}
?>


<?php
if($flag==1)
{
?>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   <b>Problem With Image</b>
  </div>
</div>
<?php
}
?>


<?php
if($flag==1)
{
?>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   <b>Problem With Image</b>
  </div>
</div>
<?php
}
?>

<?php
if($flag==3)
{
?>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   <b>Invalid Captcha Code.. Refill details</b>
  </div>
</div>
<?php
}
?>

									
										<div class="input-div one focus">
                                                        <div class="i">
                                                         <i class="fa-solid fa-user fa-xl"></i>
                                                        </div>
                                                        <div>
                                                       <label for="exampleFormControlInput1" class="form-label">Username</label>
                                                        <input class="input" type="text" required name="Username">
                                                        </div>
                                        </div>
                                        <div class="input-div two focus ">
                                                        <div class="i">
                                                        <i class="fa-solid fa-lock fa-xl"></i>
                                                        </div>
                                                        <div>
                                                          <label for="exampleFormControlInput1" class="form-label">Password</label>
                                                        <input class="input" type="password" required name="Password">
                                                        </div>
                                        </div>
                                        
                                        <div class="input-div one focus">
                                                        <div class="i">
                                                       <i class="fa-sharp fa-solid fa-phone fa-xl"  style="color: #07a677;"></i>
                                                        </div>
                                                        <div>
                                                         <label for="exampleFormControlInput1" class="form-label">Mobile No.</label>
                                                        <input class="input" type="number"  id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx" required name="phone">
                                                        </div>
                                        </div>
                                        <div class="input-div one focus">
                                                        <div class="i">
                                                          <i class="fa-solid fa-at fa-xl" style="color: #07a677;"></i>
                                                        </div>
                                                        <div>
                                                          <label for="exampleFormControlInput1" class="form-label">Email_ID</label>
                                                        <input class="input" type="text" name="email" required>
                                                        </div>
                                        </div>
                                        <div class="input-div one focus">
                                                        <div class="i">
                                                         <i class="fa-regular fa-address-book fa-xl"></i>
                                                        </div>
                                                        <div>
                                                        <label for="exampleFormControlInput1" class="form-label">Selct Gender</label>
                                                        <input type="radio"  name="gender" value="male"/>Male
                                                        <input type="radio" name="gender" value="female"/>Female 
                                                        </div>
                                        </div>
                                        <div class="input-div one focus">
                                                        <div class="i">
                                                       <i class="fa-regular fa-address-book fa-xl " style="color: #07a677;"></i>
                                                        </div>
                                                        <div>
                                                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                                                        <input name="address" class="input" required>
                                                        </div>
                                                      </div>
                                        <div class="input-div one focus">
                                                        <div class="i">
                                                       <i class="fa-sharp fa-solid fa-user fa-xl " style="color: #07a677;"></i>
                                                        </div>
                                                        <div>
                                                          <label for="exampleFormControlInput1" class="form-label">Upload Profile Photo</label>
                                                        <input type="file" name="profile_photo" style="align-content: flex-start; margin-right:900px;"  required>
                                                        </div>
                                        </div>
                                        
										  <?php
												$random_value = rand(50000,99000);
										  ?>
										
										   <strong>Enter Captcha Code</strong>
										   <div style=" margin-left:300px">
											  <input type="text" readonly class="form-control" name="system_captcha" value="<?php echo $random_value; ?>" style="background-color: cornsilk; width:200px; margin-left:200px; height:100px; color:#38d39f; margin:20px; text-align:center; font-weight:bold; font-size:40px; border:none;" />
										  </div>
										  <div style=" margin-left:100px">
												<input  style="width:600px ; height:60px; font-size:30px;"type="text" class="form-control usercaptcha" name="user_captcha" required />
											</div>

									  <input type="submit" class="btn" value="Sign-Up"name="submit_button">
									  <a href="lognew1.php"><b class="have">Have an account?</b></a>
                        </form>
                      </div>
                    </div>
                    
                  </div>
                </div>
</body>
</html>