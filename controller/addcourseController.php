<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['course_name'];
        $desc= $_POST['course_desc'];
        $price = $_POST['price'];
        $pandel = intval($_POST['pandel']);
       
            
   

        $insert = mysqli_query($conn,"INSERT INTO `course`
        (`pandel_id`,`course_name`,`price`,`course_desc`) 
        VALUES ($pandel,'$ProductName',$price,'$desc')");

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