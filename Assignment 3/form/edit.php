<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'web';
$conn = mysqli_connect($hostname, $username, $password, $database_name);
$id = $_GET['id'];
$n = null;
$e = null;
$g = null;
$ct = null;
$row = null;

if (isset($_POST["update"])) {
	// echo 'hello';
	$n = $_POST["name"];
	$e = $_POST["email"];
	$g = $_POST["gender"];
	$ct = $_POST["city"];
	$sql = "UPDATE `user` set `username`='$n',`email`='$e',`gender`='$g',`city`='$ct' where `id`=$id";
	if (mysqli_query($conn, $sql) == false) echo 'update failed';
	header("Location:index.php");
	exit();
} else {
	$sql = "select * from user where `id`=$id";
	$res = mysqli_query($conn, $sql);
	$row = $res->fetch_assoc();
	$g = $row['gender'];
}
?>
<html>

<head>
	<title>Update Details</title>
</head>

<body>
	<h2>Please Update Your Details</h2>
	<form method="POST" action="edit.php?id=<?php echo $id ?>">
		<table align="center" cellspacing=" 25">
			<tr>
				<th>Name*</th>
				<td><input type="text" placeholder=" Name" style="width: 395px" name="name" value="<?php echo $row['username'] ?>" required></td>
			</tr>
			<tr>
				<th>E-Mail Address*</th>
				<td><input type="email" placeholder="Mail@gmail.com" style="width: 395px " name="email" value="<?php echo $row['email'] ?>" required></td>
			</tr>
			<tr>
				<th>Gender*</th>
				<td style="color: grey">
					<input type="radio" name="gender" value="Male" <?php if ($g == "Male") {
																		echo "checked";
																	} ?>>Male
					<input type="radio" name="gender" value="Female" <?php if ($g == "Female") {
																			echo "checked";
																		} ?>>Female
					<input type="radio" name="gender" value="Other" <?php if ($g == "Other") {
																		echo "checked";
																	} ?>>Other
				</td>
			</tr>
			<tr>
				<th>City*</th>
				<td><select style="width: 403px" name="city">
						<option hidden><?php echo $row['city'] ?></option>
						<option>Dehradun</option>
						<option>Delhi</option>
						<option>Jaipur</option>
						<option>Lucknow</option>
						<option>Mumbai</option>
						<option>Hyderabad</option>
						<option>Kolkata</option>
						<option>Chennai</option>
						<option>Bhopal</option>
						<option>Leh</option>
					</select></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="update" name="update"></td>
			</tr>
		</table>
	</form>
</body>

</html>