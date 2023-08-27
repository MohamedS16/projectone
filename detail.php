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
    <link rel="stylesheet" href="css/detail.css">
    <title>Courses Details</title>
    <link rel="icon" href="imgs/1.png" type="imgs/1.png">
</head>
<body>
<?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

	
    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                    <img src="imgs/22.jpg">
                </div>
                
            </div>
            <div class="basic-info">
                <h1>IT</h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <span>$5000</span>
                <div class="options">
                    <a href="#">supscripe</a>
                    <a href="#">supscripe</a>
                </div>
            </div>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Unsupported Feature</li>
                </ul>
                
            </div>
        </div>
    </div>
     <div class="pricing-table">

   
    <div class="pricing-card">
      <h3 class="pricing-card-header">Premium</h3>
      <div class="price"><sup>$</sup>50<span>/MO</span></div>
      <ul>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Email</li>
        <li><strong>40</strong> Websites</li>
      </ul>
      <a href="#" class="order-btn">Book Now</a>
    </div>

    <div class="pricing-card">
      <h3 class="pricing-card-header">Ultimate</h3>
      <div class="price"><sup>$</sup>80<span>/MO</span></div>
      <ul>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Websites</li>
        <li><strong>40</strong> Websites</li>
      </ul>
      <a href="#" class="order-btn">Book Now</a>
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
</body>
</html>