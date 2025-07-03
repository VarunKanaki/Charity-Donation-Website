<?php

	require_once('lib/functions_pro.php');
	$obj = new Charity();
	
	
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User-History</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
	
	
	
</head>

<body>
    
	<?php
	require_once('user_header.php');	
	?>

<h3>Donation History</h3>
  
  <table border=1 cellspacing=1 cellpadding =5 style="text-align:center;">
		<thead style="border: 1px solid black;">
			<th>Sr No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Id</th>
			<th>Mobile Number</th>
			<th>State</th>
			<th>Donation Category</th>
			<th>Amount</th>
			<th>Payment Method</th>
			<th>Paying To</th>
			<th>Date</th>
			<th>Time</th>
		</thead>
		
		<tbody>
			<?php 
				
				$donation_details	= array();
				$donation_details 	= $obj->get_user_donation_history($_SESSION['Mobile_No']);
				
	
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
								$res_paying_to		= 	"admin";
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
				
				
			?>
		
		
		</tbody>
  </table>
  