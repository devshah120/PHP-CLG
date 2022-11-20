<!-- 1. 1Create a PHP script that define cookie named "user" with the
value "BCA". The cookie will expire after 30 days. -->
<?php
$cookiename="user";
$cookievalue="BCA";

setcookie($cookiename,$cookievalue,time()+30*24*60*60);

if (!isset($_COOKIE[$cookiename])) 
{
	echo "cookie named is ".$cookiename." is not set";
}
else
{
	echo "cookie named is ".$cookiename." is set <br>";
	echo "cookie value is ".$_COOKIE[$cookiename];
}
?>