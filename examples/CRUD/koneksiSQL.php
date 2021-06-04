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