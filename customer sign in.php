<?php
session_start();
?>
<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<head>
<title>Log in</title>
    <link rel="stylesheet" type="text/css" href="customer sign in style.css">
    <script type="text/javascript" src="js.js"></script>
<body>


    <?php  //Start the Session
//session_id("session1");
require('connect.php');
$error = "username/password incorrect";
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['njk']))
{
//3.1.1 Assigning posted values to variables.
    $uname = $_POST['uname'];
    $upswd = $_POST['upswd'];
//3.1.2 Checking the values are existing in the database or not
    $query = "SELECT * FROM `customer` WHERE uname='$uname' and pwd='$upswd'";
 
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    while($row9=mysqli_fetch_assoc($result))  
    {  
        $dbusername=$row9['uname'];  
        $dbpassword=$row9['pwd'];  
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
    if($uname == $dbusername && $upswd == $dbpassword) {
        $_SESSION['uname'] = $uname;
        header("Location:custlogin.php");
    }
    else
    {
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
   

        
    }
    }
}   
mysqli_close($conn);
?>
    
<a class='btn github' href='http://localhost/cars/get%20started.html'>BACK</a>

<style>
    a{ text-decoration:none; }
.btn{ margin:5px; font-size:1.3em; font-weight:bold; border:2px solid rgba(0,0,0,0.2); display:inline-block; box-shadow:0 -30px 30px -15px #00329B inset, 0 1px 0 rgba(255,255,255,0.3) inset; background:#0088CC; background-repeat:repeat-x; color:#FFF; text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25); border-radius:7px; padding:10px 20px; -webkit-transition:0.15s; transition:0.15s; }
.btn:hover{ background:#0068BA; }
.btn:active{ box-shadow:0 0 0 0 rgba(0, 0, 0, 0.3), 0 -30px 30px -15px #00329B inset, 0 0 6px #00243F inset; }
.btn.github{ float:right; }
  
}
</style>

    <div class="box">
        <style>
            .box{
    background: rgba(0, 0, 0, 0.5);
    color: black;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
</style>
    <img src="user.png" class="user">
        <h1>Login Here</h1>

        <form name="myform" action = "customer sign in.php" method="post" >

            <p>Username</p>
            <input type="text" required name="uname" placeholder="Enter Username">

            <p>Password</p>
            <input type="password" required name="upswd" placeholder="Enter Password">

             <div id="errorBox"></div>
            <input type="submit" name="njk" value="Login">
            

            <br><br>
            <a href="http://localhost/cars/customer signup.php">Register for a new account ?</a>
        </form>


        
    </div>

</body>
</head>
</html>

