<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "hotel_teyvat";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi  
if ($conn -> connect_error) {
    echo "Error " . $conn -> connect_errno . " : " . $conn -> connect_error;
}
?>