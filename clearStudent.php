<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $student_id = $_POST['student_id'];

  $student_id = trim($_POST['student_id']);
    // Validate required fields
    if (empty($student_id)) {
        echo 'Please fill in all required fields.';
        
        exit;
      }
    
      
    
     
  $student_id = mysqli_real_escape_string($conn, $student_id);
   

  $sql = "DELETE FROM addstudent WHERE student_id = '$student_id'";

  if ($conn->query($sql) === true) {
    echo 'Student cleared successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }


  $conn->close();
}
?>
