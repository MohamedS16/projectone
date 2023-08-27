    <?php 
include 'connection.php';

$errors = array(); 

if(isset($_POST['submit'])){
    $internship = mysqli_real_escape_string($con,$_POST['internship']);
    $package = mysqli_real_escape_string($con,$_POST['package']);
    $kidn = mysqli_real_escape_string($con,$_POST['kidn']);
    $parentn = mysqli_real_escape_string($con,$_POST['parentn']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $nid = mysqli_real_escape_string($con,$_POST['nid']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $age = mysqli_real_escape_string($con,$_POST['age']);
    $card_name = mysqli_real_escape_string($con,$_POST['card_name']);
    $card_nm = mysqli_real_escape_string($con,$_POST['card_nm']);
    $exp = mysqli_real_escape_string($con,$_POST['exp']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);

    $date=date("1/1/2001");
    $ee="succ";
   

if ($age <= $date) {
    echo "wrong age";
}  else {
    

    
        $sql="INSERT INTO interns (internship,package,kidn,parentn,phone,nid,email,age,card_name,card_nm,exp,pass) 
        VALUES('$internship','$package','$kidn','$parentn','$phone','$nid','$email','$age','$card_name','$card_nm','$exp','$pass')";
        $enter=mysqli_query($con,$sql);
      
    header("location:");
    } 
}
 ?>