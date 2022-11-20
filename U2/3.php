<!-- Create a PHP script that uses function to test whether a
number is greater than 30, 20 or 10 using ternary operator. -->
<?php
	function greater($value)
	{
		$v= ($value>=30) ? "value is greater then 30" : "value is less then 30";
		echo $v;
	}

greater(10);
?>