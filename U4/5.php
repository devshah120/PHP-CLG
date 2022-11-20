<!-- 5. Create a PHP script that will ask user to upload a image file
in a folder and checks whether it is successfully uploaded or not -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="sub" value="submit">
	</form>
<?php
if (isset($_POST['sub'])) 
{
	$extension=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
	if ($extension=="jpg" || $extension=="png") 
	{
		print_r($_FILES['image']);
		$fname=$_FILES['image']['name'];
		$fsize=$_FILES['image']['size'];
		$ftmp=$_FILES['image']['tmp_name'];
		$ftype=$_FILES['image']['type'];
		echo "file is image <br>";
		echo "file extension is ".$extension;
		move_uploaded_file($ftmp,"C:/xampp/htdocs/PHP/Unit-4_Assignment".$fname);
	}
	else
	{
		echo "only jpg or png";
	}
}
?>