<!-- 4. Create a PHP script that has one session variable called
counter which increments its value as many times user visits
the page. -->
<?php
session_start();
if (!isset($_SESSION['counter'])) 
{
	$_SESSION['counter']=1;
}
else
{
	$_SESSION['counter']++;
}
echo "Your page views is ".$_SESSION['counter'];
//session_destroy();
?>