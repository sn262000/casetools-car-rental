<?php
//session_id("session1");
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="repair choose style.css">

<head>
  <title>Choose your Mechie</title>
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
<h1>Available Mechanic</h1>
<?php


 require('connect.php');

if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }


$result5 = mysqli_query($conn,"SELECT * FROM repair");

echo "<table class= 'rwd-table' >

<tr>
<th>Shopname</th>
<th>Address</th>
<th>Phone no</th>
<th>Area</th>
</tr>";



while($row5 = mysqli_fetch_assoc($result5))
    
  {
    $varr2 = $row5['rname'];
    echo "<tr>";
      echo "<td>" . $row5['shopname'] . "</td>";
      echo "<td>" . $row5['raddr'] . "</td>";
      echo "<td>" . $row5['rphno'] . "</td>";
      echo "<td>" . $row5['area'] . "</td>";
      echo "<td>" . '<a href="repairid.php?repair=' . $varr2 . '" style="color:yellow">BOOK</a>' . "</td>";
      echo "</tr>";

  }
  echo "</table>";
  

?>


</body>
</html>