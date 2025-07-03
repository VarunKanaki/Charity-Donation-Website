<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--CSS file-->
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
     

    <!--javascript for slider-->
    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 1000); // Change image every 1 seconds
        }
    </script>    
</head>
<body>
    <h1 class="h1design">Testinomial Page</h1>
    <hr>
    <div class="wrapper">
        <h1>The Reviews........</h1>
        <br>
        <h5>Check What They say about us...</h5>
        <!--Cards-->
        <div class="cards mySlides fade">
            <div class="cardimg">
                <img src="images/tata.jpg">
                <p class="textedit">Your generous energy and time contributed to this volunteer work were incredible. Your spirits are uplifting, and we appreciate your enthusiasm; you are the new reason of our proud. </p>
                <h2>Ratan tata</h2>
                <h4>CEO,TATA Industries</h4>
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="cardimg h-100">
                <img src="images/Modi.jpg">
                <p class="textedit">I heard about them.Their work is appriciatable, they are fully dedicated for their work.They are making bond with the people.This charity organization attracting the eye balls of people by their work.</p>
                <h2>Narendra Modi</h2>
                <h4>PM,India</h4>
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="cardimg h-100">
                <img src="images/eknath.jpg">
                <p class="textedit">A human’s life is not just about himself but what he has to offer to society. Congratulations on helping the ones in need.You have a life of visions, and your acts of charity are indeed worth appreciating.</p>
                <h2>Eknath Shinde</h2>
                <h4>CM,Maharashtra</h4>
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="cardimg h-100">
                <img src="images/dhoni.png">
                <p class="textedit">It fills me with pride when I see you going out of the way to help others. Your charities will never go to waste.I love your warm and humble personality. Your charities have indeed made so many lives.</p>
                <h2>M.S.Dhoni</h2>
                <h4>cricketer,India</h4>
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="cardimg h-100">
                <img src="images/externalminister.jpg">
                <p class="textedit">Although charity begins at home, you continued with your great gesture. You are an example for all of us to follow.Your acts of charity really inspire all of us.You are indeed making change in society </p>
                <h2>S.Jaishankar</h2>
                <h4>Minister,External Affairs</h4>
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="cardimg h-100">
                <img src="images/billreview.jpg">
                <p class="textedit">It is not how much you give matters more than how you give. And indeed, your gestures are full of warmth and love.Your acts of virtue and charity have impacted a lot of lives. We are so grateful to you. </p>
                <h2>Bill Gates</h2>
                <h4>Businessman,USA</h4>
                <i class="fa fa-quote-left"></i>
            </div>
        </div>
    </div>
</body>
</html>