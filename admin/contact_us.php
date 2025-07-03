<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	
	
	
?>


<html>
<head>
<title>Contact us</title>

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
<h3>Contact Us List</h3>
  

 
  <table class="rep_tbl" border=1 cellspacing=1 cellpadding =5 style="text-align:center;">
		<thead>
			<th>Sr No</th>
			<th>Full Name</th>
			<th>Email Id</th>
			<th>Message</th>
			<th>Date</th>
			<th>Time</th>
		</thead>
		
		<tbody>
			<?php 
				
				$contact_details	= array();
				$contact_details 	= $obj->get_contact_us();
				
	
						if(!empty($contact_details))
						{
							$counter = 0;


							foreach($contact_details as $record)
							{
								
								$res_id 			= 	$contact_details[$counter]['id'] ;
								$res_full_name	 	= 	$contact_details[$counter]['full_name'];
								$res_email	 		= 	$contact_details[$counter]['email'];
								$res_message 		= 	$contact_details[$counter]['message'];								
								$res_date 			= 	$contact_details[$counter]['date'] ;
								$res_time 			= 	$contact_details[$counter]['time'];
								
				?>
							<tr>
								<td><?php echo $counter+1 ; ?> </td>
								<td><?php echo $res_full_name; ?> </td>
								<td><?php echo $res_email; ?> </td>
								<td><?php echo $res_message; ?> </td>
								<td><?php echo $res_date; ?> </td>
								<td><?php echo $res_time; ?> </td>					
							</tr>
								
				<?php
				
								$counter++;
							}
							
						}
						else
						{
							echo "No data Found";
						}
				
				
				if(isset($_GET['excel_report']))
				{
					$filename = 'contact_us_report'.date('Ymd') . ".xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attacment; filename=\"$filename\"");
				$show_column = false;
				if(!empty($contact_details))
				{
					foreach($contact_details as $record)
					{
						if(!$show_column)
						{
							echo implode("/t",array_keys($record)) . "\n";
							$show_column = true;
						}
						echo implode("/t", array_values($record)) . "\n";
					}					
				}
				exit;
				}
	
			?>
		
		
		</tbody>
  </table>
  
  <!--Export to Excel button-->
  <div class="export_contact_btn">
	<a href="contact_us.php?excel_report">Download</a>
  </div>
 
</body>
</html>