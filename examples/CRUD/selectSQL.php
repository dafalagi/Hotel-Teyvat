<?php
include_once 'koneksiSQL.php';

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
?>