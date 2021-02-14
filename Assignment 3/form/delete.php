<?php
$id = $_GET['id'];
if (isset($_GET['choice'])) {
	if ($_GET['choice'] == 'yes') {
		$hostname = 'localhost';
		$username = 'root';
		$password = '';
		$database_name = 'web';
		$conn = mysqli_connect($hostname, $username, $password, $database_name);
		mysqli_query($conn, "delete from user where `id`=$id");
	}
	header("Location:index.php");
	exit;
}
?>

<html>

<body>
	<button name="Yes"><a href="delete.php?id=<?php echo $id ?>&choice=yes">Yes</a></button>
	<button name="No"><a href="delete.php?id=<?php echo $id ?>&choice=no">No</a></button>
</body>

</html>