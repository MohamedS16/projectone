<?php 
include('connection.php');

$unerror = $passerror = $noacc = '';
if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
  
    $collect="SELECT * from users WHERE username='$username' AND password='$password'";
    
    $r=mysqli_query($con,$collect);
    $logg = mysqli_fetch_assoc($r);

    if(empty($logg)){
        $noacc = "Username Not Found";
    }
    elseif(!empty($logg)){
        $logname = $logg['username'];
        $logpass = $logg['password'];
        if($username !== $logname){
            $unerror = "Wrong Username";
        }
        elseif($password !== $logpass){
            $passerror = "Wrong Password";
        }
        elseif($username == $logname && $password == $logpass){
        header('location: loginform.php?username='.$username);
          
        }}}
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/loggin.css" />
  <title>Login</title>
  <link rel="icon" href="imgs/1.png" type="images/headlogo">

</head>

<body>
<?php
    $navp = 'navdefault';
    include('nav.php');
    ?>


  <!-------login-->
  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>
  <section class="container">
  <form method="post" action="login.php">
      <div class="title">Login</div>
      <?php  if($noacc == "Username Not Found"){echo '<p class="error">'.$noacc.'</p>';}else{}; ?>
        <div class="input-box">
        <input type="text" placeholder="Enter Your Password" name="username" required >
             <?php  if($unerror == "Wrong Username"){echo '<p class="error">'.$unerror.'</p>';}else{}; ?>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter Your Password" name="password" required value="<?php if(empty($password)){}else{echo $password;}; ?>">
                    <?php  if($passerror == "Wrong Password"){echo '<p class="error">'.$passerror.'</p>';}else{}; ?>
        <div class="underline"></div>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Login">

      </div>
      <a class="create-account-link" href="">Don't have an account? Sign up</a>
    </form>
  </section>
  <!--footer--->
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