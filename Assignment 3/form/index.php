<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'web';
$conn = mysqli_connect($hostname, $username, $password, $database_name);
$sum = null;
if (isset($_POST["submit"])) {
	$n = $_POST["name"];
	$e = $_POST["email"];
	$g = $_POST["gender"];
	$ct = $_POST["city"];
	$sql = "INSERT INTO user (`username`,`email`,`gender`,`city`) VALUES ('$n','$e','$g','$ct')";
	mysqli_query($conn, $sql);
}
$sql = "select * from user";
$res = mysqli_query($conn, $sql);
?>
<html>

<head>
	<title>Assignment 3</title>
	<style>
		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}

		th {
			text-align: left;
		}
	</style>
</head>

<body>
	<h2>Form (Q1, Q3, Q4, Q5)</h2>
	<form method="POST" action="index.php">
		<table>
			<tr>
				<th>Name*</th>
				<td><input type="text" placeholder=" Name" name="name" required></td>
			</tr>
			<tr>
				<th>E-Mail Address*</th>
				<td><input type="email" placeholder="Mail@gmail.com" name="email" required></td>
			</tr>
			<tr>
				<th>Gender*</th>
				<td>
					<input type="radio" name="gender" value="Male" checked>Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Other">Other
				</td>
			</tr>
			<tr>
				<th>City*</th>
				<td><select name="city">
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
		</table>
		<input type="submit" value="submit" name="submit">
	</form>
	<?php if ($res != false && $res->num_rows != 0) : ?>
		<h2 align="center">Table:</h2>
		<table align="center" cellpadding="10">
			<tr>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Gender</th>
				<th>City</th>
				<th colspan="2">Actions</th>
			</tr>
			<?php while ($row = $res->fetch_assoc()) : ?>
				<tr>
					<td><?php echo $row['username'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['gender'] ?></td>
					<td><?php echo $row['city'] ?></td>
					<td><a href="edit.php?id=<?php echo $row['id'] ?> "><input type="button" name="edit" value="edit"></a></td>
					<td><a href="delete.php?id=<?php echo $row['id'] ?>"><input type="button" name="delete" value="delete"></a></td>
				</tr>
			<?php endwhile; ?>
		</table>
	<?php endif; ?>
</body>

</html>