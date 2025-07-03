<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	
?>


<html>
<head>
<title>VOlunteer List</title>

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


  <h3>Volunteer Community</h3>
  
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
			
		</thead>
		
		<tbody>
			<?php 
				
				$volunteer_list	= array();
				$volunteer_list	= $obj->get_volunteer_list();
				
	
						if(!empty($volunteer_list))
						{
							$counter = 0;


							foreach($volunteer_list as $record)
							{
								
								$res_id 			= 	$volunteer_list[$counter]['id'] ;
								$res_full_name	 	= 	$volunteer_list[$counter]['full_name'];
								$res_email 			= 	$volunteer_list[$counter]['email_id'];
								$res_mobile 		= 	$volunteer_list[$counter]['mobile'];
								$res_gender			= 	$volunteer_list[$counter]['gender'] ;
								$res_age			= 	$volunteer_list[$counter]['age'];
								$res_date 			= 	$volunteer_list[$counter]['date'] ;
								$res_time 			= 	$volunteer_list[$counter]['time'];
								
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
					$filename = 'volunteer_list'.date('Ymd') . ".xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attacment; filename=\"$filename\"");
				$show_column = false;
				if(!empty($volunteer_list))
				{
					foreach($volunteer_list as $record)
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
  <div class="export_volunteer_btn">
	<a href="volunteer_list.php?excel_report">Download</a>
  </div>
 
</body>
</html>