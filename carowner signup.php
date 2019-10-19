<?php
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER REGISTRATION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="carowner signup css.css" type="text/css" />
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
    background: url(img03.jpg)no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover; 
    font-size:12px;
    line-height:1.5em; 
    font-family:Arial, Helvetica, sans-serif;
   }
</style>
	<a class='btn github' href='http://localhost/cars/get%20started.html'>BACK</a>
	<a class='btn github' href='http://localhost/cars/get%20startes.html'>HOME</a>
	<style>
    	a{ text-decoration:none; }
		.btn{ margin:5px; font-size:1.3em; font-weight:bold; border:2px solid rgba(0,0,0,0.2); display:inline-block; box-shadow:0 -30px 30px -15px #00329B inset, 0 1px 0 rgba(255,255,255,0.3) inset; background:#0088CC; background-repeat:repeat-x; color:#FFF; text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25); border-radius:7px; padding:10px 20px; -webkit-transition:0.15s; transition:0.15s; }
		.btn:hover{ background:#0068BA; }
		.btn:active{ box-shadow:0 0 0 0 rgba(0, 0, 0, 0.3), 0 -30px 30px -15px #00329B inset, 0 0 6px #00243F inset; }
		.btn.github{ float:right; }
  		}
	</style>
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
	background: rgba(0, 0, 0, 0.3);
    color: black;
    top: 50%;
    left: 50%;
    width:810px;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

	}
</style>
		<div class='options'>
		<!-- 	<label>
				<input type='checkbox' id='vfields' />
				Vertical orientation
			</label> -->
			<!--<label>
				<input type='checkbox' class='toggleValidationTooltips' />
				Disable vlidation tooltips
			</label>-->
		</div>
		
		<h1 style="color:white">New here?Create a free account</h1>
		<section class='form'>
			<form action="carowner signup insert.php" method="post" novalidate>
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
							<input type="password" name="password" data-validate-minmax="8,20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required>
							<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</p>
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
					

		  								
					<!--<div class="field multi required">
						<label for='multi_first'>
							<span>Multifield</span>
						</label>
						<div class='input'>
							<input type="text" name="multi1" maxlength='4' id='multi_first'>
							<input type="text" name="multi2" maxlength='4'>
							<input type="text" name="multi3" maxlength='4'>
							<input type="text" name="multi4" maxlength='4'>
							<input type="text" name="multi5" maxlength='4'>
							<input type="text" name="multi6" maxlength='4'>
							<input data-validate-length-range="24" data-validate-pattern="alphanumeric" id="serial" name="serial" type="hidden" required='required' />
						</div>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>This is a multifield, which let the user input a serial number or credit card number for example, and the trick is to validate the combined result, which is stored in a hidden field</p>
							</div>
						</div>
					</div>-->
					<div class="field">
						<label>
							<span style="color:white">File upload</span>
							<input type='file' style="color:white">
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