<?php
// Database connection
include("connection.php");



if (isset($_GET['message']) && $_GET['message'] === 'success') {
    echo "<p class='success-message'>Profile updated successfully!</p>";
}

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/editprofile.css" />
  <title>Login</title>
  <link rel="icon" href="images/headlogo.png" type="images/headlogo">

</head>

<body>

  <!--NAV BAR WITH LOGO AND DARK MODE-->
 
  <!--Animated background-->

  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <!-------profile------->
  <?php include('nav.php') ?>
  <section class="container">
    <form method="POST" action="edit_profile.php?username=<?php echo $username ?>">

      <div class="title">Edit Profile</div>

      <?php

        // Retrieve user information from the database
        
        $logg = $_SESSION['login'] = "True";
      
       $username = $_SESSION['username'];

        
        $query = "SELECT fullname, username, email, phone, password,id FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $query);
        $user = mysqli_fetch_array($result);
?>
        <?php
        // Update user information
        if (isset($_POST['submit'])) {
             $username = $_GET['username'];
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $userId = $user['id'];

            // update the user information
            $updateQuery = "UPDATE users SET fullname = '$fullname', username = '$username', email = '$email', phone = '$phone', password = '$password', confirmpass = '$password' WHERE id = '$userId'";
            $updateResult = mysqli_query($con, $updateQuery);

            if ($updateResult) {
                // save new Username to session
                $_SESSION['username'] = $username;
                // Redirect to the profile page with success message 
                header("Location:edit_profile.php?message=success");
            }
        }

        ?>
      <div class="input-box underline">
        <input type="text" id="fullname" name="fullname" placeholder="Name" value="<?php echo $user['fullname']; ?>" required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username"  id="username" name="username" value="<?php echo $user['username']; ?>" required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Email" id="email" name="email" value="<?php echo $user['email']; ?>"required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Number" id="phone" name="phone" value="<?php echo $user['phone']; ?>"required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter Your Password" id="password" name="password" value="<?php echo $user['password']; ?>"required>
        <div class="underline"></div>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Save Changes">
      </div>
    </form>
  </section>
  
  <!--FOOTER WITH LOGO--->

  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="images/logo.lnk">


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