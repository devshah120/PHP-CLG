<?php
session_start();

if (isset($_SESSION['uname'])) 
{
	session_destroy();
	echo "<br> <a href='6.php'> <input type=button value=login name=login></a>";
}
else
{
	echo "<br> <a href='6.php'> <input type=button value=login name=login></a>";
}
?>