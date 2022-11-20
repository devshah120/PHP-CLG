<!-- 13.Create a PHP program which iterates the integers from 1 to
100. For multiples of three print "Fizz" instead of the number
and for the multiples of five print "Buzz". For numbers which
are multiples of both three and five print "FizzBuzz". -->

<?php

for ($i=0; $i <=100 ; $i++) 
{ 
	if ($i%15==0)
	{
		echo $i;
		echo " FizzBuzz <br>";
	}
	elseif ($i%3==0) 
	{
		echo $i;
		echo " Fizz <br>";
	}
	elseif ($i%5==0) 
	{
		echo $i;
		echo " Buzz <br> ";
	}
}
?>