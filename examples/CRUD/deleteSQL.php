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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>