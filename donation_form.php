<?php

	require_once('lib/functions_pro.php');
	$obj = new Charity();
	
	
	if(isset($_POST['donate_btn']))
	{
		 $first_name			=	$_POST['first_name'];
		 $last_name			=	$_POST['last_name'];
		 $email				=	$_POST['email'];
		$mobile				=	$_POST['mobile_no'];
		 $state				=	$_POST['state'];
		 $don_category		=	$_POST['don_category'];
		 $amount				=	$_POST['amount'];
		 $payment_method		=	$_POST['payment_method'];
		 $paying_to			=	$_POST['paying_to'];

    $obj->set_donation_details($first_name,$last_name,$email,$mobile,$state,$don_category,$amount,$payment_method,$paying_to);

	}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>


        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">


		<link rel="stylesheet"	href="css/donation_form1.css">
        
        <!--JVSCRIPT Link-->
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/bootstrap.esm.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>


</head>
<body>
    <div class="container cstm_grid">
        <div class="row">

          <div class="col col-md-6 don_col_1" >
            <h1>Join Us Today !</h1>
            
            <img src="images/don_form_img2.jpg" alt="img" class="don_col1_img">
        
            <div class="don_content">
              <h3>Be the Difference: Donate Today!</h3>
              <p>
                Every donation, big or small, makes a significant impact.Together, let's be the difference and change the lives.
                 Donate today and make a lasting differencein the lives of those who need it most. 
              </p>
            </div>
          </div>
          

      
          <div class="col col-md-6">
            <h1>Be a Donor</h1>

            <!--Donation Form -->

        <form class="donation_form" action="donation_form.php" method="POST">
            <div class="row g-3 cstm_box">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                  <input type="text" required class="form-control" name="first_name">
                </div>
                <div class="col ">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>

                  <input type="text" required class="form-control" name="last_name">
                </div>
              </div>

              <div class="mb-3 cstm_box">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" required class="form-control" id="exampleFormControlInput1" >
              </div>

              <div class="row g-3 cstm_box">
                
                <div class="col-md-6 cstm_box">
                    <label for="inputCountry" class="form-label">State</label>

                  <input type="text" required class="form-control" name="state" id="inputCountry">
                </div>

                <div class="col-md-6 cstm_box">
                    <label for="inputphno" class="form-label">Mobile NO.</label>
                  <input type="number" required class="form-control" name="mobile_no" id="inputphno">
                </div>
              </div>
			  
			  <div class="mb-3 cstm_box">
                <label for="exampleFormControlInput1" class="form-label">Donation Category</label>
                <input type="text" name="don_category"  value="<?php ?> " class="form-control" id="exampleFormControlInput1" >
              </div>

              <div class="mb-3 cstm_box">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" required class="form-control" name="amount" id="amount" placeholder="$">

              </div>

              

              <div class="mb-3 cstm_box">

              <label for="inputPayment" class="form-label">Payment Method</label>

              <select class="form-select cstm_select" name="payment_method" aria-label="Default select example">
                <option selected>Select Payment Method</option>
                <option value="UPI">UPI Payment</option>
                <option value="Net Banking">Net Banking</option>
              </select>
              </div>

              <div class="mb-3 cstm_box">
                <label for="paying_to" class="form-label">Paying to</label>
                <input class="form-control" type="text" name="paying_to" readonly placeholder="admin">
              </div>

              
              <input type="submit" class="btn btn-success" name="donate_btn" value="Donate"/>

            </form>

          </div>

        </div>
      </div>
    
      
</body>
</html>