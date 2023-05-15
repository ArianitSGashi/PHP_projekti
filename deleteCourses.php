<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $course_id = $_POST['course_id'];
  $courseName= $_POST['courseName'];

  $course_id = trim($_POST['course_id']);
  $courseName = trim($_POST['courseName']);
    
    if (empty($course_id)&&empty($courseName)) {
        echo 'Please fill in all required fields.';
        
        exit;
      }
    
      
    
     
  $course_id = mysqli_real_escape_string($conn, $course_id);
  $courseName = mysqli_real_escape_string($conn, $courseName);
   

  $sql = "DELETE FROM course WHERE course_id = '$student_id' OR courseName = '$courseName'";

  if ($conn->query($sql) === true) {
    echo 'Course cleared successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }


  $conn->close();
}
?>