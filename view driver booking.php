<?php
//session_id("session1");
session_start();
?>

<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="view driver booking style.css">
</head>

<body> 
<h1>PREVIOUS  BOOKINGS</h1>
<a href="http://localhost/cars/driver%20log.php" class="bb">BACK</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:1000px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<?php


 require('connect.php');

if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }


$rusername = $_SESSION['rusername'];
//$result2 = mysqli_query($conn,"SELECT bid FROM choosedriver where `dname`='$rusername'");
$result3 = mysqli_query($conn,"SELECT bid,fname,addr FROM customer natural join choosedriver where `dname`='$rusername'") or die( mysqli_error($conn));
echo "<table class= 'rwd-table'>

<tr>

<th>Booking id</th>
<th>Customer name</th>
<th>Customer Address</th>
</tr>";

 

/*while($row1 = mysqli_fetch_assoc($result2))

  {

  echo "<tr>";

  echo "<td>" . $row1['bid'] . "</td>";
  
  echo "</tr>";

  }*/
  while($row2 = mysqli_fetch_assoc($result3))

  {

  echo "<tr>";
  echo "<td>" . $row2['bid'] . "</td>";
  echo "<td>" . $row2['fname'] . "</td>";
  echo "<td>" . $row2['addr'] . "</td>";
  
  echo "</tr>";

  }
echo "</table>";
mysqli_close($conn);

?>

</body>

</html>