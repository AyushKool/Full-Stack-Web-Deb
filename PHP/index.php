<html>
<head>
    <title>php assignment</title>
</head>
<body>
    <form method="post">
        <label>Name</label> <input type="text" name="name" required> <br />
        <label>Email</label> <input type="email" name="email" required> <br />
        <label>Contact</label> <input type="text" name="contact" required> <br />
        <label>City</label> <input type="text" name="city" required> <br />
        <label>Course</label>
        <select name="course" required>
            <option>B.Tech</option>
            <option>B.Sc</option>
            <option>B.A</option>
        </select> <br />

	   <label>Interests</label>
        <input type="text" name="interests" required> <br>

        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$course = $_POST['course'];
$interest = $_POST['interests'];

if (empty($name) or empty($email) or empty($contact) or empty($city) or empty($course) or empty($interest)) {
	echo "Fill all inputs.";
 }
else if (isset($_POST['submit'])) {
	echo "Name : $name <br/>";
	echo "email : $email <br/>";
	echo "contact : $contact <br/>";
	echo "course : $course <br/>";
	echo "Interest : $interest";
}
?>
