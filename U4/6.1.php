<?php
$name="admin";
$pass="admin";
session_start();

if(isset($_SESSION['nm']))
{
	echo "Welcome user ".$_SESSION['nm'];

	echo "<br> <a href='6.2.php'> <input type=button value=logout name=logout></a>";
}
else
{
	if ($_POST['nm']=$name && $_POST['pass']=$pass) 
	{
		$_SESSION['nm']=$name;
	}
	else
	{
		echo "<br> <a href='6.php'> <input type=button value=logs name=login></a>";
	}
}
?>