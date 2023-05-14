<?php include "database.php";

$emri = "John";
$mbiemri = "Doe";
$email = "john.doe@example.com";
$password1 = "nitiditiardi";
$gender = "Male";
$phone = "049-112-332";
$profesioni = "Fullstack-developer";
$city = "Rahovec";


$sql = "INSERT INTO teacher (teacher_name, teacher_lastName, email, password, gender, phone, profesioni, city) VALUES ('$emri', '$mbiemri', '$email','$password1', '$gender', '$phone', '$profesioni', '$city'  )";

if (mysqli_query($conn, $sql)) {
    echo "Të dhënat u shtuan me sukses.";
} else {
    echo "Gabim gjatë shtimit të të dhënave: " . mysqli_error($conn);
}

mysqli_close($conn);
?>