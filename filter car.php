<?php 
session_start();
include("config.php");
$all_model=$db->query("SELECT distinct model FROM `car` WHERE status = '1' GROUP BY model");
$all_company=$db->query("SELECT distinct company FROM `car` WHERE status = '1' GROUP BY company");
$all_seat=$db->query("SELECT distinct seat FROM `car` WHERE status = '1' GROUP BY seat");
//$all_type=$db->query("SELECT distinct type FROM `car` WHERE status = '1' GROUP BY type");
$all_fuel=$db->query("SELECT distinct fuel FROM `car` WHERE status = '1' GROUP BY fuel");
// Filter query
    $sql= "SELECT distinct id FROM `car` WHERE status = '1'";
    if(isset($_GET['model']) && $_GET['model']!="") :
        $model = $_GET['model'];
        $sql.=" AND model IN ('".implode("','",$model)."')";
    endif;

    if(isset($_GET['company']) && $_GET['company']!="") :
        $company = $_GET['company'];
        $sql.=" AND company IN ('".implode("','",$company)."')";
    endif;

    if(isset($_GET['seat']) && $_GET['seat']!="") :
        $seat = $_GET['seat'];
        $sql.=" AND seat IN (".implode(',',$seat).")";
    endif;

    if(isset($_GET['fuel']) && $_GET['fuel']!="") :
        $fuel = $_GET['fuel'];
        $sql.=" AND fuel IN ('".implode("','",$fuel)."')";
    endif;

    /*if(isset($_GET['type']) && $_GET['type']!="") :
        $type = $_GET['type'];
        $sql.=" AND type IN ('".implode("','",$type)."')";
    endif;*/

    $all_product=$db->query($sql);
    $content_per_page = 6;
    $rowcount=mysqli_num_rows($all_product);
    $total_data = ceil($rowcount / $content_per_page);
    function data_clean($str)
    {
        return str_replace(' ','_',$str);
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content='Karthick muthu' name='author'/>
        
        <title>CHOOSE YOUR RIDER</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type='text/css' href="_/plugins/bootstrap.min.css">
        <link rel="stylesheet" type='text/css' href="_/plugins/font-awesome.css">
        <link rel="stylesheet" type='text/css' href="_/css/style.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="_/plugins/jquery.js"></script>
    </head>
    <body background=url(carown7.jpg)>
    <div class="content"> <!-- content -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle -->
                    <div class="navbar-header" id="branding">
                        <h1>MOVMAX</h1>
                    </div>
                    <!-- nav links -->
                    
<a href="http://localhost/cars/custlogin.php" class="bb">BACK</a>
<style>
  a.bb{
    padding:10px 24px;
    position:relative;
    left:1000px;
    top:2px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    float:center;
}
</style>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
                
        <!-- content -->
        <div class="container-fluid">
            <form method="get" id="search_form">
                
                <div class="row">
                    <!-- sidebar -->
                    <aside class="col-lg-3 col-md-4">
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true" style="font-size:30px">COMPANY</h3></div>
                            <div class="panel-body collapse in" id="panelOne">
                                <ul class="list-group">
                                <?php foreach ($all_company as $key => $new_company) :
                                    if(isset($_GET['company'])) :
                                        if(in_array(data_clean($new_company['company']),$_GET['company'])) : 
                                            $check='checked="checked"';
                                        else : $check="";
                                        endif;
                                    endif;
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?=data_clean($new_company['company']);?>" <?=@$check?> name="company[]" class="sort_rang company"><?=ucfirst($new_company['company']); ?></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 style="font-size:30px" class="panel-title" data-toggle="collapse" data-target="#panelTwo" aria-expanded="true">MODEL</h3></div>
                            <div class="panel-body collapse in" id="panelTwo">
                                <ul class="list-group">
                                <?php foreach ($all_model as $key => $new_model) :
                                    if(isset($_GET['model'])) :
                                        if(in_array(data_clean($new_model['model']),$_GET['model'])) : 
                                            $model_check='checked="checked"';
                                        else : $model_check="";
                                        endif;
                                    endif;
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?=data_clean($new_model['model']); ?>" <?=@$model_check?>  name="model[]" class="sort_rang model"><?=ucfirst($new_model['model']); ?></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 style="font-size:30px" class="panel-title" data-toggle="collapse" data-target="#panelThree" aria-expanded="true">SEATER</h3></div>
                            <div class="panel-body collapse out" id="panelThree">
                                <ul class="list-group">
                                    <?php foreach ($all_seat as $key => $new_seat) : 
                                        if(isset($_GET['seat'])) :
                                            if(in_array($new_seat['seat'],$_GET['seat'])) : 
                                                $seat_check='checked="checked"';
                                            else : $seat_check="";
                                            endif;
                                        endif;
                                    ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?=$new_seat['seat']; ?>" <?=@$seat_check?>  name="seat[]" class="sort_rang seat"><?=$new_seat['seat']; ?></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="panel list">
                            <div class="panel-heading"><h3 style="font-size:30px" class="panel-title" data-toggle="collapse" data-target="#panelTwo" aria-expanded="true">FUEL</h3></div>
                            <div class="panel-body collapse in" id="panelFour">
                                <ul class="list-group">
                                <?php foreach ($all_fuel as $key => $new_fuel) :
                                    if(isset($_GET['fuel'])) :
                                        if(in_array(data_clean($new_fuel['fuel']),$_GET['fuel'])) : 
                                            $fuel_check='checked="checked"';
                                        else : $fuel_check="";
                                        endif;
                                    endif;
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?=data_clean($new_fuel['fuel']); ?>" <?=@$fuel_check?>  name="fuel[]" class="sort_rang fuel"><?=ucfirst($new_fuel['fuel']); ?></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        


                    </aside> <!-- /.sidebar -->
                    <section class="col-lg-9 col-md-8">
                        <div class="row">
                            <div id="results"></div>
                        </div>
                    </section>
                </div>
            </form>
        </div> <!-- /.content -->
        <!-- external -->
    </div>
        <script src="_/plugins/bootstrap.min.js"></script>
        <script src="_/js/script.js"></script>
    </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
    var total_record = 0;
    var company=check_box_values('company');
    var model=check_box_values('model');
    var fuel=check_box_values('fuel');
    var seat=check_box_values('seat');
    var total_groups = <?php echo $total_data; ?>;
    $('#results').load("autoload.php?group_no="+total_record+"&company="+company+"&model="+model+"&seat="+seat+"&fuel="+fuel,  function() {
        total_record++;
    });
    $(window).scroll(function() {       
        if($(window).scrollTop() + $(window).height() == $(document).height())  
          
        {    
            if(total_record <= total_groups)
            {
                loading = true;
                $('.loader').show();
                $.get("autoload.php?group_no="+total_record+"&company="+company+"&model="+model+"&seat="+seat+"&fuel="+fuel,
                function(data){ 
                if (data != "") {                               
                    $("#results").append(data);
                    $('.loader').hide();                  
                    total_record++;
                }
                });     
            }
                // total_record ++;
        }
    });
    function check_box_values(check_box_class){
        var values = new Array();
            $("."+check_box_class+":checked").each(function() {
               values.push($(this).val());
            });
        return values;
    }
    $('.sort_rang').change(function(){
        $("#search_form").submit();
        return false;
    });
});
</script>
<?php
      if(isset($_POST['ready']))
      {
        $fd=$_POST['fd'];
        $ld=$_POST['ld'];
        $_SESSION['fdate'] = $fd;
        $_SESSION['ldate'] = $ld;
        

      }

      ?>