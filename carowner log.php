<?php
session_start();
?>
<html>
<head>
<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="dd.css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php  //Start the Session
//session_id("session1");

 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `carowner` WHERE cname='$username' and pwd='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
header("Location:carowner login.php");
}
}

if($_SESSION['username'])
{


$username = $_SESSION['username'];
$result1 = mysqli_query($conn, "select * from `carowner` where 
`cname`= '$username'") or die("invalid");
if(mysqli_num_rows($result1)!=1)
{
	die("ufh");
}
while($row = mysqli_fetch_assoc($result1))
{
	$var1 = $row['cname'];
	$var2 = $row['cemail'];
	$var3 = $row['cdob'];
	$var4 = $row['cphno'];
	$var5 = $row['addr'];
	$var6 = $row['cfname'];
	$var7 = $row['clname'];
}
?>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label>Username</label>
            <input type="text" value=<?php echo $var1;?> class="input-xlarge">
            <label>First Name</label>
            <input type="text" value=<?php echo $var6;?> class="input-xlarge">
            <label>Last Name</label>
            <input type="text" value=<?php echo $var7;?> class="input-xlarge">
            <label>Email</label>
            <input type="text" value=<?php echo $var2;?> class="input-xlarge">
            <label>DOB</label>
             <input type="text" value=<?php echo $var3;?> class="input-xlarge">
            <label>Phone no</label>
            <input type="text" value=<?php echo $var4;?> class="input-xlarge">
            <label>Address</label>
            <textarea value=<?php echo $var5;?> rows="3" class="input-xlarge"><?php echo $var5;?>
            </textarea>
            
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

<a href="http://localhost/cars/view%20cars.php" class="bb">View Added Cars</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:90%;
    top:3%;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<a href="http://localhost/cars/carowner%20login.php" class="bbbb">Logout</a>
<style>
  a.bbbb{
    padding:10px 24px;
    position:relative;
    left:1200px;
    top:-570px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<a href="http://localhost/cars/add%20cars.php" class="bbb">Add cars</a>
<style>
  a.bbb{
    padding:10px 24px;
    position:relative;
    left:600px;
    top:2px;
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
