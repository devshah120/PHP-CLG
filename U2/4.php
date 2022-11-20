<!-- Create a PHP script using a for loop to add all the integers
between 0 and 30 and display the total.
 -->
<?php
	$sum=0;
	echo "Sum of all number in 1 to 30 <br>";
	for ($i=0; $i <=30 ; $i++) 
	{ 
		$sum=$i+$sum;
	}
	echo $sum;
?>