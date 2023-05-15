<?php

include 'database.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $id = $_POST['id'];
  $teacher_name = $_POST['teacher_name'];
  $teacher_lastName = $_POST['teacher_lastName'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];

  // TODO: Validate and sanitize the form data

  // Validate and sanitize the form data
  $id = trim($_POST['id']);
  $teacher_name = trim($_POST['teacher_name']);
  $teacher_lastName = trim($_POST['teacher_lastName']);
  $email = trim($_POST['email']);
  $gender = trim($_POST['gender']);
  $phone = trim($_POST['phone']);
  $city = trim($_POST['city']);

  // Validate required fields
  if (empty($id) || empty($teacher_name) || empty($teacher_lastName) || empty($email)) {
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
  $id = mysqli_real_escape_string($conn, $id);
  $teacher_name = mysqli_real_escape_string($conn, $teacher_name);
  $teacher_lastName = mysqli_real_escape_string($conn, $teacher_lastName);
  $email = mysqli_real_escape_string($conn, $email);
  $gender = mysqli_real_escape_string($conn, $gender);
  $phone = mysqli_real_escape_string($conn, $phone);
  $city = mysqli_real_escape_string($conn, $city);

  


  // Prepare and execute the SQL query to insert the student
  $sql = "INSERT INTO addteacher (id, teacher_name, teacher_lastName, email, gender, phone, city)
          VALUES ('$id', '$teacher_name', '$teacher_lastName', '$email', '$gender', '$phone', '$city')";
          $conn->commit();

  if ($conn->query($sql) === true) {
    echo 'Teacher added successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
