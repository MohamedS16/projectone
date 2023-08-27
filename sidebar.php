<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>
<br>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./indexx.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#Customers"  onclick="showCustomers()" ><i class="fa fa-list"></i> Customers</a>
    <a href="#Pandels"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Pandels</a> 
  <a href="#Courses"   onclick="showProductItems()" ><i class="fa fa-th"></i> Courses</a>
    <a href="#Booking" onclick="showOrders()"><i class="fa fa-list"></i> Booking</a>
     <a href="#Size"   onclick="showSizes()" ><i class="fa fa-th"></i> Feedbacks</a>
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>

<style>
.sidebar {

   
    background: linear-gradient(to right, #ff9900,
            #ffbe5b 50%);
   
}
    </style>