<?php
    include_once('./config/serverConfig.php');

    class Transaksi {
        public $conn;

        public function __construct()
        {
            $this->conn = new mysqli(dbHost, dbUsername, dbPassword, dbName);

            if ($this->conn->connect_error){
                echo "Connection failed : ". $this->conn->connect_error;
            }else {
                return $this->conn;
            }
        }

        public function viewTransaksi(){
            $sql = "SELECT * FROM transaksi";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getTransaksi($id){
            $sql = "SELECT * FROM transaksi WHERE NoTransaksi='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertTransaksi($post){
            $nominal = $this->conn->real_escape_string($_POST['nominal']);
            $tipebayar = $this->conn->real_escape_string($_POST['tipebayar']);
            $atasnama = $this->conn->real_escape_string($_POST['atasnama']);

            $sql = "INSERT INTO transaksi (nominal,tipebayar,atasnama) VALUES ('$nominal', '$tipebayar', '$atasnama')";
            $result = $this->conn->query($sql);
            
            return $result;
        }

        public function updatetransaksi($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $notransaksi = $this->conn->real_escape_string($_POST['notransaksi']);
            $nominal = $this->conn->real_escape_string($_POST['nominal']);
            $tipebayar = $this->conn->real_escape_string($_POST['tipebayar']);
            $atasnama = $this->conn->real_escape_string($_POST['atasnama']);

            $sql = "UPDATE transaksi SET notransaksi='$notransaksi', nominal='$nominal', tipebayar='$tipebayar',
                    atasnama='$atasnama' WHERE notransaksi='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deletetransaksi($id){
            $sql = "DELETE FROM transaksi WHERE notransaksi='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>