<?php
	error_reporting(0);
	include('header.php');
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
	<style type="text/css">
	form
		{
  	  	padding: 12px 20px;
    	box-sizing: border-box;
    	border: solid darkgreen;
    	position: center;
		}
	.a{
		background-image: url('Image/bg6.jpg');
		height: 200px;
		font-family: "Playfair Display" ;
		font-size: 20px;
		margin-top: 20px;
		text-align: center;
		font-style: bold;
	}
	.b{
		background-image: url('Image/bg6.jpg');
		height: 300px;
		font-family: "Playfair Display" ;
		font-size: 20px;
		margin-top: 20px;
		text-align: center;
		font-style: bold;
	}
	
	</style>
</head>

	<body>
	<div class="a">
<b>Already have an account? Log In:
</h><br><br>
<form method="post">
Email Id<br>
<input type="email" name="em"><br>
Password<br>
<input type="password" name="pw"><br>
<input type="submit" name="s" value="Login">
</form>
<?php
	if(isset($_POST['s']))
	{
		$emm=$_POST['em'];
		$pww=$_POST['pw'];
		mysql_connect('localhost','root','');
		mysql_select_db('Project');
		$str="SELECT * FROM `register`";	
		$res=mysql_query($str);
		$result=mysql_fetch_array($res);
		if($result[4]!=$emm)
			echo "Incorrect Email Id. Try again. ";
		else if($result[5]!=$pww)
			echo "Incorrect Password. Try again";
		else
		{
			header("Location: create1.php");
		}
	}
?>
</div>
<div class="b">
<h>
Create an account with us to help us Serve you better:
</h><br>
<a href="login.php">Sign Up!</a><br><br>
<h>Or Continue with the Order:
</h><br><br>
<form method="post">
Please Enter The Delivery Address<br>
<input type="text" name="a">
<br>
<input type="submit" name="s" value="Submit">
</form>
<?php
if(isset($_POST['s']))
{
	$addr=$_POST['a'];
	$strr=str_shuffle("123456");
	$str=substr($strr,0,1);
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	$query="SELECT * from Cart";
	$res=mysql_query($query);
	echo "Your Order for ";
	while($row= mysql_fetch_array($res))
	{
		echo $row[1]."<br>";		
	}
	echo "will be delivered at $addr in ".$str."hours.";

$w="DELETE FROM `cart`";
		mysql_query($w);
	}
	?>

	</div></b></body>
</html>
