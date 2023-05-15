<?php

include 'database.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $student_id = $_POST['student_id'];
  $student_name = $_POST['student_name'];
  $student_lastName = $_POST['student_lastName'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];

  // TODO: Validate and sanitize the form data

  // Validate and sanitize the form data
  $id = trim($_POST['student_id']);
  $name = trim($_POST['student_name']);
  $lastname = trim($_POST['student_lastName']);
  $email = trim($_POST['email']);
  $gender = trim($_POST['gender']);
  $phone = trim($_POST['phone']);
  $city = trim($_POST['city']);

  // Validate required fields
  if (empty($student_id) || empty($student_name) || empty($student_lastName) || empty($email)) {
    echo 'Please fill in all required fields.';
    // You can add additional error handling or redirection as needed
    exit;
  }

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email format.';
    // You can add additional error handling or redirection as needed
    exit;
  }

  // Sanitize the data to prevent SQL injection
  $student_id = mysqli_real_escape_string($conn, $student_id);
  $student_name = mysqli_real_escape_string($conn, $student_name);
  $student_lastName = mysqli_real_escape_string($conn, $student_lastName);
  $email = mysqli_real_escape_string($conn, $email);
  $gender = mysqli_real_escape_string($conn, $gender);
  $phone = mysqli_real_escape_string($conn, $phone);
  $city = mysqli_real_escape_string($conn, $city);

  


  // Prepare and execute the SQL query to insert the student
  $sql = "INSERT INTO addstudent (student_id, student_name, student_lastname, email, gender, phone, city)
          VALUES ('$student_id', '$student_name', '$student_lastName', '$email', '$gender', '$phone', '$city')";
          $conn->commit();

  if ($conn->query($sql) === true) {
    echo 'Student added successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
