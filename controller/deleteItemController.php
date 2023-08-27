<?php

    include_once "../config/dbconnect.php";
    
    $course_id=$_POST['record'];
    $query="DELETE FROM course where course_id='$course_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Product Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>