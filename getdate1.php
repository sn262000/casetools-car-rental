<?php
session_start();
include_once 'connect.php';
if(isset($_POST['ready']))
{ // Fetching variables of the form which travels in URL
	if (isset($_POST['city'])){
$_SESSION['city']= $_POST['city'];

}
$fdate=$_POST['fdate'];
$_SESSION['fdate'] = $fdate;  



mysqli_close($conn); // Closing Connection with Server
}
?>