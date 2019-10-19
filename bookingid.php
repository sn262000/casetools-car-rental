
<?php
session_start();
include_once 'connect.php';
if(isset($_POST['clickid'])){
  $bid= uniqid();
   $_SESSION['d']= $bid;
   
  $user = $_SESSION['uname'];

    $sql = "INSERT INTO booking(bid,uname,regno) values ('$bid','$user','TN31BC5711')";
    

if(mysqli_query($conn,$sql))
{ 
header('Location:http://localhost/cars/home-slider.php');

}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
mysqli_close($conn); // Closing Connection with Server
}
?>