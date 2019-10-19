<?php
include_once 'connect.php';
if(isset($_POST['save1']))
{ // Fetching variables of the form which travels in URL
	if (isset($_POST['uname'])){

	
	$uname = $_POST['uname'];
}
	$email = $_POST['email'];
	$datee=$_POST['datee'];
	$password=$_POST['password'];
	$phone= $_POST['phone'];
	$message = $_POST['message'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];

		$sql = "INSERT INTO carowner(cname,pwd,cemail,cdob,cphno,addr,cfname,clname) values ('$uname', '$password', '$email', '$datee', '$phone', '$message' , '$fname', '$lname')";
if(mysqli_query($conn,$sql)){	
	header('Location:http://localhost/cars/carowner%20login.html');
}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}

mysqli_close($conn); // Closing Connection with Server
}
?>