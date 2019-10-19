<?php
include_once 'connect.php';
if(isset($_POST['savee']))
{ // Fetching variables of the form which travels in URL
	if (isset($_POST['dname'])){

	
	$dname = $_POST['dname'];
}
	$exp = $_POST['exp'];
	$password=$_POST['password'];
	$phone= $_POST['phone'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$fee = $_POST['fee'];
	$license = $_POST['license'];
	$photo = $_POST['photo'];


		$sql = "INSERT INTO driver values ('$dname', '$password', '$exp', '$license', '$photo', '$fee' , '$phone' , '$fname', '$lname','1')";
if(mysqli_query($conn,$sql)){	
	header('http://localhost/cars/driver%20login.html');
}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}

mysqli_close($conn); // Closing Connection with Server
}
?>