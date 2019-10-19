<?php
//session_id("session1");
session_start();
?>

<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="view cars style.css">
</head>

<body> 
<h1>CARS</h1>
<a href="http://localhost/cars/carowner%20log.php" class="bb">BACK</a>
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

$user = $_SESSION['username'];
$result2 = mysqli_query($conn,"SELECT regno,model,company,color,year1,from1,to1,fuel,seat,fee,type FROM owns natural join car where `cname`='$user'");

echo "<table class= 'rwd-table'>

<tr>

<th>Register no</th>
<th>Model</th>
<th>Company</th>
<th>Colour</th>
<th>Year of release</th>
<th>Available from</th>
<th>Available till</th>
<th>Fuel type</th>
<th>Seater</th>
<th>Fee per day</th>
<th>Type</th>
<th>Remove car<th>
</tr>";

 

while($row1 = mysqli_fetch_assoc($result2))

  {

  echo "<tr>";

  echo "<td>" . $row1['regno'] . "</td>";
  echo "<td>" . $row1['model'] . "</td>";
  echo "<td>" . $row1['company'] . "</td>";

echo "<td>" . $row1['color'] . "</td>";

echo "<td>" . $row1['year1'] . "</td>";

echo "<td>" . $row1['from1'] . "</td>";

echo "<td>" . $row1['to1'] . "</td>";

echo "<td>" . $row1['fuel'] . "</td>";
echo "<td>" . $row1['seat'] . "</td>";
echo "<td>" . $row1['fee'] . "</td>";
echo "<td>" . $row1['type'] . "</td>";
echo "<td>" . '<a href="remcar.php?drive=' . $row1['regno'] . '" style="color:yellow">Remove</a>' . "</td>";
  echo "</tr>";

  }
echo "</table>";
mysqli_close($conn);

?>

</body>

</html>