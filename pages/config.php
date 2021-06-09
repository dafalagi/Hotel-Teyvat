<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db10119113";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $database);

    // Cek koneksi
    if ($conn -> connect_errno == 0) {
        echo "<center>Koneksi Berhasil";
    } else {
        echo "Error " . $conn -> connect_errno . " : " . $conn -> connect_error;
    }
    ?>