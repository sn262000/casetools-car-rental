<!DOCTYPE html>
<head>
    <title> Chauffeur Login </title>
    <link rel="stylesheet" type="text/css" href="driver login style.css">   
</head>
    <body>

<a href="http://localhost/cars/get%20started.html" class="bb">BACK</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:1400px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
    <div class="login-box">
    <img src="speedcar.jpg" class="avatar" alt="HTML5 Icon">
        <h1>Login Here</h1>
            <form name="myform" action = "driver log.php" method="post" >
            <p>Username</p>
            <input type="text" required name="rusername" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" required name="rpassword" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="http://localhost/cars/driver%20signup.php">New User? Sign up now</a>
            
            </form>
        
        
        </div>
    
    </body>
</html>