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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>