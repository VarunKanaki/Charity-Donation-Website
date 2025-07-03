<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	

?>



<html>
<head>
<title>DOnation Type</title>

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


<h3>Donation Category List</h3>

 
  
  <table class="rep_tbl" border=1 cellspacing=1 cellpadding =5 style="text-align:center;">
		<thead style="border: 1px solid black;">
			<th>Sr No</th>
			<th>Title</th>
			<th>Purpose</th>
			<th>Founder</th>
			<th>Image</th>
			<th>Date</th>
			<th>Time</th>
		</thead>
		
		<tbody>
			<?php 
				
				$don_type_details	= array();
				$don_type_details 	= $obj->get_don_type_list();
				
	
						if(!empty($don_type_details))
						{
							$counter = 0;


							foreach($don_type_details as $record)
							{
								
								$res_id 			= 	$don_type_details[$counter]['id'] ;
								$res_title	 		= 	$don_type_details[$counter]['title'];
								$res_purpose 		= 	$don_type_details[$counter]['purpose'] ;
								$res_founder 		= 	$don_type_details[$counter]['founder'];
								$res_don_type_img 	= 	$don_type_details[$counter]['don_type_img'];
								$res_date 			= 	$don_type_details[$counter]['date'] ;
								$res_time 			= 	$don_type_details[$counter]['time'];
								
				?>
							<tr>
								<td><?php echo $counter+1 ; ?> </td>
								<td><?php echo $res_title; ?> </td>
								<td><?php echo $res_purpose; ?> </td>
								<td><?php echo $res_founder; ?> </td>
								<td><?php echo $res_don_type_img; ?> </td>
								
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
					$filename = 'category_report'.date('Ymd') . ".xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attacment; filename=\"$filename\"");
				$show_column = false;
				if(!empty($don_type_details))
				{
					foreach($don_type_details as $record)
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
  <div class="export_category_btn">
	<a href="donation_category.php?excel_report">Download</a>
  </div>
 
</body>
</html>

