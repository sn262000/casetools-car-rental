<?php
session_start();
include_once 'connect.php';
if(isset($_POST['save1']))
{ // Fetching variables of the form which travels in URL
	if (isset($_POST['regno'])){

	
	$regno = $_POST['regno'];
}
	$fuel = $_POST['fuel'];
	$seater=$_POST['seater'];
	$company=$_POST['company'];
	$colour= $_POST['colour'];
	$rc = $_POST['rc'];
	$fdate=$_POST['fdate'];
	$tdate=$_POST['tdate'];
	$type1=$_POST['type1'];
	$year=$_POST['year'];
	$fee=$_POST['fee'];
	$insurance=$_POST['insurance'];
	$model=$_POST['model'];
	$user = $_SESSION['username'];

		$sql = "INSERT INTO car(regno,model,company,color,year1,from1,to1,fuel,seat,rc,insurance,fee,type) values ('$regno', '$model', '$company', '$colour', '$year', '$fdate' , '$tdate', '$fuel','$seater','$rc','$insurance','$fee','$type1')";
		$sql1 = "INSERT INTO owns values ('$regno','$user')";
if(mysqli_query($conn,$sql))
{	
if(mysqli_query($conn,$sql1))
{	
header('Location:http://localhost/cars/carowner%20log.php');
}
else{
echo "Error:" .$sql1."
".mysqli_error($conn);
}
}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}




mysqli_close($conn); // Closing Connection with Server
}
?>