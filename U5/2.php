<?php
 $conn=mysqli_connect("localhost","root","","dev1");
 if ($conn) 
 {
 	echo "Database connected sucessfully <br>";
 }

 // $sql="CREATE DATABASE dev1";

 // if ($conn->query($sql)===TRUE) 
 // {
 // 	echo "Database Created Sucessfully";
 // }
 // else
 // {
 // 	echo "Error in Database creation".$conn->error;
 // }

// $sql1="CREATE TABLE user (id INT(10) PRIMARY KEY,
// 	firstname VARCHAR(30),
// 	lastname VARCHAR(30))";

//  if ($conn->query($sql1)===TRUE) 
//  {
//  	echo "Table Created Sucessfully";
//  }
//  else
//  {
//  	echo "Error in Table creation".$conn->error;
//  }

 // $sql1="INSERT INTO user(id,firstname,lastname) VALUES(101,'Dev','Shah')";

 // if ($conn->query($sql1)===TRUE) 
 // {
 // 	echo "record  added Sucessfully";
 // }
 // else
 // {
 // 	echo "Error in record creation".$conn->error;
 // }

 // $sql2="INSERT INTO user(id,firstname,lastname) VALUES(102,'ABC','XYZ')";

 // if ($conn->query($sql2)===TRUE) 
 // {
 // 	echo "record  added Sucessfully";
 // }
 // else
 // {
 // 	echo "Error in record creation".$conn->error;
 // }

 // $sql2="INSERT INTO user(id,firstname,lastname) VALUES(103,'PQR','JPG')";

 // if ($conn->query($sql2)===TRUE) 
 // {
 // 	echo "record  added Sucessfully";
 // }
 // else
 // {
 // 	echo "Error in record creation".$conn->error;
 // }

  $query = "SELECT * FROM `user`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        echo "<table border=1>";
        echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> First Name </th>";
        echo "<th> Last Name </th>";
         echo "<th> Button </th>";
        echo "</tr>";
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            
	            echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["firstname"]."</td>"; 
                echo "<td>".$row["lastname"]."</td>";
                echo "<td>"."<input type=submit value=delete name=dlt>"."</td>";
                echo "</tr>";
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>