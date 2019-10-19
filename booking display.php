

<?php  //Start the Session
session_start();
error_reporting(0);
?>
<html>
<head>
<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">-->
<link rel="stylesheet" type="text/css" href="dd.css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <!--<a href="http://localhost/cars/payment%20portal.html" class="bb">PAYMENT</a>-->
    <a href="dt.php" class="bb">PAYMENT</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:1300px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>

<a href="http://localhost/cars/home-slider.php" class="bbb">BACK</a>
<style>
  a.bbb{
    padding:10px 24px;
    position:relative;
    left:1300px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
<?php  //Start the Session
//session_id("session1");
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
$d=$_SESSION['d'];
$query = "SELECT bid,regno FROM `booking` WHERE bid='$d'";
$query1 = "SELECT dfname,dname from driver natural join choosedriver WHERE bid='$d'";
$query2 = "SELECT shopname from repair natural join chooserepair where bid='$d'"; 

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.


while($row3= mysqli_fetch_assoc($result))
{
    $varr1 = $row3['bid'];
    $varr2 = $row3['regno'];
    
}
$query3 = "UPDATE car SET status='0' where regno='$varr2'";

while($row1= mysqli_fetch_assoc($result1))
{
    $varr3 = $row1['dfname'];
    $varr7 = $row1['dname'];
        
}
$query4 = "UPDATE driver SET available='0' where dname='$varr7'";
$result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
$result4 = mysqli_query($conn, $query4) or die(mysqli_error($conn));
while($row2= mysqli_fetch_assoc($result2))
{
    $varr4 = $row2['shopname'];
   
    
}
$query3 = "SELECT fee FROM car where regno='$varr2'";
$query4 = "SELECT dfee FROM driver where dname='$varr7'";

$result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
$result4 = mysqli_query($conn, $query4) or die(mysqli_error($conn));
while($row3= mysqli_fetch_assoc($result3))
{
    $varr8 = $row3['fee'];

        
}
while($row4= mysqli_fetch_assoc($result4))
{
    $varr9 = $row4['dfee'];
   
    
}




$varr5 = $_SESSION['fdate'];
$varr6 = $_SESSION['ldate'];

$datetime1 = strtotime($varr5);
$datetime2 = strtotime($varr6);

$secs = $datetime2 - $datetime1;// == <seconds between the two times>
$days = $secs / 86400;
 $n = $days * $varr8 + $days * $varr9;
$_SESSION['n'] = $n;


?>
<div class="well">
    <style>
        .well{
            position:relative;
            top: 60px;
            left: 20px;
        }
    </style>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Booking summary</a></li>
      <!--<li><a href="#profile" data-toggle="tab">Password</a></li>-->
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form  id="tab">
        
            <label>Booking id</label>
            <input type="text" value="<?php echo $varr1;?>" class="input-xlarge">
            <label>Car registration no</label>
            <input type="text" value="<?php echo $varr2;?>" class="input-xlarge">
            <label>Driver</label>
            <input type="text" value="<?php echo $varr3;?>"class="input-xlarge">
            <label>Repair</label>
            <input type="text" value="<?php echo $varr4;?>" class="input-xlarge">
            <label>From</label>
            <input type="text" value="<?php echo $varr5;?>" class="input-xlarge">
            <label>Till</label>
            <input type="text" value="<?php echo $varr6;?>" class="input-xlarge">
            <label>Total fee</label>
            <input type="text" value="<?php echo $n;?>" class="input-xlarge">         
            <!--<label><span>Enter your feedback:</span></label>
            <textarea required name='tarea'></textarea>
            echo "<td>" . '<a href="driverid.php?drive=' . $varr1 . '">BOOK</a>' . "</td>";-->
               

               

         
           <!-- <div>
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
?>





</body>
</html>
