<?php 

session_start();
if (!isset($_SESSION['username'])){
    header("Location:login/login.php");
}

$con = mysqli_connect("localhost","root","","db_mydiary");

if(!$con){
    echo "Database tidak di temukan";   
}

?>