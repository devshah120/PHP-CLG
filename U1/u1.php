<!-- code 1 to 5 of PHP practical Syllabus  

1. Create a web page that will print Hello World using PHP
script.
2. Create a web page that will demonstrate the use of comments
in PHP.
3. Create a web page that will have two variable, one variable
will store numeric value and another will store string. Print
both values.
4. Create a web page that will generate random number between
1 to 100 using rand() function.
5. Create a web page that will generate any random number and
find square root of that number using sqrt() function.

-->
<?php
	//1
	echo "Helllo World <br>";
	//2
	//3
	$a="hello";
	print_r($a);
	echo "<br>";
	var_dump($a);
	echo "<br>";
	//4
	echo "random number : <br>";
	$b = rand(1,100);
	echo($b);
	//5
	echo "<br>";
	echo "square root of random number : <br>";
	echo sqrt($b);
?>