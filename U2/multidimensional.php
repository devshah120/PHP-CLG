<!-- multidimensional array with table -->
<?php
$arr=array(
	array("hi","hello"),
	array("h1","hello"),
	array("h2","hello"),
	array("h3","hello"),
);
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>ok</th>";
	echo "<th>ok1</th>";
	echo "</tr>";
for ($row=0; $row <4 ; $row++) 
{ 
	echo "<tr>";

	for ($col=0; $col <2 ; $col++) 
	{ 
		echo "<td>".$arr[$row][$col]."</td>";
	}
	echo "</tr>";
}
?>