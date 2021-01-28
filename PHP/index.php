<html>

<head>
	<title>php assignment</title>
	<style>
		table {
			width: 75%;
		}

		th,
		td,
		table {
			border: 1px solid black;
			text-align: center;
			border-collapse: collapse;
			margin: auto;
			padding: auto;

		}
	</style>
	<script>
		document.getElementById('submitBtn').onlick = function () {
			// preventDefault();
			if (!validInterests()) alert("Please Correct Form");
			else document.getElementById('table').style.display = "inherit";
		};

		function validInterests() {
			let options = document.getElementById('interest').options, n = 0;
			for (let op of options) {
				if (op.selected)
					n++;
			}
			return n > 3;
		}
	</script>

</head>

<body>
	<form method="post">
		<label>Name</label> <input type="text" name="name" required> <br />
		<label>Email</label> <input type="email" name="email" required> <br />
		<label>Contact</label> <input type="text" name="contact" minlength="10" maxlength="10" required> <br />
		<label>City</label> <input type="text" name="city" required> <br />
		<label>Course</label>
		<select name="course" required>
			<option>B.Tech</option>
			<option>B.Sc</option>
			<option>B.A</option>
		</select> <br />

		<label>Interests</label>
		<input type="checkbox" name="interests" value="Blogging">
		<label for='Blogging'>Blogging</label>

		<input type="checkbox" name="interests" value="Sports">
		<label for='Sports'>Sports</label>

		<input type="checkbox" name="interests" value="Art">
		<label for='Art'>Art</label>
		

		<!-- <option value="Blogging">Blogging</option>
		<option value="Sports">Sports</option>
		<option value="Art">Art</option>
		<option value="Gaming">Gaming</option>
		<option value="Traveling">Traveling</option>
		<option value="Music">Music</option>
		<option value="Cooking">Cooking</option>
		<option value="Reading">Reading</option>
		</select> -->
		
		<br>

		<input id="submitBtn" type="submit" name="submit">
	</form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	echo "<table id=\"table\">
	<tr>
	    <th>Name</th>
	    <th>Email</th>
	    <th>Contact</th>
	    <th>City</th>
	    <th>Course</th>
	    <th>Interest</th>
	</tr>
	<tr>
	    <td>"  . $_POST['name'] . "</td>
	    <td>"  . $_POST['email'] . "</td>
	    <td>" .  $_POST['contact'] . "</td>
	    <td>" .  $_POST['city'] . "</td>
	    <td>" .  $_POST['course'] . "</td>
	    <td>" .  $_POST['interests'] . "</td>
	</tr>
 </table>";
}
?>
