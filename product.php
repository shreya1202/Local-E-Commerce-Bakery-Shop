<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<style type="text/css">
		.ghi{
			background-color: cornsilk;
			background-image: url('Image/bg3.jpg');
			margin-top: 20px;
			height:530px;
			}
		h{
			font-family: "Brush Script MT", cursive;
			font-size: 40px;
		}
			u{
			list-style-type: none;
			border-top: solid deepskyblue;
			padding: none;
			border-color: darkslategrey;
			font-size: 50px;
			margin-top: 70px;
	    	font-family: Papyrus, fantasy;

		}
		l{
			color: black;
		}
		l a{
			background-color: darkorchid;
			display: block;
			color: lavender;
			text-align: center;
			padding: 15px 20px;
		}
		l a:hover:not(.active){
			background-color: khaki;
			color:black;
		}
	</style>
</head>
<body>
<?php
	include('header.php');
?>
<div class="ghi">
<h>Choose a Category from our following Offers:</h>
<br>
<br>
<u>
<l><a href="cakes.php">Cakes</a></l>
<l><a href="cookies.php">Cookies</a></l>
<l><a href="pastries.php">Pastries & Cupcakes</a></l>
</u>
</div>
</body>
</html>