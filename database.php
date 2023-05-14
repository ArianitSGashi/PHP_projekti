<?php
    $servername='localhost:3306';
    $username='root';
    $password='#niti1db3ms';
    $dbname = "php_projekti";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_connect_error());
        }
        echo 'Connected successfully';
?>
