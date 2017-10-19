<?php
error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db('Project');
if(isset($_POST['submit']))
{
	$a1=$_POST['fn'];
	$a2=$_POST['ln'];
	$a3=$_POST['dob'];
	$a4=$_POST['cn'];
	$a5=$_POST['em'];
	$a6=$_POST['pw'];
	$query="insert into Register(First_Name,Last_Name,Date_Of_Birth,Contact,Email,Password)
	Values('$a1','$a2','$a3','$a4','$a5','$a6')";
	if(mysql_query($query))
	{
		include('create.php');
	}
}
if(isset($_POST['login']))
{
	$emm=$_POST['em'];
	$pww=$_POST['pw'];
	$str="SELECT * FROM `register` WHERE Email like '$emm'";	
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
<!DOCTYPE html>
<html>
<head>
	<title>Login/Sign Up</title>
	<style type="text/css">
	p{
		background-color: black;
		color:silver;
		font-size: 25px;
		padding: 15px;
		}
	.def{
		padding-top: 10px;
		background-color: mistyrose;
		font-family:"Book Antiqua", Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
		color: black;
		size: 25px;
		font-style: bold;
	}
	input {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	}
	</style>
</head>
<body>
<?php
include('header.php');
?> 
<br>
<br>
<p>If you already have an account:</p>
<div class="def">
<form method="post">
<label>Email Id</label><br>
<input type="text" name="email">
<br>
<label>Password</label><br>
<input type="password" name="pw">
<br>
<br>
<button type="submit" name="login" style="vertical-align:middle"><span>Login</span></button>
</form>
<br><br>
<p>To create a new account:</p>
<br>
<div class="def">
<form method="post">
	First Name<br>
	<input type="text" name="fn">
	<br>
	Last Name<br>
	<input type="text" name="ln">
	<br>
	Date Of Birth<br>
	<input type="date" name="dob">
	<br>
	Contact No.<br>
	<input type="number" name="cn">
	<br>
	Email Id<br>
	<input type="text" name="em">
	<br>
	Set Password<br>
	<input type="password" name="pw">
	<br>
	<br>
	<input type="submit" value="Create Account!" name="submit">
</form>
</div>
</body>
</html>