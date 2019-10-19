<?php
include("config.php");
$content_per_page = 12;  
$group_no  = strtolower(trim(str_replace("/","",$_REQUEST['group_no'])));
$start = ceil($group_no * $content_per_page);
$sql= "SELECT distinct * FROM `car` WHERE status = '1'";
    if(isset($_GET['company']) && $_GET['company']!="") :
        $company = explode(',',url_clean($_REQUEST['company']));    
        $sql.=" AND company IN ('".implode("','",$company)."')";
    endif;

    if(isset($_GET['model']) && $_GET['model']!="") :
        $model = explode(',',url_clean($_REQUEST['model']));    
        $sql.=" AND model IN ('".implode("','",$model)."')";
    endif;

    if(isset($_GET['seat']) && $_GET['seat']!="") :
        $seat = explode(',',$_REQUEST['seat']); 
        $sql.=" AND seat IN (".implode(',',$seat).")";
    endif;

    if(isset($_GET['fuel']) && $_GET['fuel']!="") :
        $fuel = explode(',',url_clean($_REQUEST['fuel'])); 
        $sql.=" AND fuel IN ('".implode("','",$fuel)."')";
    endif;

    $sql.=" LIMIT $start, $content_per_page";
    $all_product=$db->query($sql);
    $rowcount=mysqli_num_rows($all_product);
    // echo $sql; exit;

    function url_clean($String)
    {
        return str_replace('_',' ',$String); 
    }
?>

<!-- listing -->
        <?php if(isset($all_product)  && $rowcount > 0) : $i = 0; ?>
            <?php foreach ($all_product as $key => $car) : ?>
                <article class="col-md-4 col-sm-6">
                    <div class="thumbnail product">
                                                <div class="caption">
                            <h6 style="font-weight: bold; font-size:30px;position: center;"><?php echo $car['regno']; ?></h6>
                            <h6><?php $varr1=$car['regno']; ?></h6>

                            <div class="price">Rs.<?php echo $car['fee']; ?>/-</div>
                            <h6 style="font-weight: bold;">COMPANY : <?php echo $car['company']; ?></h6>
                            <h6 style="font-weight: bold;">MODEL   : <?php echo $car['model']; ?></h6>
                            <h6 style="font-weight: bold;">SEAT    : <?php echo $car['seat']; ?></h6>
                            <h6 style="font-weight: bold;">FUEL    : <?php echo $car['fuel']; ?></h6>
                            <br></br>
                            <?php echo '<a href="carid.php?carid=' . $varr1 . '">BOOK</a>';?>
                            <!--<h6><a href="carid.php?carid=' . $var3 . '" ?>>BOOK</a></h6>-->

                        </div>
                    </div>
                </article>
            <?php $i++; endforeach; ?> 
        <?php endif; ?>
                                
<!-- /.listing -->
