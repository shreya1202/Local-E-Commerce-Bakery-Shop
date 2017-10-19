<?php
	include('header.php');
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	?>
	<div class="cart">
	<form method="post">
		<br>
		Enter Your Product Id  
		<input type="text" name="id">
		<input type="submit" name="next" value="Next">
		<input type="submit" name="finish" value="Finish">
	</form>
	</div>
	<?php
	if(isset($_POST['next']))
	{
		$a=$_POST['id'];
		$str="SELECT `Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification` FROM `cakes` WHERE `Prod_Id` LIKE '$a'";	
		$res=mysql_query($str);
		$result=mysql_fetch_array($res);
		if($result[0]!=0)
		{
			$x=$result[1];
			$y=$result[3];
			$str="INSERT INTO Cart(Prod_Name, Price) VALUES('$x','$y')";
			mysql_query($str);
		}
       	else
        {
			$sql="SELECT `Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification` FROM `cookies` WHERE `Prod_Id` LIKE'$a'";	
			$res=mysql_query($sql);
			$result=mysql_fetch_array($res);
			if($result[0]!=0)
			{
	    		$x=$result[1];
	    		$y=$result[3];
	    		$str="insert into Cart(Prod_Name, Price) Values('$x','$y')";
				mysql_query($str);
			}
			else
        	{
   				$sql="SELECT `Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification` FROM `pastry` WHERE `Prod_Id` LIKE '$a'";	
				$res=mysql_query($sql);
				$result=mysql_fetch_array($res);
				if($result[0]!=0)
				{
					$x=$result[1];
	    			$y=$result[3];
	    			$str="insert into Cart(Prod_Name, Price) Values('$x','$y')";
					mysql_query($str);
				}
			}
		}
		
	}
	if(isset($_POST['finish']))
	{
		?>
		<div class="disp">
		<?php
		echo "Your Order: "."<br><br>";
		$total=0;
		$query="SELECT * from Cart";
		$res=mysql_query($query);
		while($row= mysql_fetch_assoc($res))
		{
			echo "NAME: ".$row['Prod_Name']."<br>";
			echo "PRICE: ".$row['Price']."<br>";
			$total=$total+$row['Price'];
			echo "<br> <br> <br>";		
		}
		echo "PAYABLE AMOUNT: ".$total."<br><br><br><br>";
		?>
		<a href="delivery.php">Click Here For Delivery Options</a>
		</div>
		<?php	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<style type="text/css">
	.disp{
		background-image: url('Image/bg4.jpg');
		background-position: bottom;
		background-repeat-y: no-repeat;
		font-family: Papyrus, fantasy;
		font-size: 25px;
		font-style: bold
		color: maroon;
	}
	.del{
		background-color: cornsilk;
	}
	input[type=text] 
	{
    	width: 50%;
    	padding: 12px 20px;
    	margin: 8px 0;
    	box-sizing: border-box;
    	border: none;
    	background-color: lightcyan;
    	color: maroon;
	}
	</style>
</head>
</body>
</html>