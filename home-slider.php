<?php
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHOOSE</title>
  <link rel="stylesheet" href="alux.min.css">
</head>

<body>

<div class="nav-wrap">

	  <div class="grid no-pad-menu">
	    <div class="nav-header">
	      <a href="#" class="logo">MOVMAX</a>
	      <div class="tog" data-target="menu-sub-2">
	        <span class="animate"></span>
	        <span class="span-middle animate"></span>
	        <span class="animate"></span>
	      </div>
        

        <ul class="pri">
          <li><a href="http://localhost/cars/custlogin.php">Back</a></li>
        </ul>
        <style>
          .pri
          {
            position:relative;
            left:850%;
            top:-30%;
          }
        </style>


	    </div>
	    <nav class="nav-container" id="menu-sub-2">
	      
	    </nav>
	  </div>
	 </div>
	 <div class="clearfix"></div>

    <div class="container-siema">
      <div class="siema">
      <div class="siema__slide" style="background: url(back3.jpg) center center ;background-size: cover;">
        <div class="siema__filter"></div>
        <div class="siema__caption">
           <h1>MOVMAX</h1>
           <h2>Never stop moving</h2>
           <p></p>
           
        </div>
      </div>
      <div class="siema__slide" style="background: url(back4.jpg)center center;background-size: cover;">
        <div class="siema__filter"></div>
        <div class="siema__caption">
          <h3 class="huge">RENT.DRIVE.TRAVEL.EARN</h3>
          <h2>The best never ever rest.Dont just dream it,drive it.Choose cars,rent cars,drive cars and earn more to movemax.</h2>
        </div>
      </div>
      <div class="siema__slide" style="background: url(back5.jpg)center center;background-size: cover;">
        <div class="siema__filter"></div>
        <div class="siema__caption">
          <h3 class="huge">WE GIVE THE BEST.WE RECIEVE THE BEST</h3>
          <h2>Drive the change.Drive your way </h2>
        </div>
      </div>
    </div>
    <div class="container-siema__prev"><div class="alux-arrow">prev</div></div>
    <div class="container-siema__next"><div class="alux-arrow">next</div></div>
  </div>


  <!--<section class="grid" id="tiles">

    <div class="col-50">
      <div class="tile filter" style="background: url(back.jpg) center center;background-size: cover;">
        <div class="tile__text">
          <h3 class="mb-0">Card title</h3>
          <h4 class="light small">Lorem ipsum</h4>
        </div>
      </div>
    </div>

    <div class="col-50">
      <div class="tile filter" style="background: url(back.jpg) center center;background-size: cover;">
        <div class="tile__text">
          <h3 class="mb-0">Card title</h3>
          <h4 class="light small">Lorem ipsum</h4>
        </div>
      </div>
    </div>

  </section>

  <section class="grid" id="features">
    <div class="col-25 tab-50">
        <h3>Feature</h3>
        <p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum.</p>
    </div>
    <div class="col-25 tab-50">
        <h3>Feature</h3>
        <p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum.</p>
    </div>
    <div class="col-25 tab-50">
        <h3>Feature</h3>
        <p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum.</p>
    </div>
    <div class="col-25 tab-50">
        <h3>Feature</h3>
        <p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum.</p>
    </div>
  </section>

  <div class="cover">
    <section class="grid">
      <div class="col-40 sma-50">
        <h2 class="huge">Page Message</h2>
        <h3 class="large">Subtitle of the cover full width</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maiores, deleniti voluptates perferendis magnam temporibus, iure ratione quia quidem aliquid ex nisi ea. Dignissimos odio, consequatur enim. Autem, expedita, fugit.</p>
        <a class="button" href="">Call to action</a>
      </div>
    </section>
  </div>-->

  <section class="grid no-col pb-0">
      <h2>BOOK YOUR DATES</h2>
      <section class='form'>
			<form action="filter car.php" method="post" novalidate>
      <fieldset>
      <div class="field">
		<label>
			<span>FROM</span>
				<input class='date' type="date" name="fd" required='required'>
		</label>
	   </div>
	   <div class="field">
		<label>
			<span>TO</span>
				<input class='date' type="date" name="ld" required='required'>
		</label>
	   </div>
	   <div class="field">
	   <label>
			<span>CITY</span>
				<input type="text" name="city" required='required' >
		</label>

		</div>
     <br></br>

	</fieldset>
      
    
    <?php
      if(isset($_POST['ready']))
      {
        $fd=$_POST['fd'];
        $ldate=$_POST['ldate'];

      }
      ?>



    <section class="grid mb-3" id="cards">

      <div class="col-50">
        <div class="card">
          <div class="tile filter" style="background: url(back2.jpg) center center; background-size: cover;">
            <div class="tile__text">
              <h3 class="mb-0">CHAUFFEUR SERVICES</h3>
              <h4 class="small">People you can trust</h4>
              <a class="button1 animate" href="http://localhost/cars/driver%20choose.php">Click here</a>
            </div>
          </div>
          <div class="card__copy">
          	<nav class="nav-container animate" id="menu-double">
          		<ul class="primary primary--left">
          	<li class="dropdown">
            <a data-toggle="dropdown"> Choose appropriate chauffeur services. We<div class="alux-arrow animate"></div></a>
            <ul class="dropdown-menu">
              <li>Deliver rented car at your place from the company</li>
              <li>Pick up rented car from your place after return</li>
              <li>Pick up from your place and drive to the location you specify</li>
            </ul>
          	</li>
          </ul>
          	</nav>
          </div>
        </div>
      </div>

      <div class="col-50">
        <div class="card">
          <div class="tile filter" style="background: url(back1.jpg) center center;background-size: cover;">
            <div class="tile__text">
              <h3 class="mb-0">REPAIR SERVICES</h3>
              <h4 class="small">We care for cars</h4>
               <a class="button2 animate" href="http://localhost/cars/repair%20choose.php">Click Here</a>
            </div>
          </div>
          <div class="card__copy">
           <nav class="nav-container animate" id="menu-double">
          		<ul class="primary primary--left">
          	<li class="dropdown">
            <a data-toggle="dropdown"> Choose appropriate repair services based on your location. We<div class="alux-arrow animate"></div></a>
            <ul class="dropdown-menu">
              <li>Quality automotive care</li>
              <li>Fix repairs wherever you are in case of breakdown</li>
              <li>Provide car maintenance and spare parts for own cars if required </li>
            </ul>
          	</li>
          </ul>
          	</nav>
          </div>
        </div>
      </div>
      <input style="position:relative;left:40%;"type="submit" name="ready" value="get ready for the ride"class="button animate">
  </form>

    </section>


  

<script src="js3/alux.min.js"></script>

<script>
var next = document.querySelector(".container-siema__next");
var prev = document.querySelector(".container-siema__prev");
var slideCount = document.querySelector(".siema").children.length - 1;

var mySiema = new Siema({
  loop: true,
});

prev.addEventListener("click", function () {
  return mySiema.prev();
});

next.addEventListener("click", function () {
  return mySiema.next();
});
</script>






</body>
</html>
