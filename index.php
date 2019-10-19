<?php
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER REGISTRATION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="fv.css" type="text/css" />
	<!--[if IE]>
	<style>
		.field .tooltip .content{ display:none; opacity:1; }
		.field .tooltip:hover .content{ display:block; }
	</style>
	<![endif]-->
</head>
<body>
	<a class='btn github' href='file:///E:/CASE%20TOOLS/car/index.html'>HOME</a>
	<div id='wrap'>
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
		<h1 title='how forms should be done.'>New here?Create a free account</h1>
		<section class='form'>
			<form action="insert.php" method="post" novalidate>
				<fieldset>
					<div class="field">
						<label>
							<span>First Name</span>
							<input  name="fname" placeholder="ex. John" required="required" />
						</label> 
					</div>
					<div class="field">
						<label>
							<span>Last Name</span>
							<input name="lname" placeholder="ex. Kennedy" required="required" />
						</label>
					</div>
					<div class="field"> 
						<label>
							<span>User Name</span>
							<input  name="uname" placeholder="ex. John13" pattern=".{5,10}" title="Enter 5-10 characters" required="required" />
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
							<span>Email-ID</span>
							<input name="email" class='email' required="required" type="email" />
						</label>
					</div>
					
					<div class="field">
						<label>
							<span>Date Of Birth</span>
							<input class='date' type="date" name="datee" required='required'>
						</label>
					</div>
					
					<div class="field">
						<label>
							<span>Password</span>
							<input type="password" name="password" data-validate-minmax="8,20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

					</div>
					<div class="field">
						<label>
							<span>Repeat password</span>
							<input type="password" name="password2" data-validate-linked='password' required='required'>
						</label>
					</div>
					<div class="field">
						<label>
							<span>Mobile No.</span>
							<input type="tel" class='tel' name="phone" required='required' data-validate-length-range="8,20">
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Notice that for a phone number user can input a '+' sign, a dash '-' or a space ' '</p>
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
							<span>File upload</span>
							<input type='file' >
						</label>
					</div>
					<div class="field">
						<label>
							<span>Address</span>
							<textarea required="required" name='message'></textarea>
						</label>
					</div>
					<br></br>
					<div class="field">
						<label>
							<span> </span>
							<input type="checkbox" />
							<span>I agree to terms and conditions</span>
						</label>
					</div>

				</fieldset>
				<input type="submit" name="save" value="submit">
				
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
</body>
</html>