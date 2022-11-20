<!-- 1. Create a web application that will have array of friuts. Display
the fruits name using foreach loop. -->

<?php
	$friuts = array('apple','mango','kivi','banana');

	echo "<table border=1>";
	foreach ($friuts as $f) 
	{
		
		echo "<tr>";
		echo "<td>".$f."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>