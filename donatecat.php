<?php

require_once('lib/functions_pro.php');
$obj= new Charity();

?>
<html>
<head>
<title>
Donation Categories
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

<link rel="stylesheet" href="css/donate.css">
<link rel="stylesheet" href="css/style.css">

<script type="text/js" src="js/bootstrap.js"></script>
<script type="text/js" src="js/bootstrap.bundle.js"></script>

</head>

<body>
<?php

	require_once('user_header.php');

?>
<div class="catcontainer">

<?php
		$don_cat=array();
		$don_cat=$obj->get_don_type_list();
		
		
		
		if(!empty($don_cat))
			{
				$counter = 0;
				foreach($don_cat as $record)
				{
					$res_id			=	$don_cat[$counter]['id'];
					$res_title 	= 	$don_cat[$counter]['title'];
					$res_purpose	=	$don_cat[$counter]['purpose'];
					$res_founder		=	$don_cat[$counter]['founder'];
					$res_don_type_img		=	$don_cat[$counter]['don_type_img'];
					$res_date	    =	$don_cat[$counter]['date'];
					
					$res_time				=	$don_cat[$counter]['time'];
					
				?>
<div class="card-group cstm_conatiner" style="width:500px;">
  <div class="card cstm_card">
   <!-- <img src="admin/don_cate_images/" class="card-img-top cstm_img" alt="...">-->
    <div class="card-body">
      <h5 class="card-title cstm_title"><?php echo $res_title?></h5>
      <p class="card-text cstm_purpose"><b>Purpose: <?php echo $res_purpose; ?></b></p>
	   <p class="cstm_founder"><b>Founder: <?php echo $res_founder; ?></b></p>
    </div>
    <div class="card-footer cstm_foot">
<center><a href="donation_form.php"><button type="button"  class="btn btn-primary btn-lg donate">DONATE</button></a></center> </div>
  </div>
</div>

				<?php
				
				$counter++;
				}
			}
			else
			{
				echo "No data found";
			}
				
				?>

</div>
</div>


</body>
</html>