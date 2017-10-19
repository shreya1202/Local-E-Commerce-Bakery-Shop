<html>
<head>
	<title>Cakes</title>
	<style type="text/css">
		.cake{
			background-image:url('Image/wallpaper.jpg');
			background-size: 1350px;
			background-blend-mode: overlay;
		}
		p{
			font-family: "Brush Script MT", cursive;
			font-size: 40px;
		}
		form{
			font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
			font-size: 20px;
		}
		.f{
			margin-top: -4200px;
			margin-left: 400px;
		}

		table {
    		border-collapse: collapse;
    		width: 100%;
		}

		th, td {
    		padding: 8px;
    		text-align: left;
    		
		}
</style>
</head>
<body>
<?php
include('header.php');
?>
<div class="cake">
<p>Available Cakes:</p>
<br>
<?php
	$total=0;
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	$query="SELECT * from Cakes";
	$res=mysql_query($query);
	?>
	<table>
		<th>Product Id</th>
		<th>Product Name</th>
		<th>Picture</th>
		<th>Price</th>
		<th>Specifications</th>
	<?php
	while($row= mysql_fetch_assoc($res))
	{
			
		$id=$row['Prod_Id'];
		$name=$row['Prod_Name'];
		$price=$row['Price'];
		$specs=$row['Specification'];
		?>
		<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><img src="<?php echo$row['Photo']; ?>" height="200px" width="290px"></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $specs; ?></td>
		</tr>
	<?php
	 }
	 ?>
	 </table>
	 To Add Items, <a href="cart.php">Go To Cart</a>
	 <br>
	 </div>
</body>
</html>