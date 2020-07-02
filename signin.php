<html>
<head>
<link rel="stylesheet" href="stylesheet.css">    
</head> 
<form method="post" action="" >
<div class="order">
Enter Username: <input type="text" name="username"><br> <br>
Enter Password: <input type="password" name="password"><br> <br>
<input type="submit" value= "Register" name="btn" id="submit">
<input type="reset" id="submit">
</div>
<?php
if (isset ($_POST['btn']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	include ('dbcon.php');
	
	$que = mysql_query("insert into userlogin values ('$username' , '$password')");
	if (!($que))
	{echo "Record not inserted";}
	else 
	{echo "You are registered.";}
}
session_start();
$username="user";
$password="password";
if (isset ($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
	header ("Location: ");
}
if (isset ($_POST['username']) && isset ($_POST['password'])) 
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
	$_SESSION['loggedin'] = true;
	
	header("Location: homepage.php");
}
}
?>
</form>
</html>