<?php
include_once 'connect.php';
if(isset($_POST['saver']))
{ // Fetching variables of the form which travels in URL
	if (isset($_POST['rname'])){

	
	$rname = $_POST['rname'];
}
	$hone = $_POST['hone'];
	$sname = $_POST['sname'];
	$password=$_POST['password'];
	
	$area=$_POST['area'];
	$raddr=$_POST['raddr'];
	


		$sql = "INSERT INTO repair(rname,rpwd,area,raddr,shopname,rphno) values ('$rname', '$password', '$area', '$raddr', '$sname','$hone')";
if(mysqli_query($conn,$sql)){	
	header('Location:http://localhost/cars/repair%20login.php');
}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}

mysqli_close($conn); // Closing Connection with Server
}
?>