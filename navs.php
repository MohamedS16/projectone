
<?php 

session_start();
    ?>
<section class="navbar <?php echo $navp ?>">
    <!--NAV BAR WITH LOGO AND DARK MODE-->
    <nav>
      <div class="logo">
          <img src="imgs/1.png" alt="Logo Image">
      </div>
      <div class="hamburger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
      </div>
      <ul class="nav-links">
      <?php   
                    if(!empty($_SESSION['sign'])){
                    if($_SESSION['sign'] == "True"){
                        echo '<p>'.$_SESSION['username'].'</p>';
                    } }
                    else{
                        echo ' ';
                    }
                    ?>
          <li><a href="home.php">Home</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li><a href="faqs.php">FAQs</a></li>
          
          
          <?php   
                        if(!empty($_SESSION['sign'])){
                        if($_SESSION['sign'] == "True"){
                            
                        } }
                     
                    ?>
            <li><a href="about.php">ABOUT US</a></li>
          
          
           
            <?php   
                    if(!empty($_SESSION['sign'])){
                    if($_SESSION['sign'] == "True"){
                        echo '<li class = "dropdown"><a href="#!">PROGRAMS</a>
        <ul class="nav-dropdown">
          <li><a href="internship.php">INTERNSHIPS</a></li>
          <li><a href="courses.php">COURSES</a></li>
        </ul>
      </li>       
                        <li class="flip-card"> <a href="edit_profile.php" ><img src="imgs/ss.jpg" alt="Avatar" width= 50 height= 50 >
          </a> </li>
                        <li><a  href="logoutback.php"><button class="join-button">Log Out</button></a></li>';
                        ;
                        
          
                    } }
                    else{
                        echo '  <li class = "dropdown"><a href="#!">PROGRAMS</a>
        <ul class="nav-dropdown">
          <li><a href="internship.php">INTERNSHIPS</a></li>
          <li><a href="courses.php">COURSES</a></li>
        </ul>
      </li>       
                              <li><a href="login.php">Login</a></li>
                             <li><a href="adminlogin.php">Admin</a></li>
                            <li><a href="signup.php"> Register</a></li>';
                    }
                    ?>
          <!-- DARK MODE-->
          <div class="mode">

              <span class="change">🌙</span>

          </div>

      </ul>

  </nav>
                </section>


 

  <!-- DARK MODE-->


 