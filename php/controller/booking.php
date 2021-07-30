<?php
    include_once('./php/config/serverConfig.php');

    class Booking {
        public $conn;

        public function __construct()
        {
            // Create database connection 
                $this->conn =  new mysqli(dbHost, dbUsername, dbPassword, dbName); 
         
                // Check connection 
                if ($this->conn->connect_error) { 
                    echo "Connection failed: " . $this->conn->connect_error; 
                }else {
                    return $this->conn;
                }
        }

        public function booking($post){
            $nominal = $this->conn->real_escape_string($_POST['nominal']);
            $tipebayar = "tunai";
            $atasnama = $this->conn->real_escape_string($_SESSION['nama']);

            $sql1 = "INSERT INTO transaksi (Nominal, TipeBayar, AtasNama)
                    VALUES ('$nominal','$tipebayar','$atasnama')";
            $result1 = $this->conn->query($sql1);

            if ($result1 == true){
                $sql2 = "SELECT * FROM transaksi ORDER BY NoTransaksi DESC LIMIT 1";
                $result2 = $this->conn->query($sql2);
                $row = $result2->fetch_assoc();

                $notransaksi = $this->conn->real_escape_string($row['NoTransaksi']);
                $noid = $this->conn->real_escape_string($_SESSION['noid']);
                $jumlahtamu = $this->conn->real_escape_string($_POST['jumlahtamu']);
                $checkin = $this->conn->real_escape_string($_POST['checkin']);
                $checkout = $this->conn->real_escape_string($_POST['checkout']);

                $sql3 = "INSERT INTO inap (NoTransaksi, NoId, JumlahTamu, CheckIn, CheckOut)
                        VALUES ('$notransaksi','$noid','$jumlahtamu','$checkin','$checkout')";
                $result3 = $this->conn->query($sql3);

                if ($result3 == true) {
                    $sql4 = "SELECT * FROM inap ORDER BY IdInap DESC LIMIT 1";
                    $result4 = $this->conn->query($sql4);
                    $row2 = $result4->fetch_assoc();

                    $idinap = $this->conn->real_escape_string($row2['IdInap']);
                    $jumlahkasur = $this->conn->real_escape_string($_POST['jumlahkasur']);
                    $tipekamar = $this->conn->real_escape_string($_POST['tipekamar']);
                    $jumlahkamar = (int)($_POST['jumlahkamar']);

                    $sql5 = "SELECT * FROM kamar WHERE JumlahKasur='$jumlahkasur' 
                            AND TipeKamar='$tipekamar' LIMIT $jumlahkamar";
                    $result5 = $this->conn->query($sql5);
                    
                    while ($row3 = $result5->fetch_assoc()) {
                        $nokamar = $row3['NoKamar'];
                        $sql6 = "INSERT INTO detailinap VALUES 
                                ('$idinap','$nokamar')";
                        $result6 = $this->conn->query($sql6);
                    }

                    if ($result6 == true) {
                        $sql7 = "SELECT * FROM kamar INNER JOIN detailinap INNER JOIN inap INNER JOIN transaksi
                        ON kamar.`NoKamar`=detailinap.`NoKamar` AND detailinap.`IdInap`=inap.`IdInap` 
                        AND inap.`NoTransaksi`=transaksi.`NoTransaksi`
                        WHERE detailinap.`IdInap`='$idinap'";
                        $result7 = $this->conn->query($sql7);

                        return $result7;
                    }
                }
            }
        }
    }
?>