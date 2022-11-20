<!-- associative array with table -->
<?php
    $directions = array('Up'=>'1','Down' =>'2','Left'=>'3','Right'=>'4');

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Key</th>";
    echo "<th>Value</th>";
    echo "</tr>";
    arsort($directions);
    foreach ($directions as $key => $value) 
    {
        
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
        //$a=min($value);
    }
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Key</th>";
    echo "<th>Value</th>";
    echo "</tr>";
    krsort($directions);
    foreach ($directions as $key => $value) 
    {
        
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
        //$a=min($value);
    }
?>