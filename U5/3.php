<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: skyblue;">
    <h3 style="color: #FF2400; text-align: center; font-weight: bold; font-size: 25px;">Book Details</h3>
    <form method="post">
        <table align="center">
            <tr>
                <td><label style="font-size: 20px; font-weight: bold;">Enter Book ID:-</label></td>
                <td><input type="number" name="bid" required></td>
                <!--<label>Enter Book Id:</label><input type="number" name="bid">-->
            </tr>
            <tr>
                <td><label style="font-size: 20px; font-weight: bold;">Enter Book Name:-</label></td>
                <td><input type="text" name="bname" required></td>
            </tr>
            <tr>
                <td><label style="font-size: 20px; font-weight: bold;">Enter Author Name:-</label></td>
                <td><input type="text" name="au_name" required></td>
            </tr>
            <tr>
                <td><label style="font-size: 20px; font-weight: bold;">Enter Price:-</label></td>
                <td><input type="number" name="price" required></td>
            </tr>
            <tr>
                <td><label style="font-size: 20px; font-weight: bold;">Enter ISBN Number:-</label></td>
                <td><input type="number" name="isbn" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit"
            style="background-color: yellow; font-size: 17px; font-weight: bold; text-align: center; display: block; margin: auto;">
    </form>
    <br><br><br>
</body>

</html>

<?php

$server = "localhost";
$uname = "root";
$pwd="";
$db = "dev";

$con = mysqli_connect($server,$uname,$pwd,$db);

if($con){
    echo "Connected";
    // $str = "create table books(b_id int primary key ,b_name varchar(20) NOT NULL, au_name varchar(20) NOT NULL, b_price int NOT NULL, b_isbn int NOT NULL)";
    // if(mysqli_query($con,$str)){
    //     echo "Table Created";
    // }
    
    //else{
      //  echo "Error".mysqli_error($con);
    //}
}
else{
    alert('Error');
}
if(isset($_POST['submit'])){
    $id = $_POST['bid'];
    $name = $_POST['bname'];
    $author = $_POST['au_name'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];

    // $str2 = "insert into books(b_id,b_name,au_name,b_price,b_isbn)values('$id','$name','$author','$price',$isbn)";

    // //mysqli_query($con,$str2);
    // if(mysqli_query($con,$str2)){
    //     echo "Data Inserted";
    // }
    // else{
    //     echo "Error in inserting";
    // }
}
else{
    echo "Please Fill All Details";
}

$sql="SELECT * FROM books";
$result=$con->query($sql);
if ($result->num_rows>0) 
{
    echo "<table border=1 align=center>";
    echo "<tr>";
         echo   "<td>Book ID</td>
            <td>Book Name</td>
            <td>Author Name</td>
            <td>Book Price</td>
            <td>ISBN No</td>";
        echo "</tr>";

        while ($row=$result->fatch_assoc()) 
        {
            echo "<tr>";
            echo "<td>".$row['b_id']."</td>";
            echo "<td>".$row['b_name']."</td>";
            echo "<td>".$row['au_name']."</td>";
            echo "<td>".$row['b_price']."</td>";
            echo "<td>".$row['b_isbn']."</td>";
            echo "</tr>";
        }
}
         
?>