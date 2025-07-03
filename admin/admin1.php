<?php

	require_once('../lib/functions_pro.php');
	$obj = new Charity();
	
	
?>


<html>
<head>
<title>Admin Page</title>

	<link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap-utilities.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

	<link rel="stylesheet" href="style.css">
    <script type="text/js" src="../js/bootstrap.js"></script>
	<script type="text/js" src="../js/bootstrap.bundle.js"></script>	
    <script type="text/js" src="../js/bootstrap.esm.js"></script>
	
</head>
<body>

	<?php
		require_once("admin_page_header.php");
	?>



<!--Donation Details-->
  <h3>Donation Details </h3>
  
 
  <table class="rep_tbl" border=1 cellspacing=1 cellpadding =5 style="text-align:center;">
		<thead  style="border: 1px solid black;">
			<th>Sr No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Id</th>
			<th>Mobile Number</th>
			<th>State</th>
			<th>Donation Category</th>
			<th>Amount</th>
			<th>Payment Method</th>
			<th>Paid To</th>
			<th>Date</th>
			<th>Time</th>
		</thead>
		
		<tbody>
			<?php 
				
				$donation_details	= array();
				$donation_details 	= $obj->get_donation_details();
				
	
						if(!empty($donation_details))
						{
							$counter = 0;


							foreach($donation_details as $record)
							{
								
								$res_id 			= 	$donation_details[$counter]['id'] ;
								$res_first_name	 	= 	$donation_details[$counter]['first_name'];
								$res_last_name 		= 	$donation_details[$counter]['last_name'] ;
								$res_email 			= 	$donation_details[$counter]['email'];
								$res_mobile 		= 	$donation_details[$counter]['mobile'];
								$res_state 			=	$donation_details[$counter]['state'] ;
								$res_don_category 	=	$donation_details[$counter]['don_category'] ;
								$res_amount			= 	$donation_details[$counter]['amount'] ;
								$res_payment_method = 	$donation_details[$counter]['payment_method'];
								$res_paying_to		= 	$donation_details[$counter]['paying_to'];
								$res_date 			= 	$donation_details[$counter]['date'] ;
								$res_time 			= 	$donation_details[$counter]['time'];
								
				?>
							<tr>
								<td><?php echo $counter+1 ; ?> </td>
								<td><?php echo $res_first_name; ?> </td>
								<td><?php echo $res_last_name; ?> </td>
								<td><?php echo $res_email; ?> </td>
								<td><?php echo $res_mobile; ?> </td>
								<td><?php echo $res_state; ?> </td>
								<td><?php echo $res_don_category; ?> </td>
								<td><?php echo $res_amount; ?> </td>
								<td><?php echo $res_payment_method; ?> </td>
								<td><?php echo $res_paying_to; ?> </td>
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
					$filename = 'donation_details'.date('Ymd') . ".xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attacment; filename=\"$filename\"");
				$show_coloumn = false;
				if(!empty($donation_details))
				{
					foreach($donation_details as $record)
					{
						if(!$show_coloumn)
						{
							echo implode("/t",array_keys($record)) . "\n";
							$show_coloumn = true;
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
  <div class="export_dashboard_btn">
	<a href="admin1.php?excel_report">Download</a>
  </div>
 

<h3>Charity Funds </h3>
  
 
  <table class="rep_tbl" border=1 cellspacing=1 cellpadding =5 style="text-align:center;">
		<thead  style="border: 1px solid black;">
			<th>Sr No</th>
			<th>Email</th>
			<th>Fund Donated</th>
			<th>Date</th>
			<th>Time</th>
		</thead>
		
		<tbody>
			<?php 
				
				$funds_details	= array();
				$funds_details 	= $obj->get_fund_details();
				
	
						if(!empty($funds_details))
						{
							$counter = 0;


							foreach($funds_details as $record)
							{
								
								$res_id 			= 	$funds_details[$counter]['id'] ;
								$res_email 			= 	$funds_details[$counter]['email'];
								$res_fund	 		= 	$funds_details[$counter]['fund_amount'];
								$res_date 			= 	$funds_details[$counter]['date'] ;
								$res_time 			= 	$funds_details[$counter]['time'];
								
				?>
							<tr>
								<td><?php echo $counter+1 ; ?> </td>
								<td><?php echo $res_email; ?> </td>
								<td><?php echo $res_fund; ?> </td>
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
					$filename = 'funds_details'.date('Ymd') . ".xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attacment; filename=\"$filename\"");
				$show_column = false;
				if(!empty($funds_details))
				{
					foreach($funds_details as $record)
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
  <div class="export_dashboard_btn">
	<a href="admin1.php?excel_report">Download</a>
  </div>

<h5 style="margin-left:20px; margin-top:50px;">
Total Funds = 
<?php 

$charity_fund = 310345;
$don_fund 	  =	$obj->get_fund_amount_total();

echo $charity_fund + $don_fund ; 



?>
</h5>

</body>
</html>
