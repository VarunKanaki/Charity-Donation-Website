<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="keywords" content="Blogs,various articles and news">
     <meta name="description" content="various blogs about our donation categories">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>charity circle-Blogs</title>

    <!--css file include-->
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--Button action Event-->
    <script>
      function foodcrisis(){
        window.open("https://www.wfp.org/global-hunger-crisis")
      }
      function animaldonation(){
         window.open("https://www.amtmindia.org/blog/")              
      }
      function womenimpoverment(){
        window.open("https://www.competitionreview.in/blogs/2020/03/31/women-empowerment/")
      }
      function childlabour(){
        window.open("https://www.voicesofyouth.org/blog/child-labour-curse")
      }
      function education(){
        window.open("https://leverageedu.com/blog/article-on-importance-of-education/")
      }
      function naturaldisaster(){
        window.open("https://cidi.org/why-cash-is-best-for-international-disaster-relief/")
      }
    </script>
</head>
<body>
<?php
    require_once('header.php');
?>
<div class="content">
        <h1 align="center">Blogs</h1>
        <span><!-- line here --></span>
    </div>
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4 ">
          <div class="card  carddesign">
            <img src="images/food.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Why food crisis is also a primary crisis?</h5>
              <p class="card-text">Nearly 350 million people around the world are experiencing the most extreme forms of hunger right now. Of those, nearly 49 million people are on the brink of famine. As a result, food donation ensures that a lack of reliable meals is never a barrier to education, health, and economic status. Donating food not only fuels economic progress at the macro level, but it also helps you save disposal costs and entitles tax deductions with proper receipts.<br>
                <button onclick="foodcrisis()" class="btndesign">Read More</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4 ">
          <div class="card  carddesign">
            <img src="images/animal.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Donate for Animals!</h5>
              <p class="card-text">Animal shelters need food,bedding and other supplies. Many need veterinarian care, medical assistance and spaying/neutering.Your donations will help provide the care abandoned animals need until suitable home is found for them.However, if you can't donate money, don't despair there are other ways you can help!You might be suited to being a shelter veterinarian, spaying and neutering community pets at a low cost and performing community outreach in areas where there are pet care deserts. <br>
                <button onclick="animaldonation()" class="btndesign">Read More</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4 " >
          <div class="card  carddesign">
            <img src="images/women.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">#Breakthebias all about women</h5>
              <p class="card-text">Empowering women is essential to the health and social development of families, communities and countries. When women are living safe, fulfilled and productive lives, they can reach their full potential. contributing their skills to the workforce and can raise happier and healthier children.Women are made to be loved and respected; not to be raped. The progress of a nation will be blocked; if it's women are locked. Respect and empower women to empower the country. Never restrict a woman; she can do everything like a man.<br>
                <button onclick="womenimpoverment()" class="btndesign">Read More</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4 " >
          <div class="card carddesign">
            <img src="images/blog4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Don't make them labour, They have bright Future !!</h5>
              <p class="card-text">Child labour can result in extreme bodily and mental harm, and even death. It can lead to slavery and sexual or economic exploitation. And in nearly every case, it cuts children off from schooling and health care, restricting their fundamental rights.<br>
                <button onclick="childlabour()" class="btndesign">Read More</button>
              </p>
            </div>
          </div>
      </div>
      <div class="col mb-4 ">
        <div class="card carddesign">
          <img src="images/primaryeducation.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Education is the most important among all!!</h5>
            <p class="card-text">The role of primary education is to ensure the broad-based development of pupils. This means ensuring that all pupils are able to develop their cognitive, social, emotional, cultural and physical skills to the best of their abilities, preparing them for their further school career.<br>
              <button onclick="education()" class="btndesign">Read More</button>
            </p>
          </div>
        </div>
    </div>
    <div class="col mb-4 ">
        <div class="card carddesign">
          <img src="images/flood.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Help in Natural disaster!!</h5>
            <p class="card-text">Disasters may be explosions, earthquakes, floods, hurricanes, tornados, or fires. In a disaster, you face the danger of death or physical injury. You may also lose your home, possessions, and community. Inclusive development and poverty reduction are essential to protecting the poor from disasters. Improving access to financial, technical, and institutional resources will make them better able to respond to climate change.<br>
              <button onclick="naturaldisaster()" class="btndesign">Read More</button>
            </p>
          </div>
        </div>
    </div>
   </div>
  <?php
    require_once('footer.php');
  ?>
</body>
</html>