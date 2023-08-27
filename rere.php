
<?php 
include 'connection.php';


if(isset($_POST['login'])){

    $adminname = mysqli_real_escape_string($con,$_POST['adminname']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $collect="SELECT * from admin WHERE adminname='$adminname' AND password='$password'";

    $r=mysqli_query($con,$collect);
    
    if(mysqli_num_rows($r) == 1){
        $_SESSION['adminname']=$adminname;
        header('location:indexx.php');
         echo"Dear, " .$_SESSION['adminname'];
    }
    else{
        echo "Wrong Data";
    }
}
?>