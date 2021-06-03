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

$sql = "SELECT * FROM produk";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    // output data of each row
    while ($row = $result -> fetch_assoc()) {
        echo "Id Produk : " . $row["IdProduk"] . " | Nama : " . $row["Nama"] . " | Id Kategori : " . $row["IdKategori"]
        . " | Skala : " . $row["Skala"] . " | Pemasok : " . $row["Pemasok"] . " | Deskripsi : " . $row["Deskripsi"]
        . " | Stok : " . $row["Stok"] . " | Harga Beli : " . $row["HargaBeli"]
        . " | Harga Jual : " . $row["HargaJual"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn -> close();
