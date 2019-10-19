<?php  //Start the Session
session_start();
?>
<html>
<head>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="dd.css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</head>
<body>

<a class='bb' href='http://localhost/cars/customer%20sign%20in.php'>LOGOUT</a>
  
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:1400px;
    top:10px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    
}

</style>


<!--<a href="http://localhost/cars/home-slider.php" class="bbb" onclick="randomStringToInput(this)">Book a car
  </a>-->
   <section class='form'>
      <form action="bookingid.php" method="post" novalidate>
        <input class="bbb" type="submit" name="clickid" value="Book a car">
      </form>
    </section>
<style>
  input.bbb{
    padding:10px 24px;
    position:relative;
    left:10px;
    top:-30px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>


<?php
require('connect.php');
if($_SESSION['uname'])
  {
    $uname = $_SESSION['uname'];
    $result3 = mysqli_query($conn, "select * from `customer` where 
`uname`= '$uname'") or die("invalid");
    if(mysqli_num_rows($result3)!=1)
    {
      die("ufh");
    }
    while($row3= mysqli_fetch_assoc($result3))
    {
  $varr1 = $row3['uname'];
  $varr2 = $row3['emailid'];
  $varr3 = $row3['dob'];
  $varr4 = $row3['phno'];
  $varr5 = $row3['addr'];
  $varr6 = $row3['photo'];
  $varr7 = $row3['license'];
  $varr8 = $row3['fname'];
  $varr9 = $row3['lname'];
}
}
mysqli_close($conn);
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
      <li class="active"><a data-target="#home" data-toggle="tab">Profile</a></li>
      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab" method="post">
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
            <label>Username</label>
            <input type="text" value="<?php echo $varr1;?>" class="input-xlarge">
            <label>First Name</label>
            <input type="text" value="<?php echo $varr8;?>" class="input-xlarge">
            <label>Last Name</label>
            <input type="text" value="<?php echo $varr9;?>" class="input-xlarge">
            <label>Email</label>
            <input type="text" value="<?php echo $varr2;?>" class="input-xlarge">
            <label>DOB</label>
             <input type="text" value="<?php echo $varr3;?>" class="input-xlarge">
            <label>Phone no</label>
            <input type="text" value="<?php echo $varr4;?>" class="input-xlarge">
            <label>Address</label>
            <textarea value="<?php echo $varr5;?>" rows="3" class="input-xlarge"><?php echo $varr5;?>
            </textarea>
            
           
        </form>
      </div>
        	</div>
        </form>
    
  </div>






</body>
</html>
