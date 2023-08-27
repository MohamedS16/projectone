<?php

    include_once "../config/dbconnect.php";
    
    $pandel_id=$_POST['record'];
    $query="DELETE FROM pandel where pandel_id='$pandel_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Category Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>