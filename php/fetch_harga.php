<?php
    include_once('config/serverConfig.php');
    if (isset($_POST['get_tipe']) and isset($_POST['get_kasur'])) {
        $conn = new mysqli(dbHost, dbUsername, dbPassword, dbName);

        $tipe = $_POST['get_tipe'];
        $kasur = $_POST['get_kasur'];

        $sql = "SELECT Harga FROM kamar WHERE TipeKamar='$tipe' AND JumlahKasur='$kasur' LIMIT 1";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        echo $row['Harga'];
    }
?>