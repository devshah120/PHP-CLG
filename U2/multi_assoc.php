<!-- multidimensional associative array with table  -->

<?php
$sub=array(
   0=>array
   (
      "Sub"=>"PHP",
      "Marks"=>"43",
      ),
        1=>array
   (
      "Sub"=>"DS",
      "Marks"=>"65",
      ),
        2=>array
   (
      "Sub"=>"Java",
      "Marks"=>"85",
      ),
        3=>array
   (
      "Sub"=>"DBMS",
      "Marks"=>"25",
      ),
        4=>array
   (
      "Sub"=>"Mysql",
      "Marks"=>"65",
      ),
    //echo  array_sum=$sub[0]["Marks"];
    
);

	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Sub</th>";
	echo "<th>Mark</th>";
	echo "<tr>";

	for ($i=0; $i <5 ; $i++) 
	{ 
		echo "<tr>";
		echo "<td>".$sub[$i]["Sub"]."</td>";
		echo "<td>".$sub[$i]["Marks"]."</td>";
		echo "</tr>";
	}
	echo "<tr>";
	echo "<td>"."Total Subject"."</td>";
	echo "<td>".count($sub)."</td>";
	echo "</tr>";
?>