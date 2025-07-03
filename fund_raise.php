<?php

	require_once('lib/functions_pro.php');
	$obj = new Charity();

	if(isset($_POST['fund_btn']))
	{
		$res_email		=	$_POST['email'];
		$res_funds		=	$_POST['fund'];
			
		
		$obj->set_funds($res_email,$res_funds);
	}

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   
    <title>FundRaising</title>
    <!--  Bootstrap Style -->
	<link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">

	
    <script type="text/js" src="js/bootstrap.js"></script>
	<script type="text/js" src="js/bootstrap.bundle.js"></script>	
    <script type="text/js" src="js/bootstrap.esm.js"></script>
	
	
    <!--  Font-Awesome Style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />
	
    <!--  Custom Style -->
    <link href="css/fundraise.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
     <?php 
     
         require_once('header.php');
            
    ?>
    <!--./ HEADER SECTION BAR END -->
    <div class="main-head" >

        <div class="container" >
            <div class="row">
			

                <div class="col-lg-3  col-md-3 col-sm-12 fund_form_cont">


                    <h2>RAISE FUNDS</h2>
                    <h5>We have raised fund of  </h5>
                    <span><strong><i class="fa fa-dollar"></i>3,10,345 </strong></span>
                    <h5>but for this year we require</h5>
                    <span><strong><i class="fa fa-dollar"></i>9,99,999 </strong></span>
                    <form action="fund_raise.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" name="email" placeholder="Your Email">
                        </div>
						
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" name="fund" placeholder="Donation Amount">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-style-1 btn-lg fund_btn" name="fund_btn" value="Donate">
                        </div>

                    </form>


                </div>
				
                
        </div>
    </div>
	</div>
    <!--./ MAIN HEADER SECTION END -->
   
    
   <?php
            require_once('footer.php');
   ?>
    
</body>
</html>
