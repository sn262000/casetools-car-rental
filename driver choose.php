<?php
//session_id("session1");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<!--<link rel="stylesheet" type="text/css" href="driver choose style.css">-->
<link rel="stylesheet" type="text/css" href="driver choose style1.css">
<head>
  <title>Choose your Chauffeur</title>
</head>
<body>

<a href="http://localhost/cars/home-slider.php" class="bb">BACK</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:1300px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<h1>Available drivers</h1>
<?php


 require('connect.php');

if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }
  ?>

<section class='form'>
      <form action="booking display.php" method="post" novalidate>

<?php $result4 = mysqli_query($conn,"SELECT * FROM driver where `available`=1");

echo "<table class= 'rwd-table' >

<tr>
<th>First name</th>
<th>Experience</th>
<th>Fee per day</th>
<th>Phone no.</th>

</tr>";

 

while($row4 = mysqli_fetch_assoc($result4))
    
  {
    
    $varr1 = $row4['dname'];
    echo "<tr>";
      echo "<td>" . $row4['dfname'] . "</td>";
      echo "<td>" . $row4['exp'] . "</td>";
      echo "<td>" . $row4['dfee'] . "</td>";
      echo "<td>" . $row4['dphno'] . "</td>";
      echo "<td>" . '<a href="driverid.php?drive=' . $varr1 . '" style="color:yellow">BOOK</a>' . "</td>";
      echo "</tr>";

  }
  echo "</table>";
  

?>


</body>
</html>
