<!DOCTYPE html>
<html>
<head>
	<title>Save Data</title>
</head>
<body>
	<?php 
		//check if form has been submitted
		if(isset($_POST['submit'])){

			include 'database.php';

			//sanitize input data
			$courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
			$description = mysqli_real_escape_string($conn, $_POST['description']);
			$price = mysqli_real_escape_string($conn, $_POST['price']);
			$startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
			$endDate = mysqli_real_escape_string($conn, $_POST['endDate']);
			

			//insert data into database
			$sql = "INSERT INTO course (courseName, description , price, startDate, endDate) VALUES ('$courseName', '$description', '$price','$startDate', '$endDate')";
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
		<input type="text" name="courseName"><br>

		<label>Description:</label>
		<input type="textfield" name="description"><br>

		<label>Price:</label>
		<input type="number" name="price"/>

		<label>startDate:</label>
		<input  type="date" name="startDate"/>

		<label>enddate:</label>
		<input  type="date" name="endDate"/>

			<input type="submit" name="submit" value="Save">
	</form>
</body>
</html>
