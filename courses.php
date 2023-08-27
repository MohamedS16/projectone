<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/new.css" />
    <link rel="stylesheet" href="css/our%20courses.css" />
    <link rel="icon" href="imgs/1.png" type="images/headlogo">
    <title>Responsive Animated Navbar</title>
</head>

<body>
  
 <?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

	
    <div class="grid">
      <div class="grid-item">
        <div class="card">
            <img class="card-img" src="Cover-picture-1.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">cccccccc</h1>
            <p class="card-text">
              orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            </p>
            <a href="login.php"><button class="card-btn">See More <span>&rarr;</span></button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="download.jpg"
            alt=""
          />
          <div class="card-content">
            <h1 class="card-header">cccccccc</h1>
            <p class="card-text">
              orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            </p>
            <a href="login.php"><button class="card-btn">See More <span>&rarr;</span></button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="images.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">cccccccc</h1>
            <p class="card-text">
              orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            </p>
         <a href="login.php"><button class="card-btn">See More <span>&rarr;</span></button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="download.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">cccccccc</h1>
            <p class="card-text">
              orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            </p>
            <a href="login.php"><button class="card-btn">See More <span>&rarr;</span></button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="Cover-picture-1.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">cccccccc</h1>
            <p class="card-text">
              orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            </p>
            <a href="login.php"><button class="card-btn">See More <span>&rarr;</span></button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="images.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">cccccccc</h1>
            <p class="card-text">
              orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            </p>
           <a href="login.php"><button class="card-btn">See More <span>&rarr;</span></button></a>
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

  <script src="nav.js"></script>
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


</body>

</html>