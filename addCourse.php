<?php

include 'database.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $course_id = $_POST['course_id'];
  $courseName = $_POST['courseName'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];
  

  // TODO: Validate and sanitize the form data

  // Validate and sanitize the form data
  $course_id = trim($_POST['course_id']);
  $courseName = trim($_POST['courseName']);
  $description = trim($_POST['description']);
  $price = trim($_POST['price']);
  $startDate = trim($_POST['startDate']);
  $endDate = trim($_POST['endDate']);


  // Validate required fields
  if (empty($course_id) || empty($courseName) || empty($description) || empty($startDate)|| empty($endDate)) {
    echo 'Please fill in all required fields.';
    // You can add additional error handling or redirection as needed
    exit;
  }

  

  // Sanitize the data to prevent SQL injection
  $course_id = mysqli_real_escape_string($conn, $course_id);
  $courseName = mysqli_real_escape_string($conn, $courseName);
  $description = mysqli_real_escape_string($conn, $description);
  $startDate = mysqli_real_escape_string($conn, $startDate);
  $endDate = mysqli_real_escape_string($conn, $endDate);
  

  


  // Prepare and execute the SQL query to insert the student
  $sql = "INSERT INTO course (course_id, courseName, description , startDate, endDate)
          VALUES ('$course_id', '$courseName', '$description', '$startDate', '$endDate')";
          $conn->commit();

  if ($conn->query($sql) === true) {
    echo 'Course added successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
