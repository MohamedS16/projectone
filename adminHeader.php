
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5">
       
      <a class="navbar-brand ml-5" href="./indexx.php">
        <img src="./assets/images/logo.png" width="80" height="80">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      <a href="logoutback.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>
            <form method='post'>
              <input type='submit' value='logout' name='loglog' />
            </form>

            <?php 
              if(isset($_POST['loglog'])){
                session_abort();
                session_destroy();
                
                header('location:adminout.php');
              }
            ?>
    <div class="user-cart">  

    </div>  
</nav>
<style>
nav {

   
    background: linear-gradient(to right, #ff9900,
            #ffbe5b 50%);
   
}


</style>