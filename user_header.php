<?php

//include tthe function file
require_once('lib/functions_pro.php');
$obj=new Charity();


?>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
                                <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
                            <link rel="stylesheet" type="text/css" href="signgrid.css">
                              <link rel="stylesheet" type="text/css" href=" @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');">
                                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>                                
                                
                                
                                <script type="text/js" src="js/bootstrap.js"></script>
                                <script type="text/js" src="js/bootstrap.esm.js"></script>
                                <script type="text/js" src="js/bootstrap.bundle.js"></script>
                                

<style>
	h3
	h2{
		margin-top:30px;
		font-size:50px;
		font-family: 'Antic Slab', serif;
		

	}
	.cstm_nav_links a
	{
		font-size:25px;
	font-family: 'Zilla Slab', serif;	
	}
	.login_info
	{
		margin-left:800px;
		font-family:Times New Roman;
		width:200px;
		height:80px;
	}
	.login_info img
	{
		position:absolute;
		width:50px;
		margin-top:10px;
		height:50px;
		border-radius:50%;
	}
	.login_info p
	{
		margin-left:60px;
		margin-top:10px;
		font-weight:bold;
		font-size:20px;
	
	}
	.logout_btn
	{
		margin-top:12px;
		margin-left:900px;
	}
	.logout_btn a
	{
		
		padding:10px;
		font-size:15px;
		text-decoration:none;
		background-color:blue;
		border-radius:80px;
		color:white;
		transition :1s;
	}
	.logout_btn a:hover
	{
		background-color:white;
		color:blue;
		font-weight:bold;
		border:1px solid Black;
	}
	.charity_logo_img
	{
		width:80px;
		border-radius:50%;
		margin-right:20px;
	}
	</style>
	





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="images/logo_main.jpg" class="charity_logo_img" ><h2 class="m-0 text-primary">CharityCirlce</h2>
        </a>
        
       <div class="login_info">
		
			<img src="old/profile_photos/<?php echo $_SESSION['User_Profile_Photo']; ?>"><p><?php echo $_SESSION['User_name']; ?></p>
			
			
		</div>
    </nav>
    <!-- Navbar End -->
	
	<!--Nav Links -->
	
<ul class="nav nav-tabs cstm_nav_links">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="donatecat.php">Donation Category</a>
  </li>
  <li class="nav-item">
    <a class="nav-link 	" aria-current="page" href="user_history.php">History</a>
  </li>
  <div class="logout_btn">
  <a href="lognew1.php?logout">Log-Out</a>
  </div>
</ul>

<!-- End Nav-links-->
