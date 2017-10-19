<!DOCTYPE html>
<html>
<head>
	<title>Bakery Shop</title>
	<style type="text/css">
		.about{
			margin-top: 20px;
			height: 610px;
			width: 1350px;
			background-image: url('Image/bg3.jpg');
		}
		.mySlides{
      display:none;
    }
/* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin-left: 220px;
  }
/* Caption text */
.text {
    color: white;
    font-size: 25px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    font-style: bold;
    font-family: "Lucida Bright", Georgia, serif;
    }
/* The dots/bullets/indicators */
.dot {
    height: 10px;
    width: 10px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 30%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
.active {
    background-color: #717171;
  }
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.0s;
  animation-name: fade;
  animation-duration: 2.0s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

		}
	</style>
</head>
<body>
<?php
	include('header.php');
  mysql_connect('localhost','root','');
  mysql_select_db('Project');
  $w="DELETE FROM `cart`";
  mysql_query($w);
	?>
<div class="about">
<div class="slideshow-container">
<div class="mySlides fade">
<img src="Image/one.jpg" style="width:900px; height:500px;">
<div class="text">We remain committed to using the best ingredients.</div>
</div>
<div class="mySlides fade">
<img src="Image/si.jpg" style="width:900px, height:500px;">
<div class="text">We use sun ripened whole grains.</div>
</div>
<div class="mySlides fade">
<img src="Image/four.jpg" style="width:900px height:500px;">
<div class="text">A bread in your sack is better than a feather on your hat.</div>
</div>
</div>
<br>
<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</div>

</body>
</html>