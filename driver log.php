<?php
session_start();
?>
<html>
<head>
<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="dd1.css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
    body
{
    background: url(hell.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size:cover;
    -o-background-size:cover;
}
</style>

<?php  //Start the Session
//session_id("session1");

 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['rusername']) and isset($_POST['rpassword'])){
//3.1.1 Assigning posted values to variables.
$rusername = $_POST['rusername'];
$rpassword = $_POST['rpassword'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `driver` WHERE dname='$rusername' and dpwd='$rpassword'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['rusername'] = $rusername;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
header("Location:driver login.php");
}
}
if($_SESSION['rusername'])
{


$rusername = $_SESSION['rusername'];
$result1 = mysqli_query($conn, "select * from `driver` where 
`dname`= '$rusername'") or die("invalid");
if(mysqli_num_rows($result1)!=1)
{
	die("ufh");
}
while($row = mysqli_fetch_assoc($result1))
{
	$var1 = $row['dfname'];
	$var2 = $row['dlname'];
	$var3 = $row['dphno'];
	$var4 = $row['dfee'];
	$var5 = $row['exp'];
    $varr6 = $row['dphoto'];
	$var7 = $row['dname'];
    $var8 = $row['dphoto'];

}
?>
<div class="well">
    <style>
            .well{ 
    /*
    padding:50px;
    width:550px; 
    background-color:#fce0ae; 
    margin:20px auto; 
    border:1px dashed #AAA; 
    position:relative;*/
    background: rgba(0, 0, 0, 0.3);
    color: black;
    top: 50%;
    left: 50%;
    width:410px;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

    }
</style>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
        <form id="tab">
           <img src="data:image/jpeg;base64,<?php echo base64_encode($varr6); ?>" class=avatar alt="HTML5 icon"/>
           <style>
            .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    top: 1px;
    left:110px;
}
</style>

      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label style="color:white">Username</label>
            <input type="text" value=<?php echo $var7;?> class="input-xlarge">
            <label style="color:white">First Name</label>
            <input type="text" value=<?php echo $var1;?> class="input-xlarge">
            <label style="color:white">Last Name</label>
            <input type="text" value=<?php echo $var2;?> class="input-xlarge">
            <label style="color:white">Experience</label>
            <input type="text" value=<?php echo $var5;?> class="input-xlarge">
            <label style="color:white">Fee per hr</label>
             <input type="text" value=<?php echo $var4;?> class="input-xlarge">
            <label style="color:white">Phone no</label>
            <input type="text" value=<?php echo $var3;?> class="input-xlarge">
            <!--<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>-->
        </form>

      </div>
        	</div>
        </form>
      
  </div>
  <?php
}else die("Provide details");
?>

<a href="http://localhost/cars/view%20driver%20booking.php" class="bb">View Bookings</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:90px;
    top:10px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<a href="http://localhost/cars/driver%20login.php" class="bbbb">Logout</a>
<style>
  a.bbbb{
    padding:10px 24px;
    position:relative;
    left:650px;
    top:-590px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>

</body>
</html>
