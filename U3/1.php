<!-- 1. Create a web application form which includes nickname,
firstname, memo as field. Ask the user to enter the values and
display the same on the web page. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		NickName:<input type="text" name="nname"><br>
		FirstName:<input type="text" name="fname"><br>
		Memo:<input type="number" name="memo"><br>
		<input type="submit" name="sub" value="Submit">
	</form>
</body>
</html>

<?php
	if (isset($_POST['sub'])) 
	{
		$nickname=$_POST['nname'];
		$firstname=$_POST['fname'];
		$memo=$_POST['memo'];

		echo "Your NickName is :".$nickname."<br>";
		echo "Your FirstName is :".$firstname."<br>";
		echo "Your memo is :".$memo."<br>";
	}
?>