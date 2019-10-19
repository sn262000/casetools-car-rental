<?php
session_start();
include_once 'connect.php';
	$dr=$_GET['drive'];
   //$d= $_SESSION['d'];
  //$user = $_SESSION['uname'];
    
    $sql = "DELETE FROM owns WHERE regno='$dr'";
    $sql1 = "DELETE FROM car WHERE regno='$dr'";
    

if(mysqli_query($conn,$sql))
{ 
	if(mysqli_query($conn,$sql1))
{
header('Location:http://localhost/cars/carowner%20log.php');
}
}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
mysqli_close($conn); // Closing Connection with Server

?>