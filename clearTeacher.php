<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $id = $_POST['id'];

  $id = trim($_POST['id']);
    // Validate required fields
    if (empty($id)) {
        echo 'Please fill in all required fields.';
        
        exit;
      }
    
      
    
     
  $id = mysqli_real_escape_string($conn, $id);
   

  $sql = "DELETE FROM addteacher WHERE id = '$id'";

  if ($conn->query($sql) === true) {
    echo 'Teacher cleared successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }


  $conn->close();
}
?>
