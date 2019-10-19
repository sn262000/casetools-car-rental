<?php 

//index.php

include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js2/jquery-1.10.2.min.js"></script>
    <script src="js2/jquery-ui.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link href = "css2/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css2/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Choose your rider</h2>
        	<br />
            <div class="col-md-3">                				
				<div class="list-group">
					<h3>Fee</h3>
					<input type="hidden" id="hidden_minimum_price" value="75" />
                    <input type="hidden" id="hidden_maximum_price" value="120" />
                    <p id="price_show">75-120</p>
                    <div id="price_range"></div>
                </div>				
                <div class="list-group">
					<h3>Company</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(company) FROM car WHERE status = '1'";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['company']; ?>"  > <?php echo $row['company']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>Model</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(model) FROM car WHERE status = '1'";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['model']; ?>" > <?php echo $row['model']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				<div class="list-group">
					<h3>Fuel</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(fuel) FROM car WHERE status = '1'";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['fuel']; ?>"  > <?php echo $row['fuel']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                <div class="list-group">
                    <h3>Seater</h3>
                    <?php
                    $query = "
                    SELECT DISTINCT(seat) FROM car WHERE status = '1'";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['seat']; ?>"  > <?php echo $row['seat']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>  
                </div>
                <div class="list-group">
                    <h3>Type</h3>
                    <?php
                    $query = "
                    SELECT DISTINCT(type) FROM car WHERE status = '1'";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['type']; ?>"  > <?php echo $row['type']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>  
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var company = get_filter('company');
        var model = get_filter('model');
        var fuel = get_filter('fuel');
        var seat = get_filter('seat');
        var type = get_filter('type');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, company:company, model:model, fuel:fuel,seat:seat,type:type},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:75,
        max:120,
        values:[75,120],
        step:5,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>

</html>
