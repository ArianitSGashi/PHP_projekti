<!DOCTYPE html>
<html>
<head>
	<title>Save Data</title>
</head>
<body>
	<?php include "database.php";
		//check if form has been submitted
		if(isset($_POST['submit'])){

			//sanitize input data
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$message = mysqli_real_escape_string($conn, $_POST['message']);

			//insert data into database
			$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
			if(mysqli_query($conn, $sql)){
				echo "<p>Message saved successfully!</p>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			//close database connection
			mysqli_close($conn);
		}
	?>

	<form method="post" action="">
		<label>Name:</label>
		<input type="text" name="name"><br>

		<label>Email:</label>
		<input type="email" name="email"><br>

		<label>Message:</label>
		<textarea name="message"></textarea><br>

			<input type="submit" name="submit" value="Save">
	</form>
</body>
</html>
