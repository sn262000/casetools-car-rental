<?php
session_start();
include_once 'connect.php';
   if(isset($_POST['sub'])){
     // means submit clicked!

     $name = $_POST['q1'];
     $mail = $_POST['q2'];
     $phh = $_POST['q3'];
     if (isset($_POST['q4'])) {
    // Escape any html characters
     $te = $_POST['q4'];
}

      // check the values of $_GET array..
   
 

   // $sql = "UPDATE booking SET fb='$query' WHERE bid='$d' and fb IS NULL";
    $sql = "INSERT INTO `feedback`(`name`, `emailid`, `phh`, `fb`) VALUES ('$name','$mail','$phh','$te')";

if(mysqli_query($conn,$sql))
{ 
header('Location:http://localhost/cars/get%20started.html');

}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
mysqli_close($conn); // Closing Connection with Server
}
?>