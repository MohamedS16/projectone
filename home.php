<?php 
include 'connection.php';

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
  </script>
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
      rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="icon" href="imgs/headlogo.png" type="imgs/headlogo">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Grow&Shine</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  
  <link href="css/style.css" rel="stylesheet">

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
</head>

<body>

  <div class="hero_area">
    <!--NAV BAR WITH LOGO AND DARK MODE-->
  <?php
    $navp = 'navdefault';
    include('nav.php');
    ?>
  <!-- slider section -->
  <section class=" slider_section position-relative">
    <div class="design-box">
      <img src="imgs/design-1.png" alt="">
    </div>
    <div class="slider_number-container d-none d-md-block">
      <div class="number-box">
       
        <hr>
        <span class="jwel">
          G <br>
          R <br>
          O <br>
          W <br>
          & <br>
          S <br>
          H <br>
          I <br>
          N <br>
          E
        </span>
        <hr>
     
      </div>
    </div>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="detail_box">
                  <h2>
                    <span>WELCOME</span>
                    <hr>
                  </h2>
                  <h1>
                   GROW&SHINE
                  </h1>
                  <p>
                    Education is not the learning of facts, but the training of the mind to think!
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="imgs/Mental health-cuate.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- end slider section -->


  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="imgs/design-2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                WHO WE ARE?
              </h2>
            </div>
            <p>
              Shine and grow is a website for kids summertime. We help your kids to find their passion, take advantage of their vacation and develop their personality.<br> We give your kids the opportunity to learn different activities and acquire new skills by being able to start their training in many different fields like cooking, painting, fashion desgin, teaching, mechanical trainings and many others so your kid will try work environment under the supervision of us to ensure their safety. There are also recreational activities to enjoy their time.
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="imgs/" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end about section -->

  <!-- client section -->

  <!-- sponsors section -->

  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              OUR SPONSOR
            </h6>
          </div>
          <div class="img-box">
            <img src="imgs/opera.jpg" alt="">
          </div>
          <div class="name">
            <h5>
             Opera House
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              OUR SPONSOR
            </h6>
          </div>
          <div class="img-box">
            <img src="imgs/pizza.png" alt="">
          </div>
          <div class="name">
            <h5>
            Pizza Hut
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              OUR SPONSOR
            </h6>
          </div>
          <div class="img-box">
            <img src="imgs/ark.png" alt="">
          </div>
          <div class="name">
            <h5>
              Ark Animal Hospital
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- end sponsors section -->

  <!-- end client section -->

    <!--FOOTER WITH LOGO--->
    <footer class="footer-distributed">

      <div class="footer-left">
          <img src="imgs/1.png">


           <p class="footer-links">
           
            <a href="#">FAQs</a>
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
              <p>010 034 59846</p>
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



 
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>