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
            $tipebayar = $this->conn->real_escape_string($_POST['tipebayar']);
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
            }
        }
    }
?>