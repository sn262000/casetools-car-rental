<?php
session_start();
include_once 'connect.php';
	$dn=$_GET['drive'];
   $d= $_SESSION['d'];
  $user = $_SESSION['uname'];

    $sql = "INSERT INTO choosedriver values ('$user','$dn','$d')";
    

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