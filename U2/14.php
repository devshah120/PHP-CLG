<!-- 14.Create a PHP script which will display the colors in the
ascending order of color name like white, green, red. 
 Output:
 green
 red
 white -->
<?php
	$color = array('white','green','red');

	sort($color);

	foreach ($color as $clr) 
	{
		echo $clr."<br>";
	}
?>