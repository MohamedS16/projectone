<?php
include('connection.php');




$username = $_GET['username'];

session_start();
$logg = $_SESSION['login'] = "True";
$username = $_SESSION['username'] = $username ;

header('location: home.php')


?>

