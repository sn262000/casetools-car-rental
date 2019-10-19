<?php
session_start();
?>
<html>
<head>
<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">-->
<link rel="stylesheet" type="text/css" href="ddr.css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <style>
        body
{
    background: url(repair3.jpg) no-repeat center center fixed;
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
if (isset($_POST['rname']) and isset($_POST['rpwd'])){
//3.1.1 Assigning posted values to variables.
$rn = $_POST['rname'];
$rpwd = $_POST['rpwd'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `repair` WHERE rname='$rn' and rpwd='$rpwd'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['rname'] = $rn;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
header("Location:repair login.php");
}
}
//3.1.4 if the user is logged in Greets the user with message
/*if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='custlogout.php'>Logout</a>";
 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
}*/
if($_SESSION['rname'])
{


$rname = $_SESSION['rname'];
$result1 = mysqli_query($conn, "select * from `repair` where 
`rname`= '$rname'") or die("invalid");
if(mysqli_num_rows($result1)!=1)
{
	die("ufh");
}
while($row = mysqli_fetch_assoc($result1))
{

	$var1 = $row['rname'];
	$var2 = $row['area'];
	$var3 = $row['raddr'];
	$var4 = $row['shopname'];
	$var5 = $row['rphno'];
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
    <!--  <li><a href="#profile" data-toggle="tab">Password</a></li>-->
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label style="color:white">Username</label>
            <input type="text" value="<?php echo $var1;?>" class="input-xlarge">
            <label style="color:white">Shop Name</label>
            <input type="text" value="<?php echo $var4;?>" class="input-xlarge">
            <label style="color:white">Location</label>
            <input type="text" value="<?php echo $var2;?>" class="input-xlarge">
             <label style="color:white">Address</label>
            <input type="text" value="<?php echo $var3;?>" class="input-xlarge">

            <label style="color:white">Phone no</label>
            <input type="tel" value="<?php echo $var5;?>" class="input-xlarge">
           
            <!--<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>-->
        </form>
      </div>
        	</div>
        </form>
      </div>
      <!--<div class="tab-pane fade" id="profile">
    	<form id="tab2">
        	<label>New Password</label>
        	<input type="password" class="input-xlarge">
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>-->
  </div>
<?php
}else die("Provide details");
?>

<a href="http://localhost/cars/view%20repair%20booking.php" class="bb">View Bookings</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:700px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<a href="http://localhost/cars/repair%20login.php" class="bbbb">Logout</a>
<style>
  a.bbbb{
    padding:10px 24px;
    position:relative;
    left:1200px;
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
