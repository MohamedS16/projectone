<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
     <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="detail.css">
   
    <title>Course Details</title>
    <link rel="icon" href="imgs/1.png" type="imgs/1.png">
    <link rel="icon" href="images/headlogo.png" type="images/headlogo">
</head>
<body>
<?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

	<!--NAV BAR WITH LOGO AND DARK MODE-->

  <!--Animated background-->

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
   
    <div class="containerr">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                    <img src="imgs/22.jpg">
                </div>
                
            </div>
            <div class="basic-info">
                <h1>Softskills Course </h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    
                </div>
                <span>3000 EGP</span>
                <a href="#" class="order-btn">Book Now</a>
               
            </div>
            <div class="description">
                <p>Soft skills are skills related to human behavior, and directed to emotional and social issues, improving the personality of each individual. By working on soft skills in the education of children from the early grades.  Top soft skills that you can learn with us  are teamwork, attention to detail, time management, organization, verbal and written communication, leadership, emotional intelligence, adaptability/flexibility, problem-solving/conflict resolution, and interpersonal skills
                    </p>
                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>They can learn to interact with others in a proactive
                    </li>
                    <li><i class="fa-solid fa-circle-check"></i>Learn teamwork skills
                    </li>
                    <li><i class="fa-solid fa-circle-check"></i>Learn attention to detail
                    </li>
                </ul>
                
            </div>
        </div>
    </div>

<head>
  

    <script src="js/comments.js"></script>
        </head>
    
      <div class="container">		
        <h2> Review System </h2>		
        <br>		
        <form method="POST" id="commentForm">
             
          <div class="input-box">
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
          </div>
          <div class="input-box">
            <input name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required>
          </div>
          <span id="message"></span>
          <br>
          <div class="input-box button">
            <input type="hidden" name="commentId" id="commentId" value="0" />
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
          </div>
        </form>		
        <br>
        <div id="showComments"></div>   
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
</body>
</html>