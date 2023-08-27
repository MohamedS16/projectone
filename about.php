<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/bb.css" />
    <link rel="stylesheet" href="css/new.css" />
     <link rel="icon" href="imgs/1.png" type="images/headlogo">
    <title>About Us</title>
</head>

<body>

 <?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

	
     <section class="main">
        <div class="main-content">
            <h1>About Us</h1>
            <div class="buttons">
                <p class="no-1">Who We Are</p>
                <p class="no-2">Our Goal</p>
                <p class="no-3">how to contact us</p>
            </div>
       
   
    <div class="about-us">
                <div class="content-img">
                    <img src="imgs/22.jpg" alt="">
                </div>
                <div class="discprition">
                    <h3 class="sectitle">WHO WE ARE?</h3>
                    <p class="sec-paragraph">
                   Shine and grow is a website for kids summertime. We help your kids to find their passion through a certified funny time, take advantage of their vacation and develop their personality .they will be able to start their training in many different fields like cooking, crafts, fashion design and many others so your kid will try work environment under our supervision to ensure their safety .we also offer online courses during the year that will help your kids to learn programming, business and many others. 
                    </p>
                </div>
            </div>
             <div class="vision remove">
                
                <div class="discprition">
                    <h3 class="sectitle">OUR GOAL</h3>
                    <p class="sec-paragraph">
                    A better future for our children and obtaining intellectually organized generations that know their passion well throw having a good training. Expanding and training the largest number of children all over Egypt is our main goal.
                    </p>
                </div>
                 <div class="content-img">
                    <img src="imgs/22.jpg" alt="">
                </div>
            </div>
             <div class="mission remove">
                 <div class="content-img">
                    <img src="imgs/22.jpg" alt="">
                </div>
                <div class="discprition">
                    <h3 class="sectitle">HOW CAN I CONTACT YOU?</h3>
                    <p class="sec-paragraph">
                     You can freely contact us through our social media accounts or our number
                        that is written on
                        this website.<br>
                        <a href="contact.php"><button class="no-1">CONTACT US</button></a>
                    </p>
                </div>
                 
            </div>
           
            </div>


    <section class="vision-mission">
        <h1>Vision & Mission</h1>
        <div class="big-vision-mission">
            <div class="vision-part">
                <img src="imgs/22.jpg" alt="">
            <h3 class="sectitle">Our Vision</h3>
                <p class="sec-paragraph">	A better future for our children and obtaining intellectually organized generations that know their passion well throw having a good training. Expanding and training the largest number of children all over Egypt is our main goal.
</p>
            </div>
            <div class="mission-part">
            <img src="imgs/22.jpg" alt="">
            <h3 class="sectitle">Our Mission</h3>
                <p class="sec-paragraph"> In Grow&Shine, we seek to gain the trust of our customers, who are the parents of our children, by providing comprehensive training for our children, which helps them know their passion in life and focus on achieving it for a better life for them.
</p>
            </div>
        </div>
    </section>
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
            <p>12 345 67890</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@eduonix.com">operation@grownshine.com</a></p>
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

  <script src="js/nav.js"></script>
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
         <script src="js/r.js"></script>
 </section>
</body>

</html>