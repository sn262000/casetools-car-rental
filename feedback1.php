<?php
session_start();
include_once 'connect.php';
   if(isset($_GET['submit'])){
     // means submit clicked!

     $query = $_GET['tarea'];
     echo $query;
    $d = $_SESSION['d'];

      // check the values of $_GET array..
   
 

   // $sql = "UPDATE booking SET fb='$query' WHERE bid='$d' and fb IS NULL";
    $sql = "INSERT INTO booking(fb) VALUES '$query' WHERE bid='$d'";

if(mysqli_query($conn,$sql))
{ 
header('http://localhost/cars/booking%20display.php');

}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}
mysqli_close($conn); // Closing Connection with Server
}
?>