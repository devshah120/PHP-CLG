<!-- 3. Create a PHP script that has two session variable called color
and animal. Set the value of both session variable and access
the session information on another page and print it. -->
<?php
session_start();

$_SESSION['favcolor']="Yellow";
$_SESSION['favanimal']="Dog";

echo "We have saved your information";
?>