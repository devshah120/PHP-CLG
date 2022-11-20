<!-- Create a PHP script using nested for loop that creates a chess
board as shown below. -->

<?php
echo "<table border=1>";
for ($row=0; $row <8 ; $row++) 
{ 
	echo "<tr>";
	for ($col=0; $col <8 ; $col++) 
	{ 
		$total=$row+$col;
		if ($total%2==0) 
		{
			echo "<td width=30px height=30px bgcolor=#FFFFFF> </td>";
		}
		else
		{
			echo "<td width=30px height=30px bgcolor=#000000> </td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>