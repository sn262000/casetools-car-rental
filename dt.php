<?php
session_start();
include_once 'connect.php';
  $d= $_SESSION['d'];
  $user = $_SESSION['uname'];
  $n = $_SESSION['n'];
 date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i:s');
  $tid= uniqid();

    $sql = "INSERT INTO payment VALUES ('$tid','$date','$n','$time')";
    $sql1 = "INSERT INTO makepay VALUES ('$user','$tid','$d')";
   // $sql = "INSERT INTO choosedriver values ('$user','$dn','$d')";
    
if(mysqli_query($conn,$sql))
{ 

if(mysqli_query($conn,$sql1))
{ 
header('Location:http://localhost/cars/payment%20portal.html');


}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
}
mysqli_close($conn); // Closing Connection with Server

?>