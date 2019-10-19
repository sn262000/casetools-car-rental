<?php
session_start();
include_once 'connect.php';
	$rn=$_GET['repair'];
   $d= $_SESSION['d'];
  $user = $_SESSION['uname'];

    $sql = "INSERT INTO chooserepair values ('$user','$rn','$d')";
    

if(mysqli_query($conn,$sql))
{ 
header('Location:http://localhost/cars/home-slider.php');

}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
mysqli_close($conn); // Closing Connection with Server

?>