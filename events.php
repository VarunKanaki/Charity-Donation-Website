
<?php

	require_once('lib/functions_pro.php');
	$obj = new Charity();
	
	
?>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>charity circle-Events</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/events.css">

    <!--font-aweasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--Button onclick event farm-->
    <script>
      function youtubevideo(){
        window.open("https://www.youtube.com/watch?v=xFqecEtdGZ0")
      }
      function youtubevideoeducation(){
        window.open("https://youtube.com/watch?v=dPXBCLaOzzw")
      }
      function youtubevideoworklabour(){
			window.open("https://youtube.com/watch?v=RoxG7cND0bo")
      }
      function youtubevideohealth(){
        window.open("https://www.youtube.com/watch?v=uKMl6GDc26s")
      }
      function youtubevideoschoolbuild(){
        window.open("https://www.youtube.com/watch?v=EKLQtGhzVoM&t=24s")
      }
      function youtubevideoflooddonation(){
        window.open("https://www.youtube.com/watch?v=4jTnd7V1jwM")
      }
    </script>
</head>
<body>

<?php

      require_once('header.php');

?>
<div class="content">
        <h1 align="center">EVENTS</h1>
        <span><!-- line here --></span>
</div>
<div class="container cstm_upcoming_event_cont">

<?php 
				
				$events_details	= array();
				$events_details 	= $obj->get_event_type_list();
				
	
						if(!empty($events_details))
						{
							$counter = 0;


							foreach($events_details as $record)
							{
								
								$res_id 			= 	$events_details[$counter]['id'] ;
								$res_event_name	 	= 	$events_details[$counter]['event_name'];
								$res_start_date 	= 	$events_details[$counter]['start_date'] ;
								$res_end_date 		= 	$events_details[$counter]['end_date'];
								$res_venue 			= 	$events_details[$counter]['venue'];
								$res_description 	=	$events_details[$counter]['description'] ;
								$res_event_img 		=	$events_details[$counter]['event_img'] ;
								$res_date 			= 	$events_details[$counter]['date'] ;
								$res_time 			= 	$events_details[$counter]['time'];
								
				?>
				
	<div class="card text-bg-dark cstm_upcoming_events_card h-100">
	  <img src="images/food.jpg" class="card-img" alt="..." style="height:100%; opacity:0.5;">
	  <div class="card-img-overlay">
		<h5 class="titleupcoming"><?php echo $res_event_name; ?></h5><br>
		<i class="fa-regular fa-calendar-days"></i><p class="dateupcoming"><?php echo $res_start_date." To ".$res_end_date; ?></p>
		<i class="fa-solid fa-location-dot"></i><p class="textupcoming"><?php echo $res_venue ?></p>

		<p class="upcomingtext" style="height:70px;"><?php echo $res_description; ?></p>
		 

	  </div>
	</div>
	<?php
				
								$counter++;
							}
							
						}
						else
						{
							echo "No data Found";
						}
				
				
			?>
  </div>	
	
	</div>
	

    <div class="row cstm_row row-cols-1 row-cols-md-3 g-4">
        <div class="col flip-card">
          <div class="card h-100 flip-card-inner">
            <div class="card-body flip-card-front">
              <img src="images/africaevent.jpeg" class="card-img-top" alt="...">
              <h5 class="card-title">Building A Future Generation....</h5>
              <p class="card-text">Being educated helps people to judge any situation and make the right decision. It also broadens one’s perspective and makes one knowledgeable, which is essential for their personal and professional growth in future.</p>
            </div>
            <div class="flip-card-back">
                <p>The primary education is the most important key-factor for the buiding the future generation.Primary education is now becoming a basic need of the childern's. So now it is our duty to fulfill this basic need of childern's ,so that they can give shape to their future as they want.Education is a basic human right, and an avenue to a better future. We work with communities to build schools, train teachers, promote the importance of education and ensure that all solutions are sustainable long-term. Find out how. 
                  <br>
                  <h5 style="color: #333; font-weight: bold;">What We did?</h5>
                  <ul class="listedit">
                    <li>Classroom Resources</li>
                    <li>Water and Sanitation</li>
                    <li>Helping Girls Stay in School</li>
                  </ul>
                   <button onclick="youtubevideoeducation()" class="btnedit">Watch Event Video</button><br>
                    <i class="fa-solid fa-calendar-days fa-flip"></i>
                    <span>12-16 Feb 2023</span><br>
                    <i class="fa-sharp fa-solid fa-location-dot fa-flip"></i>
                    <span>Pofadder, Northern Cape, South Africa.</span>
                </p>
            </div>
          </div>
        </div>
        <div class="col flip-card">
          <div class="card h-100 flip-card-inner">
            <div class="card-body flip-card-front">
              <img src="images/scoolevent.jpg" class="card-img-top" alt="...">
              <h5 class="card-title">We Builded A House Of Learing....</h5>
              <p class="card-text">They have participating villages provide their own labor and brick so that they are invested, but provide everything that a village could not otherwise obtain, such as roofing, teachers and curriculum.</p>
            </div>
            <div class="flip-card-back">
              <p style="font">Nowadays, school has become the first stepping stone in the life of a child, wherein he/she learns a lot more than just rote learning. Developing hobbies, refining them, learning basic etiquettes, getting skilled at multi tasking, developing social skills are some of the many things that a school equips a child with. By knowing the importance of school we decided to build a whole shool for childerns who are not able to take the primary education due to their financial crisis.Many people are donated the money for this childerns future.Our Whole team thanks to that people
                  <br>
                  <h5 style="color: #333; font-weight: bold;">What We did?</h5>
                  <ul class="listedit">
                    <li>Builded A Projector Classroom</li>
                    <li>Devloped A ground for extra curriculum activities</li>
                    <li>Hired a Local Teachers</li>
                  </ul>
                   <button onclick="youtubevideoschoolbuild()" class="btnedit">Watch Event Video</button><br>
                    <i class="fa-solid fa-calendar-days fa-flip"></i>
                    <span>12-16 march 2023</span><br>
                    <i class="fa-sharp fa-solid fa-location-dot fa-flip"></i>
                    <span>Bhagwanpur,Bihar,India.</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col flip-card">
          <div class="card h-100 flip-card-inner">
            <div class="card-body flip-card-front">
              <img src="images/flood.jpg" class="card-img-top" alt="...">
              <h5 class="card-title">We extended a helping hand to the flood victims....</h5>
              <p class="card-text">When there were floods in Kerala, we extended a helping hand to the people there,by taking the help of people we arranged food and a living space for them</p>
            </div>
            <div class="flip-card-back">
              <p>Charity Circle is an award winning organisation, providing disaster response & preparedness services across India. As a disaster relief agency, we help people to survive and rebuild their lives through food, medical, education, shelter and livelihood programs.Gently used clothing, socks, shoes, bedding, and blankets are almost always in need after a devastating flood.We helped the children affected by floods by sending them books and toys.We Purchased and donate new, non-perishable food items and bottled drinking water.
                <h5 style="color: #333; font-weight: bold;">How we helped people...</h5>
                <ul class="listedit">
                  <li>We rescued people by using local people and CRPF</li>
                  <li>We arranged good food and a clean leaving space for people</li>
                  <li>We also tried to help them financally and mentally</li>
                </ul>
                 <button onclick="youtubevideoflooddonation()" class="btnedit">Watch Event Video</button><br>
                  <i class="fa-solid fa-calendar-days fa-flip"></i>
                  <span>12-16 march 2023</span>
                  <i class="fa-sharp fa-solid fa-location-dot fa-flip"></i>
                  <span>Kerala,India</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col flip-card">
          <div class="card h-100 flip-card-inner">
            <div class="card-body flip-card-front">
              <img src="images/workinvillage.png" class="card-img-top" alt="...">
              <h5 class="card-title">We developed the village with our labor....</h5>
              <p class="card-text">Labour is a basis of not only consumption and production, but also it serves as a basis of exchange. A man needs so many commodities to fulfill his daily needs. He cannot produce all of them. He has to satisfy his needs by exchanging his surplus production with others.</p>
            </div>
            <div class="flip-card-back">
              <p>Shramdaan is essential for the wholesome development of the society, including the person himself. Shramdan activities motivate people to live in hygienic surroundings. Shramdan inculcates simplicity in the minds of every citizen, freedom from the complexity of the thoughts and the importance of cleanliness and green environment.<br>At village Mardi,solapur all people are motivated to contribute on Shramdaan Day activities. This collective effort brings a sense of unity and ownership among all participants, while also resulting in a clean and green campus, and having a positive impact on themselves and the surrounding environment.</p>
              <br>
                  <h5 style="color: #333; font-weight: bold;">What We devloped?</h5>
                  <ul class="listedit">
                    <li>Builded a Water canel</li>
                    <li>Devloped roads</li>
                    <li>Builded a Mobile tower</li>
                  </ul>
                   <button onclick="youtubevideoworklabour()" class="btnedit">Watch Event Video</button><br>
                    <i class="fa-solid fa-calendar-days fa-flip"></i>
                    <span>2-6 April 2023</span><br>
                    <i class="fa-sharp fa-solid fa-location-dot fa-flip"></i>
                    <span>Hivare,Maharashtra</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col flip-card">
            <div class="card h-100 flip-card-inner">
              <div class="card-body flip-card-front">
                <img src="images/healthevent.jpeg" class="card-img-top" alt="...">
                <h5 class="card-title">We conducted health camps for people's health....</h5>
                <p class="card-text">These camps make sure people are getting the healthcare at the right time, and seeing the doctor early enough before a small health problem turns serious.</p>
              </div>
              <div class="flip-card-back">
                <p>The health camp has been focusing on detection and treatment for acute illness along with free medicines, Eye/ ENT check-up, Diabetes and Hypertension check-ups, Gynaecological and Paediatric check-ups, provision of health education and spreading awareness about maternal health.Physicians, Eye Specialists, Child Specialists, Dentists, Gynecologists, Dieticians and Acupressure specialists were present where more than 500 villagers have been treated for their ailments.They were not only given consultation by the experts but also provided free medicines for their health problems.Many people were congratulating us for our work,and we are enjoying the company of people.
                  <h5 style="color: #333; font-weight: bold;">How people took advantage of it?</h5>
                  <ul class="listedit">
                    <li>10+ Eye Surgeries</li>
                    <li>Routine Checkup of 3000 people</li>
                    <li>Blood Donation Camp</li>
                  </ul>
                   <button onclick="youtubevideohealth()" class="btnedit">Watch Event Video</button><br><br>
                    <i class="fa-solid fa-calendar-days fa-flip"></i>
                    <span>12-16 Feb 2023</span><br>
                    <i class="fa-sharp fa-solid fa-location-dot fa-flip"></i>
                    <span>,Solapur,Maharashtra,India.</span>
                </p>
              </div>
            </div>
        </div>
            <div class="col flip-card">
                <div class="card h-100 flip-card-inner">
                  <div class="card-body flip-card-front">
                    <img src="images/agricultureevent.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">We conducted a Agricultural event for farmers....</h5>
                    <p class="card-text">Agriculture provides employment opportunities to rural agricultural and non-agricultural labourers. It plays a significant role in international trade and import and export activities.</p>
                  </div>
                  <div class="flip-card-back">
                    <p>This will undoubtedly benefit a large number of farmers and platform owners. CODISSIA is completely prepared to host the 21st edition of India's premier agricultural trade show, AGRI INTEX, from the 14th to the 17th of January 2023 at the CODISSIA Trade Fair Complex in Mumbai, Maharashtra, India.</p>
                    <br>
                    <h5 style="color: #333; font-weight: bold;">HIGHLIGHTS</h5>
                    <ul class="listedit">
                      <li>Participation of implement and machinery makers from all across India who provide solutions</li>
                      <li>Live Soilless Agriculture and Farm Mechanization</li>
                      <li>Integrated Living Model Farm to demonstrate sustainable and successful approaches</li>
                    </ul>     
                    <button onclick="youtubevideo()" class="btnedit">Watch Event Video</button><br><br>
                    <i class="fa-solid fa-calendar-days fa-flip"></i>
                    <span>14-17 June 2023</span><br>
                    <i class="fa-sharp fa-solid fa-location-dot fa-flip"></i>
                    <span>CODISSIA complex,Maharashtra</span>
                  </div>
                </div>
          </div>
 </div>

 <?php
 
            require_once('footer.php');
 
 ?>
</body>
</html>