<?php
session_start();
include_once 'connect.php';
	$cn=$_GET['carid'];
   $d= $_SESSION['d'];
  $user = $_SESSION['uname'];

    $sql = "UPDATE booking set regno='$cn' where bid='$d'";
   // $sql = "INSERT INTO choosedriver values ('$user','$dn','$d')";
    

if(mysqli_query($conn,$sql))
{ 
header('Location:http://localhost/cars/booking%20display.php');

}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
mysqli_close($conn); // Closing Connection with Server

?>