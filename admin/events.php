<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	


	//Add new Event
	if(isset($_POST['add_event_btn']))
	{
		$res_event_name		=	$_POST['event_name'];
		$res_start_date		=	$_POST['start_date'];
		$res_end_date		=	$_POST['end_date'];
		$res_venue			=	$_POST['event_venue'];
		$res_description	=	$_POST['event_description'];
		$res_event_img		=	$_POST['event_image'];
		


		/* $valid_formats = array("jpg","png","gif","bmp","jpeg","JPEG","JPG","BMP","PNG","GIF");

		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{	
	
		$name 				= 	$_FILES['event_image']['name'];
		$size 				= 	$_FILES['event_image']['size'];
		$res_event_img = 	$name;

		
		if(strlen($name))
			{				
				list($txt, $ext) = explode(".", $name);
				
				if(in_array($ext,$valid_formats))
				{
					$tmp = $_FILES['event_image']['tmp_name'];
					
					$img_Dir = "event_images/";
					
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
	} */
		$obj->add_new_event($res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img);
		
	}
	
	//delete Event
	if(isset($_GET['delete_id']))
	{
		
		$del_id = $_GET['delete_id'];
		$obj->del_event($del_id);
	}
	
	
	
	
?>



<html>
<head>
<title>Events</title>

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

<div class="content">
        <h1 align="center">EVENTS</h1>
        <span><!-- line here --></span>
    </div>
    
		<div class="container">
			<div class="row">
				<div class="col col-md-6 cstm_add_events_form_section" >
				  <div class="form_container" id="add_event_form">
				  
				  <form action="events.php" method="POST">
						<center><h3>Add Upcoming Event</h3></center>

							<div class="mb-3">
								<label for="exampleInputTitle" class="form-label">Event Name</label>
								<input type="text" name="event_name" class="form-control inputbox" id="exampleInputTitle" required>
							</div>
							 <div class="row g-3">
							  <div class="col">
								<label for="exampleInputTitle" class="form-label">Starts On</label>
								<input type="Date" class="form-control inputbox" name="start_date" required>
							  </div>							 
							 </div>
							  <div class="col">
							  	<label for="exampleInputTitle" class="form-label">Ends On</label>
								<input type="Date" class="form-control inputbox" name="end_date" required>
							  </div>
					
							 <div class="mb-3">
								<label for="exampleInputFounder" class="form-label">Venue</label>
								<input type="text" name="event_venue" class="form-control inputbox" id="exampleInputVenue" required>
							</div>
							  
							<div class="mb-3">
								<label for="exampleInputFounder" class="form-label">Description</label>
								<textarea name="event_description" class="form-control inputbox" required></textarea>
							</div>
							  
							  
							<div class="mb-3">
							  <label for="formFile" class="form-label">Select Image :</label>
							  <input class="form-control inputbox" name="event_image" type="file" id="formFile" >
							</div>

							<input type="submit"  name="add_event_btn" class="cstm_add_don_btn" value="ADD">




					</form>
					
					
			</div>
			
		</div>
		
		
    <div class="col col-md-6 cstm_event_data_section">
	
	<center><h1>Event List</h1></center>
	<table border=1 cellspacing=2 cellpadding =8 style="text-align:center;">
		<thead style="border:1px solid black;">
			<th>Sr No</th>
			<th>Event Name</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Venue</th>
			<th>Date</th>
			<th>Time</th>
			<th>Update</th>
			<th>Delete</th>

		</thead>
		
		<tbody>
			<?php 
				
				$event_details	= array();
				$event_details 	= $obj->get_event_type_list();
				
	
						if(!empty($event_details))
						{
							$counter = 0;


							foreach($event_details as $record)
							{
								
								$res_id 			= 	$event_details[$counter]['id'] ;
								$res_event_name	 	= 	$event_details[$counter]['event_name'];
								$res_start_date 		= 	$event_details[$counter]['start_date'] ;
								$res_end_date 		= 	$event_details[$counter]['end_date'] ;

								$res_venue 			= 	$event_details[$counter]['venue'];
										
								$res_date 			= 	$event_details[$counter]['date'] ;
								$res_time 			= 	$event_details[$counter]['time'];
								
				?>
							<tr>
								<td><?php echo $counter+1 ; ?> </td>
								<td><?php echo $res_event_name; ?> </td>
								<td><?php echo $res_start_date; ?> </td>
								<td><?php echo $res_end_date; ?> </td>
								<td><?php echo $res_venue; ?> </td>
								
								<td><?php echo $res_date; ?> </td>
								<td><?php echo $res_time; ?> </td>
								<td><a href="update_events.php?update_id=<?php echo $res_id; ?>"><i onclick="formView()" class="fa-sharp fa-solid fa-user-pen" style="color: #00ff00;"></i></a></td>
								<td><a href="events.php?delete_id=<?php echo $res_id; ?>"><i  class="fas fa-trash" style="color: #f20202;"></i></a></td>
								
							
							</tr>
								
				<?php
				
								$counter++;
							}
							
						}
						else
						{
							echo "No data Found";
						}
				
				
			?>
		
		
		</tbody>
  </table>
	
    </div>
    
  </div>
</div>

    </div>
   
  </div>
</div>


<script>

		function formView()
		{
			var form1,form2;
			
			form2= document.getElementById("add_event_form");
			form2.style.display="none";
			
			form1= document.getElementById("update_form");
			form1.style.display = "block";

			form1.style.display = "active";

			
			
		}
</script>
  

</body>
</html>