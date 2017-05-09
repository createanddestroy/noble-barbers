<!DOCTYPE html>
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				NOBLE BARBERS
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<html lang="en">
<head>
	<meta name ="viewport" content="width=device-width, initial scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main-style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<meta charset="utf-8">

<title>NOBLE BARBERS</title>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				TOP NAV BAR
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<nav class="navbar navbar-transparent fixed-top">
	<div class="container-fluid">

 <!-- MOBILE LOGO -->
 <div class="navbar-header navbar-inverse" >
 	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
 		<span class="icon-bar"></span>
 		<span class="icon-bar"></span>
 		<span class="icon-bar"></span>
	</button>

</div> <!-- closing div class -->
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				MENU ITEMS
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="collapse navbar-collapse" id="mainNavBar">
	<ul class="nav navbar-nav">
		<li class="active" id="menu-1"><a href="index.php">Home</a></li>
		<li class="about" id="menu-2"><a href="about.php">About</a></li>
	</ul>
	</div>
</div> <!-- closing div -->
</nav>

<section>
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                IMAGE CONTENT 
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="welcome">

	<h1 id="content-text-1">NOBLE BABERS</h1>
	

</div> <!-- welcome class tag -->

<div class="content">

	<h1 id="content-text-2">
		Noble Barbers is a traditional barbershop located in Pomona, CA.
		We specialize in Fades, Tapers, Hot Towel Shaves, Straight Razor, 
		side-parts, prohibition era style cuts, and Pompadours.  
	</h1>

</div> <!-- closing content tag -->

<div class="culture">

	<h1 id="content-text-3">
		Inspired by the skater, tattoo and custom car culture in the 
		Los Angeles area and Inland Empire.
	</h1>

</div> <!-- closing culture tag -->

<div class="slideshow-container">
	<div class="myImages" id="one">
		<img src="images/8.jpg" style="width:100%">
	</div> <!-- closing myImages one div -->

	<div class="myImages" id="two">
		<img src="images/4.jpeg" style="width:100%">
	</div> <!-- closing myImages two div -->

	<div class="myImages" id="three">
		<img src="images/6.jpeg" style="width: 100%">
	</div><!-- closing myImages three div -->

	<div class="myImages" id="four">
		<img src="images/9.jpg" style="width: 100%">
	</div> <!-- closing myImages four div -->
</div> <!-- closing gallery div -->

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> <!-- closing text align div -->

<div class="row" id="information">
	<div class="col-md-5">

	<ul id="hours">
			<li id="title">HOURS</li>
			<li>Monday: Closed</li>
			<li>Tuesday: Closed </li>
			<li>Wednesday: 11:00am - 5:00pm</li>
			<li>Thursday: 11:00am - 5:00pm</li>
			<li>Friday: 11:00am - 5:00pm</li>
			<li>Saturday: 10:30am - 5:00pm </li>
			<li>Sunday: 11:00am - 2:00pm</li>

	</ul>	
	</div>

		<div class="col-md-5 col-md-push-5" id="map">
			<p id="title-2">LOCATION</p>
			<p id="title-3">
				2001 S. Garey Ave
				<br>
			   St. E1
			   <br>
			   Pomona, CA 91766</p>
			   </br>	
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.3263765889856!2d-117.75014996042623!3d34.03549810005008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32d9074eda6e5%3A0xa05f783e3b736e87!2s2001+S+Garey+Ave%2C+Pomona%2C+CA+91766!5e0!3m2!1sen!2sus!4v1494182401712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div> <!-- closing div class tag -->
</div> <!-- closing info tag -->



<footer class="footer">
    <div class="container">

&copy;
Noble Barbers|2017 

    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>


<script> 

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

</script>





</body>
</html>