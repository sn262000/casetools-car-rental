<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAR REGISTRATION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="add cars style.css">
	<!--[if IE]>
	<style><!DOCTYPE HTML>

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
	<a class='btn github' href='http://localhost/cars/carowner%20log.php'>HOME</a>
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
		<h1 style="color:white">Single step to open a door of oppurtunities</h1>
		<section class='form'>
			<form action="insert add cars.php" method="post" novalidate>
				<fieldset>
					<div class="field">
						<label>
							<span style="color:white">Register number</span>
							<input data-validate-length-range="10" data-validate-words="1" name="regno" placeholder="ex.TN09MD7987" required="required" />
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Enter the registration number of your vehicle</p>
							</div>
						</div>
					</div>
					
					
					<div class="field">
						<label>
							<span style="color:white">Model</span>
							<input name="model" class='model' required="required" type="text" />
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Company</span>
							<input name="company" class='company' required="required" type="text" />
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Colour</span>
							<input name="colour" class='colour' required="required" type="text" />
						</label>
					</div>
					
					<div class="field">
						<label>
							<span style="color:white">Available from</span>
							<input class='date' type="date" name="fdate" required='required'>
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Available till</span>
							<input class='date' type="date" name="tdate" required='required'>
						</label>
					</div>
										<div class="field">
						<label>
							<span style="color:white">Model Year</span>
							<input class='number' type="number" name="year" required='required'>
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Fuel type</span>
							<input type="text" class='fuel' name="fuel" required='required'>
						</label>
						
					</div>
							

					<div class="field">
						<label>
							<span style="color:white">Fee per hr</span>
							<input name="fee" class='fee' required="required" type="number" />
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Type</span>
							<input name="type1" class='type1' required="required" type="text" />
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Seater</span>
							<input name="seater" class='seater' required="required" type="text" />
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">RC Book upload</span>
							<input name="rc" type='file'>
						</label>
					</div>
					<div class="field">
						<label>
							<span style="color:white">Insurance upload</span>
							<input name="insurance" type='file'>
						</label>
					</div>
					
					<br></br>
					

				</fieldset>
				<button type="submit" name="save1">Submit</button>
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