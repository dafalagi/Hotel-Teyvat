<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "10119113_dafarizkyfahreza_um";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nip, nama FROM karyawan";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 1) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "NIP: " . $row["nip"] . " | Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
