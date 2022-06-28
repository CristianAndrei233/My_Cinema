<?php
$conn = new mysqli('localhost', 'root', 'root', 'cinema', 3307);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection succes!";
}
?>