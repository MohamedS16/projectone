<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $CategoryName = $_POST['pandel_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO pandel
         (pandel_name) 
         VALUES ('$CategoryName')");
 
    if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>