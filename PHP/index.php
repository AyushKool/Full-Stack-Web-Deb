<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form>
		Name 		<input type="text" name="name"> <br>
		Email 		<input type="email" name="email"> <br>
		Contact 		<input type="tel" name="contact"> <br>
		City 		<input type="text" name="city"> <br>
		Course 		<input type="text" name="course"> <br>
		Interests 	<input type="text" name="interests"> <br>

		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit']) && isset($_POST['var1']) && isset($_POST['var2']))
	{
		$sum = $_POST['var1'] +  $_POST['var2'];
		echo "Sum is $sum";
	}
	else
		echo "No input";
?>
