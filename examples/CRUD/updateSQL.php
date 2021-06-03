<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db10119113";

// Create connection
$conn =  new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn -> connect_error) {
    echo "Error " . $conn -> connect_errno . " : " . $conn -> connect_error;
}

$sql = "UPDATE karyawan SET Nama='Ariel' WHERE Nama='Raisya'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
$conn->close();
