<?php
	$directions = array('Up'=>'North','Down' =>'South','Left'=>'West','Right'=>'East');

	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Key</th>";
	echo "<th>Value</th>";
	echo "</tr>";
	foreach ($directions as $key => $value) 
	{
		echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$value."</td>";
		echo "</tr>";
	}
?>