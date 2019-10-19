<?php
?>

<!DOCTYPE html>
<head>
    <title> Carowner Login </title>
    <link rel="stylesheet" type="text/css" href="carowner signup css.css">   
</head>
    <body>
        <a class='btn github' href='http://localhost/cars/get%20started.html'>HOME</a>

    <div class="login-box">
    
        <h1>Signup Here</h1>
            <form name="myform" action = "carowner signup insert.php" method="post" onsubmit="return vfun()">
            
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
                
                            <div class='content'>
                                
                                
                            </div>
                        </div>
                    </div>

                       
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
                    
                    <div class="field">
                        <label>
                            <p>
                            <input type="checkbox">
                            I agree to terms and conditions</p>
                        </label>
                    </div>

                </fieldset>
                <input type="submit" name="save1" value="submit">
                
                <button type='reset'>Reset</button>
            </form>
        
        
        </div>
    
    </body>
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