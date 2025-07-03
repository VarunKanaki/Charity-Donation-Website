<link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap-utilities.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
	
	 <script type="text/js" src="../js/bootstrap.js"></script>
	<script type="text/js" src="../js/bootstrap.bundle.js"></script>	
    <script type="text/js" src="../js/bootstrap.esm.js"></script>
	
	
	<style>
	.cstm_top_header
	{
		margin: 0px;
		 background-color:#111111;
		width: 100%;
		height: 30px;
		color: #ffffff;
	}
	.cstm_header_text
	{
		margin-top: 3px;
		margin-right:10px ;
		float: left;
	}

		.social_icons_container
		{
			float: right;
		}
		.social_icons_container a
		{
			margin-right: 15px;
			font-size: 20px;
			text-decoration: none;	
		}
		
		.cstm_nav {
		  border: 1px solid #ccc ;
		  background-color: #f1f1f1 ;
		}

		.cstm_nav a {
		  border: none;
		  outline: none;
		  padding: 14px 16px;
		  transition: 0.3s;
		  font-size: 17px;
		}

		.cstm_nav a:hover {
		  background-color: #ddd;
		}

		.cstm_nav a.active {
		  background-color: #ccc;
		}
		
	</style>
	
	
	<!--Font Awesome-->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />


	<!--Top Header-->
	<div class="cstm_top_header">
      <div class="cstm_header_text">
          <i class="fa-regular fa-envelope fa-beat-fade" style="color: #ffffff;"></i><span style="margin: 4px;">charitycircle09@gamil.com</span>
      </div>
      <div class="cstm_header_text">
      <i class="fa-solid fa-phone-volume fa-beat-fade" style="color: #ffffff;"></i>   <span style="margin: 4px;">  9370431953</span>
      </div>
	  <div class="social_icons_container">
          <a href=""><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></i></a>
         <a href=""><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
         <a href=""><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>    

      </div>
	
	</div>
	
	
	<!-- Charity Logo-->
	
	<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      CharityCircle
    </a>
  </div>
</nav>
	
	
	<!--Nav Links-->
	<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav cstm_nav">
        <a class="nav-link " href="admin1.php">Dashboard</a>
        <a class="nav-link" href="volunteer_request.php">Volunteer Request</a>
        <a class="nav-link" href="volunteer_list.php">Volunteer List</a>
		<a class="nav-link" href="add_donation_category.php">Add Donation Category</a>
        <a class="nav-link" href="donation_category.php">Donation Category List</a>
		<a class="nav-link" href="events.php">Events</a>
		<a class="nav-link" href="contact_us.php">Contact Us </a>
      </div>
    </div>
  </div>
</nav>