<?php
session_start();
if (isset($_SESSION['favcolor'])) 
{
	echo "Your Favorite color is ".$_SESSION['favcolor']."<br>";
}
if (isset($_SESSION['favanimal'])) 
{
	echo "Your Favorite animal is ".$_SESSION['favanimal'];
}
?>