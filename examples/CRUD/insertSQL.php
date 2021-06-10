<?php
include_once 'koneksiSQL.php';

$sql = "INSERT INTO akun
VALUES ('dafalagi', 'dafalagi@gmail.com', 'dafarizky123')";
$sql1 = "INSERT INTO kamar
VALUES ('111', 'Suite')";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>