<!DOCTYPE html>
<html>
<head>
	<title>Pastries and Cupcakes</title>
	<style type="text/css">
		.pastry{
			background-image:url('Image/wallpaper.jpg');
			background-size: 1350px;
		}
		p{
			font-family: "Brush Script MT", cursive;
			font-size: 40px;
		}
	</style>
</head>
<body>
<?php
	include('header.php');
?>
<div class="pastry">
<p>Available Pastries and Cupcakes:</p>
<br>
<?php
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	$query="SELECT * from Pastry";
	$res=mysql_query($query);
	while($row= mysql_fetch_assoc($res))
	{
		echo "ID: ".$row['Prod_Id']."<br>";
		echo "NAME: ".$row['Prod_Name']."<br>";
		echo ".."; ?> <img src="<?php echo$row['Photo']; ?>" height="200px" width="290px"> <?php echo "<br>";
		echo "PRICE: ".$row['Price']."<br>";
		echo "Specs: ".$row['Specification']."<br>";
		echo "<br> <br>";
	} 
	?>
	  To Add Items, <a href="cart.php">Go To Cart</a>
	  <br>
	</div>
</body>
</html>
