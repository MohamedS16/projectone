<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
  </script>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/faqs.css" />
  <link rel="stylesheet" href="css/new.css" />
  <title>FAQs</title>
  <link rel="icon" href="imgs/1.png" type="images/headlogo">
  <!--FAQs-->
  <script src="https://cdn.tailwindcss.com"></script>

  <style type="text/tailwindcss">
    @layer components {
          .card {
            @apply w-full h-full sm:w-[calc(50%-18px)] lg:w-[calc(33%-21px)] flex items-center flex-col gap-[15px];
          }
  
          .icon {
            @apply w-11 h-11 lg:w-12 lg:h-12 bg-gray-600 rounded-full flex items-center justify-center border-[6px] border-gray-700 border-solid;
          }
  
          .svg {
            @apply w-5 h-5 lg:w-6 lg:h-6;
          }
  
          .title {
            @apply text-lg md:text-xl text-center;
          }
  
          .description {
            @apply text-gray-200 text-center;
          }
        }
      </style>
</head>



<body>
<?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

  <!--Animated background-->

  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <!-------FAQs------->
  <div
    class="container mx-auto flex flex-col gap-[50px] sm:gap-[55px] md:gap-[60px] lg:gap-[70px] xl:gap-[75px] py-[30px] sm:py-[35px] md:py-[40px] lg:py-[45px] xl:py-[50px] px-[15px] sm:px-[30px] md:px-[45px] lg:px-[60px] xl:px-[75px]">
    <div class="top-bar flex flex-col gap-[30px] text-center">
      <span class="text-3xl md:text-4xl">Frequently asked questions</span>
      <p class="text-lg md:text-xl text-gray-200">
        Everything you need to know about the product and billing.
      </p>
    </div>

    <div
      class="cards flex flex-col sm:flex-row flex-wrap justify-center gap-y-[35px] sm:gap-y-[40px] md:gap-y-[45px] lg:gap-y-[50px] gap-x-[35px]">
      <div class="card">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
          </svg>
        </div>
        <div class="title">Is there a free trial available?</div>
        <div class="description">
          Yes, you can try us for free for 30 days. Our friendly team will
          work with you to get you up and running as soon as possible.
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
          </svg>
        </div>
        <div class="title">Can I change my plan later?</div>
        <div class="description">
          Of course. Our pricing scales with your company. Chat to our
          friendly team to find a solution that works for you.
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
          </svg>
        </div>
        <div class="title">What is your cancellation policy?</div>
        <div class="description">
          We understand that things change. You can cancel your plan at any
          time and we’ll refund you the difference already paid.
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>
        </div>
        <div class="title">Can other info be added to an invoice?</div>
        <div class="description">
          Yes, you can try us for free for 30 days. If you want, we’ll provide
          you with a free, personalized 30-minute onboarding call to get you
          up and running as soon as possible.
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
          </svg>
        </div>
        <div class="title">How does billing work?</div>
        <div class="description">
          Plans are per workspace, not per account. You can upgrade one
          workspace, and still have any number of free workspaces.
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
          </svg>
        </div>
        <div class="title">How do I change my account email?</div>
        <div class="description">
          You can change the email address associated with your account by
          going to untitled.com/account from a laptop or desktop.
        </div>
      </div>
    </div>

    <div
      class="bottom-bar bg-gray-700 py-8 px-7 rounded-2xl flex flex-col gap-[20px] text-center items-center justify-center">
      <span class="text-2xl">Still have questions?</span>
      <p class="text-gray-200">
        Can’t find the answer you’re looking for? Please chat to our friendly
        team.
      </p>
      <button
        class="py-3 px-7 w-fit border border-solid border-gray-300 rounded-lg bg-white text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition">
        Get in touch
      </button>
    </div>
  </div>


  <!--FOOTER WITH LOGO--->

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
         


</body>

</html>