<?php
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER REGISTRATION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="customer signup style.css" type="text/css" />
	<!--[if IE]>
	<style>
		.field .tooltip .content{ display:none; opacity:1; }
		.field .tooltip:hover .content{ display:block; }
	</style>
	<![endif]-->
</head>
<body>
	<style>
		body{ min-width:960px;
 	color:#444;
 	background: url(sign.jpg)no-repeat center center fixed;
 	-webkit-background-size: cover;
 	-moz-background-size: cover;
 	-o-background-size: cover; 
 	font-size:12px;
  	line-height:1.5em; 
    font-family:Arial, Helvetica, sans-serif;
   }
</style>
	<a class='btn github' href='http://localhost/cars/get%20started.html'>HOME</a>
	<a class='btn github' href='http://localhost/cars/customer%20sign%20in.php'>BACK</a>
	<div id='wrap'>
		<style>
			#wrap{ 
	/*
	padding:50px;
	width:550px; 
	background-color:#fce0ae; 
	margin:20px auto; 
	border:1px dashed #AAA; 
	position:relative;*/
	background: rgba(0, 0, 0, 0.5);
    color: black;
    top: 50%;
    left: 50%;
    width:740px;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

	}
</style>
		<div class='options'>
		
		</div>
		<h1 style="color:white">New here?Create a free account</h1>
		<section class='form'>
			<form action="insert customer signup.php" method="post" novalidate>
				<fieldset>
					<div class="field">
						<label>
							<span style="color:white">First Name</span>
							<input  name="fname" placeholder="ex. John" onkeyup="lettersonly(this)" required="required" />
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Last Name</span>
							<input name="lname" placeholder="ex. Kennedy" onkeyup="lettersonly(this)" required="required" />
						</label>
					</div>
					<div class="field"> 
						<label>
							<span style="color:white">User Name</span>
							<input  name="uname" placeholder="ex. John13" pattern=".{5,10}" title="Enter 5-10 characters with both letters and numbers" required="required" />
						</label>
					</div>
						<!--<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter full name(with lastname)</p>
							</div>
						</div>-->
					
					
					
					<div class="field">
						<label>
							<span style="color:white">Email-ID</span>
							<input name="email" class='email' required="required" type="email" />
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Email id must be of format abc@xyz.com</p>
							</div>
						</div>
					</div>
					
					<div class="field">
						<label>
							<span style="color:white">Date Of Birth</span>
							<input class='date' type="date" name="datee" required='required'>
						</label>
					</div>
					
					<div class="field">
						<label>
							<span style="color:white">Password</span>
							<input type="password" name="password" data-validate-minmax="5,20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters</p>
							</div>
						</div>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Repeat password</span>
							<input type="password" name="password2" data-validate-linked='password' required='required'>
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Mobile No.</span>
							<input type="tel" class='tel' name="phone" onkeyup="numbersonly(this)" required='required' data-validate-length-range="8,20">
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>User can input '+' sign at the beginning</p>
							</div>
						</div>
					</div>

		  								

					<div class="field">
						<label>
							<span style="color:white">License</span>
							<input type='file' name="license" style="color:white" >
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Photo</span>
							<input type='file' name="photo" style="color:white" >
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Address</span>
							<textarea required="required" name='message'></textarea>
						</label>
					</div>
					<br></br>
					<div class="field">
						<label>
							<span> </span>
							<input type="checkbox" />
							<span style="color:white">I agree to terms and conditions</span>
						</label>
					</div>

				</fieldset>
				<button type="submit" name="save">Submit</button>
				
                <button type='reset'>Reset</button>
			</form>
		</section>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="multifield.js"></script>
    <script src="validator.js"></script>
	<script>
		// initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
		var validator = new FormValidator({"events" : ['blur', 'input', 'change']}, document.forms[0]);


        // on form "submit" event
		document.forms[0].onsubmit = function(e){
			var submit = true,
				validatorResult = validator.checkAll(this);

			console.log(validatorResult);
			return !!validatorResult.valid;
		};


        // on form "reset" event
        document.forms[0].onreset = function(e){
            validator.reset();
        };

        // stuff related ONLY for this demo page:
		$('.toggleValidationTooltips').change(function(){
			validator.settings.alerts = !this.checked;

			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);
	</script>
	<script>
		function lettersonly(input)
		{
			var regex = /[^a-z]/gi;
			input.value = input.value.replace(regex,"");
		}
	</script>
		<script>
		function numbersonly(input)
		{
			var regex = /[^+0-9]/gi;
			input.value = input.value.replace(regex,"");
		}
	</script>
</body>
</html>