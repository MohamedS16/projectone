<?php
include ("book.php"); 
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
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/bookingcourses.css" />
    <title>BOOKING</title>
    <link rel="icon" href="images/headlogo.png" type="images/headlogo">
    
<script>
function ShowRadioButtonDiv (IdBaseName, NumberOfButtons) {
    for (x=1;x<=NumberOfButtons;x++) {
        CheckThisButton = IdBaseName + x;
        ThisDiv = IdBaseName + x +'Div';
    if (document.getElementById(CheckThisButton).checked) {
        document.getElementById(ThisDiv).style.display = "block";
        }
    else {
        document.getElementById(ThisDiv).style.display = "none";
        }
    }
    return false;
}
    </script>
</head>


<body>

    <!--NAV BAR WITH LOGO AND DARK MODE-->
     
<?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

    <!--Animated background-->
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <!--BOOKING FORM-->

    <div class="booking-form">
    <form method="post" action="book.php">
            <h2 class="b-heading">Booking Internship</h2>
        
            <div class="main-f">
                <div class="field-s form-text1">
                    <select class="form-control" name="internship">
                        <option>Selected Internship</option>
                        <option value="cooking">Cooking</option>
                        <option value="fashion design">Fashion Design</option>
                        <option value="Mechanic">Mechanic</option>
                        <option value="teaching">Teaching</option>
                    </select>
                </div>
                <div class="field-sp form-text2">
                    <select class="form-control" name="package">
                        <option>Package</option>
                        <option value="premium">Premium</option>
                        <option value="standard">Standard</option>
                    </select>
                </div>
            </div>

            <h3 class="b-heading">Personal Details</h3>
            <div class="main-f">
                <div class="field-s form-text1">
                    <input type="text" name="kidn" placeholder="Kid Name" required="">
                </div>
                <div class="field-s form-text1">
                    <input type="text" name="parentn" placeholder="Parent Username" required="">
                </div>
                <div class="field-spc form-text1">
                    <input type="number" name="phone" placeholder="Phone Number" required="">
                </div>
                
            </div>
            <div class="main-f">
            <div class="field-s form-text">
                    <input type="id" name="nid" placeholder="Parent National ID" required="">
                </div>
            <div class="field-s form-text">
                <input type="email" name="email" placeholder="Email" required="">
            </div>
            <div class="field-spc form-text">
                <input type="date" id="age" name="age" placeholder="Birth Date" required="">
            </div>
            </div>
        
            
            <INPUT TYPE="radio" NAME="RadioGroupName" ID="GroupName2" ONCLICK="ShowRadioButtonDiv('GroupName', 3)"/> Cash
<INPUT TYPE="radio" NAME="RadioGroupName" ID="GroupName1" ONCLICK="ShowRadioButtonDiv('GroupName', 3)"/>Visa



<div ID="GroupName1Div" STYLE="display:none;">
             <div class="card px-4">
                    <p class="h8 py-3">Payment Details</p>
                    <div class="main-f">
                <div class="field-s form-text1">
                    <input type="text" name="card_name" placeholder="Card holder name" required="">
                </div>
                <div class="field-s form-text1">
                    <input type="text" name="card_nm" placeholder="Card Number" required="">
                </div>
                    </div>
            </div>
            <div class="main-f">
                <div class="field-s form-text1">
                    <p class="text mb-1">Exp</p>
                   <input type="text"  name="exp" placeholder="
MM/YY" required="">
                </div>
                                
                <div class="field-s form-text1">
              
                                <p class="text mb-1">CVV/CVC</p>
                                <input type="password" name="pass" placeholder="****" required>
                           
                                </div>
                               
            </div>
            
        </div>
            <div class="radio-section">
                <h6>Gender</h6>
                <ul class="radio-buttons">
                    <li>
                        <input type="radio" id="male" value="male" name="gender">
                        <label for="a-option">Male</label>
                        <div class="check"></div>
                    </li>
                    <li>
                        <input type="radio" id="female" value="female" name="gender">
                        <label for="b-option">Female</label>
                        <div class="check">
                            <div class="inside"></div>
                        </div>
                    </li>
                </ul>
            </div>
        
            
            
              
        
        

    
          
        

            <div class="clear"></div>
            <input class="show-modal" type="submit" value="Submit" name="submit">
                <input type="reset" value="Clear Form">
              <div class="clear"></div>
            
           
        </form>
       
               
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