<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="POST">
		Name:<input type="text" name="nm">
		Pass:<input type="password" name="pass">
		<input type="Submit" name="sub" value="Submit" title="hello">
	</form>
	<?php 
		if (isset($_POST['sub'])) 
		{
			if (!empty($_POST['pass'])) 
			{
				$pass=$_POST['pass'];
				$name=$_POST['nm'];
				if (preg_match('/^[a-zA-Z0-9]{7,16}$/', $pass)) 
				{
					echo "Your name is ".$name;
					echo "Your Pass is Good";
				}
				else
				{
					echo "Plese reset your password";
					
				}
			}
			else
			{
				echo "Plese enter password";
			}
		}
		else
		{
			echo "Plese click submit btton";
		}
	?>
</body>
</html>s