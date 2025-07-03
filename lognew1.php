<?php
//Include function file
require_once('lib/functions_pro.php');
$obj = new Charity();

if (isset($_GET['logout'])) {
    unset($_SESSION['Mobile_No']);
	unset($_SESSION['User_name']);
	unset($_SESSION['User_Profile_Photo']);

}

$flag=0;

if (isset($_POST['submit_btn'])) {
    $var_Mobile_No = $_POST['Mobile_No'];
    $var_password = $_POST['pswd'];

    $res_password = $obj->get_user_password($var_Mobile_No);
	$res_username = $obj->get_user_name($var_Mobile_No);
	$res_profile_photo =$obj->get_user_profile_photo($var_Mobile_No);
    if ($res_password == "") 
	{
       //This user is not registered with us. Check Mobile Number
	   $flag = 1;
    } 
	else 
	{
        if ($var_password == $res_password) 
		{
			$flag = 3;
            //echo "login Success";
            $_SESSION['Mobile_No'] = $var_Mobile_No;
			$_SESSION['User_name'] = $res_username;
			$_SESSION['User_Profile_Photo'] =$res_profile_photo;

            header("location:../user_page.php");
        } 
		else 
		{
			$flag = 2;
            //Incorrect password
        }
    }

}
?>
<html>

<head>
    <title>
        Charity Circle-LOG-IN
    </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href=" @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script type="text/js" src="../js/bootstrap.js"></script>
    <script type="text/js" src="../js/bootstrap.bundle.js"></script>

</head>

<body>
	<?php

	require_once('header.php');
	?>
	
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


			<!--not registered-->
			<?php 
			if($flag==1)
			{
				?>
				<div class="alert alert-danger d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				  <div>
				   <b>This user is not registered with us. Check Mobile Number</b>
				  </div>
				</div>

			<?php
			}
		   ?>
		   
		   <!--incorrect password msg-->
		   <?php 
			if($flag==2)
			{
				?>
				<div class="alert alert-danger d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				  <div>
				   <b>Incorrect Password</b>
				  </div>
				</div>
			<?php
			}
		   ?>
		   
		   
		   <!--susscess msg-->
			<?php 
			if($flag==3)
			{
				?>
				<div class="alert alert-success d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
				  <div>
				   <b> Login Successful!!!!!</b>
				  </div>
				</div>
			<?php
			}
		   ?>
		  
 <div class="box">		  
    <form action="lognew1.php" method="post">
   
        <div class="container">
            <div class="top-header">
                
                <header>Login</header>
            </div>
			
            <div class="input-field">
                <i class="fa-solid fa-phone fa-xl"></i>
                <input type="number" class="input_box" placeholder="xxx-xxx-xxxx" name="Mobile_No" required id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
				
                                                       

            </div>
            <div class="input-field">
                <i class="fa-solid fa-lock fa-xl"></i>
                <input type="password" class="input_box" placeholder="Password" name="pswd" required>

			
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Login" name="submit_btn">
            </div>
          	 <span>Create a New Account: <a href="signgrid.php" style="margin-left:10px;">Sign-Up</a></span>

        </div>
  
    </form>
	  </div>
</body>

</html>







