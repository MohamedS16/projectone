<?php

    include_once "../config/dbconnect.php";
   
    $id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT book_status from interns where id='$id'"; 
    $result=$conn-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
   // echo $row["pay_status"];
    
    if($row["book_status"]==0){
         $update = mysqli_query($conn,"UPDATE interns SET book_status=1 where id='$id'");
    }
    else if($row["book_status"]==1){
         $update = mysqli_query($conn,"UPDATE interns SET book_status=0 where id='$id'");
    }
    
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>