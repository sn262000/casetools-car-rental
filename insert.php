<?php
include_once 'connect.php';
if(isset($_POST['save']))
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

		$sql = "INSERT INTO customer(uname,pwd,emailid,dob,phno,addr,fname,lname) values ('$uname', '$password', '$email', '$datee', '$phone', '$message' , '$fname', '$lname')";
if(mysqli_query($conn,$sql)){	
echo "New record created successfully!";
}
else{
echo "Error:" .$sql."
".mysqli_error($conn);
}

mysqli_close($conn); // Closing Connection with Server
}
?>