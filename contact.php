<?php 
include 'feedback.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
     <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/contacttus.css" />
    <link rel="stylesheet" href="css/new.css" />
     <link rel="icon" href="imgs/1.png" type="images/headlogo">
    <title>Contact Us</title>
</head>

<body>
  
 <section>
   <?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

	<div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>
    <div class="dd">
    
    <div class="section-header">
      <div class="container">
        <h1>Contact Us</h1>
        <p>We are here to help, please do not hesitate to contact us.
          </p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h3>Address</h3>
              <p>The Greek Campus <br/>55060</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h3>Phone</h3>
              <p>010 034 59846</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h3>Email</h3>
             <p>growandshine@hotmail.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form method="post" action="feedback.php" id="contact-form">
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" required="true" name="email">
              <span>Email</span>
            </div>
            
            <div class="input-box">
              <input type="text" required="true" name="name">
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <textarea required="true" name="feedback"></textarea>
              <span>Type your Message...</span>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
     </div>
 <footer class="footer-distributed">

    <div class="footer-left">
        <img src="imgs/1.png">


        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">Account</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">© 2023 Grow&Shine </p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>171 - tahrir st,
                    greek campus </span>
                Building 101, CAI, EGYPT </p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>01003459846</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@eduonix.com">growandshine@hotmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About us</span>
            We offer training and skill building courses across Technology, Design, Management, Science and
            Humanities.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa-brands fa-facebook-f" style="color: #ffd43b;"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in" style="color: #ffd43b;"></i></a>
            <a href="#"><i class="fa-brands fa-instagram" style="color: #ffd43b;"></i></a>
            <a href="#"><i class="fa-solid fa-envelope" style="color: #ffd43b;"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp" style="color: #ffd43b;"></i></a>
        </div>
    </div>
</footer>
	 <!-- DARK MODE-->    

	  <script>
      $(".change").on("click", function () {

          if ($("body").hasClass("dark")) {
              $("body").removeClass("dark");
              $(".change").text("🌙");
          } else {
              $("body").addClass("dark");
              $(".change").text("☀️");

          }
      });
  </script>

 
  <script>
    $('.dropdown').click(function(e){
  e.stopPropagation();
  $('.nav-dropdown').toggle();
});

$('html').click(function(){
  $('.nav-dropdown').hide();
})

$('#nav-toggle').on('click', function() {
  this.classList.toggle('active');
});

$("#nav-toggle").click(function() {
      $("nav ul").toggle();
    });
    
  </script>
 <script>
  const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', () => {
    //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});


 </script>

	
    <script src="js/nav.js"></script>
       
</section>

</body>

</html>