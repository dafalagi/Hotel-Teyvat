    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Koneksi Database</title>
    </head>

    <style>
        h1 {
            display: flex;
            justify-content: center;
        }
    </style>

    <body>
        <h1>
            Tes Koneksi Database
        </h1>
    </body>

    </html>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "10119113";
    $database = "akademik";

    // Membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Cek koneksi
    if (!$conn) {
        die("<center>Koneksi Gagal: " . mysqli_connect_error());
    }
    echo "<center>Koneksi Berhasil";
    ?>