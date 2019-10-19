<?php
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MECHANIC REGISTRATION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="repair signup style.css">
	
	<!--[if IE]>
	<style>
		.field .tooltip .content{ display:none; opacity:1; }
		.field .tooltip:hover .content{ display:block; }
	</style>
	<![endif]-->
</head>
<body>
	<a class='btn github' href='http://localhost/cars/get%20started.html'>HOME</a>
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
			<form action="repair signup insert.php" method="post" novalidate>
				<fieldset>
					
					<div class="field">
						<label>
							<span style="color:white">Shop Name</span>
							<input name="sname" placeholder="ex. Ibp Auto Services" required="required" />
						</label>
					</div>
					<div class="field"> 
						<label>
							<span style="color:white">User Name</span>
							<input  name="rname" placeholder="ex. John13" pattern=".{5,10}" title="Enter 5-10 characters containing both numbers and alphabets" required="required" />
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
							<span style="color:white">Area</span>
							<input name="area" type="text" onkeyup="lettersonly(this)" required="required" type="text" />
						</label>
					</div>
					
					<div class="field">
						<label>
							<span style="color:white">Address</span>
							<input type="text" name="raddr" required='required'>
						</label>
					</div>
					
					<div class="field">
						<label>
							<span style="color:white">Password</span>
							<input type="password" name="password" data-validate-minmax="8,20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required='required'>

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
							<input type="text" class='tel' onkeyup="numbersonly(this)" name="hone" required='required' data-validate-length-range="10,20">
						</label>
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
							<span> </span>
							<input type="checkbox" />
							<span style="color:white">I agree to terms and conditions</span>
						</label>
					</div>

				</fieldset>
				<button type="submit" name="saver">Submit</button>
				
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