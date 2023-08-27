<?php
    include_once "../config/dbconnect.php";
// $qry=mysqli_query($conn, "SELECT * FROM course,pandel  WHERE course.pandel_id=pandel.pandel_id");
// 	$numberOfRow = mysqli_num_rows($qry);
// 	if($numberOfRow>0){
		
    $course_id=intval($_POST['course_id']);
    $ProductName= $_POST['course_name'];
    $desc= $_POST['course_desc'];
    $price= intval($_POST['price']);
    $category= intval($_POST['pandel_id']);
        
    $qqr = "UPDATE `course` SET 
    `pandel_id`= $category,
    `price`=$price,
    `course_name`='$ProductName', 
    `course_desc`='$desc', 
    WHERE `course_id` = 19 ";

$quer = "UPDATE `course` SET `pandel_id` = $category , `price` = $price , `course_name` = '$ProductName' , `course_desc` = '$desc' WHERE `course_id` = $course_id ";

    $updateItem = mysqli_query($conn,$quer);



    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
    // }
?>