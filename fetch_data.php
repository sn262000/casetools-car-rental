<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM car WHERE status = '1'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND fee BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["company"]))
	{
		$company_filter = implode("','", $_POST["company"]);
		$query .= "
		 AND company IN('".$company_filter."')
		";
	}
	if(isset($_POST["model"]))
	{
		$model_filter = implode("','", $_POST["model"]);
		$query .= "
		 AND model IN('".$model_filter."')
		";
	}
	if(isset($_POST["fuel"]))
	{
		$fuel_filter = implode("','", $_POST["fuel"]);
		$query .= "
		 AND fuel IN('".$fuel_filter."')
		";
	}
	if(isset($_POST["seat"]))
	{
		$seat_filter = implode("','", $_POST["seat"]);
		$query .= "
		 AND seat IN('".$seat_filter."')
		";
	}
	if(isset($_POST["type"]))
	{
		$type_filter = implode("','", $_POST["type"]);
		$query .= "
		 AND type IN('".$type_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					
					<p align="center"><strong><a href="#">'. $row['regno'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['fee'] .'</h4>
					<p>Company : '. $row['company'].' <br />
					Model: '. $row['model'] .' <br />
					Fuel : '. $row['fuel'] .' <br />
					Seater : '. $row['seat'] .' <br />

					type : '. $row['type'] .' </p>

				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>