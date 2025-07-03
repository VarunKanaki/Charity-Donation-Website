<?php

require_once('../lib/functions_pro.php');
	$obj = new Charity();

if(isset($_GET['update_id']))
	{
		$upd_id	=	$_GET['update_id'];
		$_SESSION['update_id'] = $upd_id;
	}
	
	$upd_id	=	$_SESSION['update_id'];
	
	if(isset($_POST['update_event_btn']))
	{
		$res_event_name		=	$_POST['event_name'];
		$res_start_date		=	$_POST['start_date'];
		$res_end_date		=	$_POST['end_date'];
		$res_venue			=	$_POST['event_venue'];
		$res_description	=	$_POST['event_description'];
		$res_event_img		=	$_POST['event_img'];
	
		$obj->update_event($res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img,$upd_id);
	}
	
	$event_data	=	array();
	$event_data = $obj->get_event_id($upd_id);
	
	if(!empty($event_data))
	{		
						$res_id				=	$event_data['id'];
						$res_event_name		=	$event_data['event_name'];
						$res_start_date 	=	$event_data['start_date'];
						$res_end_date 		=	$event_data['end_date'];
						$res_venue			=	$event_data['venue'];
						$res_description	=	$event_data['description'];
						$res_event_img		=	$event_data['event_img'];
						$res_date			=	$event_data['date'];
						$res_time 			=	$event_data['time'];
	}

?>




<html>
<head>
<title>Update Event</title>

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



			
					
					<div class="container ">
					  <div class="row">
						<div class="col col-md-3">
						  
						</div>
						<div class="col col-md-6">
						<div class="form_container">
						  <form action="update_events.php" method="POST">
						<center><h3>Update Event</h3></center>

							<div class="mb-3">
								<label for="exampleInputTitle" class="form-label">Event Name</label>
								<input type="text" name="event_name" class="form-control inputbox" id="exampleInputTitle" value="<?php echo $res_event_name; ?>" required>
							</div>
							 <div class="row g-3">
							  <div class="col">
								<label for="exampleInputTitle" class="form-label">Starts On</label>
								<input type="Date" class="form-control inputbox" name="start_date" value="<?php echo $res_start_date; ?>" required>
							  </div>							 
							 </div>
							  <div class="col">
							  	<label for="exampleInputTitle" class="form-label">Ends On</label>
								<input type="Date" class="form-control inputbox" name="end_date" value="<?php echo $res_end_date; ?>"  required>
							  </div>
					
							 <div class="mb-3">
								<label for="exampleInputFounder" class="form-label">Venue</label>
								<input type="text" name="event_venue" class="form-control inputbox" id="exampleInputVenue" value="<?php echo $res_venue; ?>" required>
							</div>
							  
							<div class="mb-3">
								<label for="exampleInputFounder" class="form-label">Description</label>
								<textarea name="event_description" class="form-control inputbox" value="<?php echo $res_description; ?>" required></textarea>
							</div>
							  
							  
							<div class="mb-3">
							  <label for="formFile" class="form-label">Select Image :</label>
							  <input class="form-control inputbox" name="event_img" type="file" id="formFile" value="<?php echo $res_event_img; ?>" required>
							</div>

							<input type="submit"  name="update_event_btn" class="cstm_add_don_btn" value="Update">




					</form>
					</div>
						</div>
						<div class="col col-md-3">
						  
						</div>
					  </div>
					</div>
					</body>
		</html>