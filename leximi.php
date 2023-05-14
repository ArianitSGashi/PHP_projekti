<?php include "database.php";

// Leximi i të gjitha trajnimeve të mësuesve
$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Emri: " . $row["teacher_name"]. " - Mbiemri: " . $row["teacher_lastName"]. "Email: ". $row["email"]. "<br>";
    }
} else {
    echo "Nuk ka trajnime të disponueshme.";
}

mysqli_close($conn);
?>
