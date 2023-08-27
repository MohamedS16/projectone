<?php 
include 'connection.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $feedback = mysqli_real_escape_string($con,$_POST['feedback']);

   
        $sql="INSERT INTO feedback (name,email,feedback) 
        VALUES('$name','$email','$feedback')";
        $enter=mysqli_query($con,$sql);
        $_SESSION['name']=$name;
        header('location:home.php');
     
    } 

?>