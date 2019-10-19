<!DOCTYPE html>
<head>
    <title> Carowner Login </title>
    <link rel="stylesheet" type="text/css" href="carowner style.css">   
</head>
    <body>


<a class='btn github' href='http://localhost/cars/get%20started.html'>BACK</a>
<style>
    a{ text-decoration:none; }
.btn{ margin:5px; font-size:1.3em; font-weight:bold; border:2px solid rgba(0,0,0,0.2); display:inline-block; box-shadow:0 -30px 30px -15px #00329B inset, 0 1px 0 rgba(255,255,255,0.3) inset; background:#0088CC; background-repeat:repeat-x; color:#FFF; text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25); border-radius:7px; padding:10px 20px; -webkit-transition:0.15s; transition:0.15s; }
.btn:hover{ background:#0068BA; }
.btn:active{ box-shadow:0 0 0 0 rgba(0, 0, 0, 0.3), 0 -30px 30px -15px #00329B inset, 0 0 6px #00243F inset; }
.btn.github{ float:right; }
  
}
</style>

    <div class="login-box">
    <img src="speedcar.jpg" class="avatar" alt="HTML5 Icon">
        <h1>Login Here</h1>
            <form name="myform" action = "carowner log.php" method="post" >
            <p>Username</p>
            <input type="text" required name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" required name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="http://localhost/cars/carowner%20signup.php">New User? Sign up now</a>
            
            </form>
        
        
        </div>
    
    </body>
</html>