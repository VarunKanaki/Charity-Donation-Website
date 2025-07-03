<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	
	//Volunteer request Accept
	if(isset($_GET['accept_id']))
	{
		
		$acc_id = $_GET['accept_id'];
		$obj->volunteer_request_accept($acc_id);
		
	}
	
	//Volunteer request Accept
	if(isset($_GET['reject_id']))
	{
		
		$rej_id = $_GET['reject_id'];
		$obj->volunteer_request_reject($rej_id);
	}
	
	
	
	
?>



<html>
<head>
<title>Volunteer Request</title>

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


  <h3>Request List</h3>
  
  <table class="rep_tbl" border=1 cellspacing=1 cellpadding =5 style="text-align:center;">
		<thead style="border: 1px solid black;">
			
			<th>Sr No</th>
			<th>Full Name</th>
			<th>Email Id</th>
			<th>Mobile No</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Date</th>
			<th>Time</th>
			<th>Accept</th>
			<th>Reject</th>
		</thead>
		
		<tbody>
			<?php 
				
				$volunteer_request	= array();
				$volunteer_request 	= $obj->get_volunteer_request();
				
	
						if(!empty($volunteer_request))
						{
							$counter = 0;


							foreach($volunteer_request as $record)
							{
								
								$res_id 			= 	$volunteer_request[$counter]['id'] ;
								$res_full_name	 	= 	$volunteer_request[$counter]['full_name'];
								$res_email 			= 	$volunteer_request[$counter]['email_id'];
								$res_mobile 		= 	$volunteer_request[$counter]['mobile'];
								$res_gender			= 	$volunteer_request[$counter]['gender'] ;
								$res_age			= 	$volunteer_request[$counter]['age'];
								$res_date 			= 	$volunteer_request[$counter]['date'] ;
								$res_time 			= 	$volunteer_request[$counter]['time'];
								
				?>
							<tr>
								
								<td><?php echo $counter+1 ; ?> </td>
								<td><?php echo $res_full_name; ?> </td>
								<td><?php echo $res_email; ?> </td>
								<td><?php echo $res_mobile; ?> </td>
								<td><?php echo $res_gender; ?> </td>
								<td><?php echo $res_age; ?> </td>
								<td><?php echo $res_date; ?> </td>
								<td><?php echo $res_time; ?> </td>
								<td><a href="volunteer_request.php?accept_id=<?php echo $res_id; ?>"><i class="fas fa-check-circle" style="color:Green;"></i></a></td>
								<td><a href="volunteer_request.php?reject_id=<?php echo $res_id; ?>"><i class="fas fa-times fa-lg" style="color: Red;"></i></a></td>
								
							
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


</body>
</html>