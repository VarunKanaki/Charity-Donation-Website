<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	
	
	//Add donation type
	if(isset($_POST['add_don_type_btn']))
	{
		$res_title			=	$_POST['don_type_title'];
		$res_purpose		=	$_POST['don_type_purpose'];
		$res_founder		=	"admin";
		$res_event_img		=	$_POST['don_type_img'];
		
		$obj->don_type_list($res_title,$res_purpose,$res_founder,$res_event_img);
	}

	
	
	
?>



<html>
<head>
<title>Add Donation Type</title>

	<link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap-utilities.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
	
    <script type="text/js" src="../js/bootstrap.js"></script>
	<script type="text/js" src="../js/bootstrap.bundle.js"></script>	
    <script type="text/js" src="../js/bootstrap.esm.js"></script>
	
</head>
<body>

	<?php
		require_once("admin_page_header.php");
	?>

<br>

<div class="container ">
  
  <div class="row">
    <div class="col col-md-6">
	
	<div class="form_container">
      <form action="add_donation_category.php" method="POST">
	    <h3>Add New Donation Category</h3>

	 <div class="mb-3">
    <label for="exampleInputTitle" class="form-label">Title :</label>
    <input type="text" name="don_type_title" class="form-control inputbox" id="exampleInputTitle" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPurpose" class="form-label">Purpose :</label>
    <input type="text" name="don_type_purpose" class="form-control inputbox" id="exampleInputPurpose" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFounder" class="form-label">Founder :</label>
    <input type="text" class="form-control inputbox" placeholder="admin" id="exampleInputFounder" disabled>
  </div>
  
  <div class="mb-3">
  <label for="formFile" class="form-label">Select Image :</label>
  <input class="form-control inputbox" name="don_type_img" type="file" id="formFile" required>
</div>

<input type="submit" name="add_don_type_btn" class="cstm_add_don_btn" value="Add">




  </form>
    </div>
	</div>
    <div class="col col-md-6">
      <img src="logo.jpeg" alt="logo" class="charity_logo">
    </div>
 
  </div>
</div>

</body>
</html>