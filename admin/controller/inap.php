<?php 
    include_once('./config/serverConfig.php');

    class Inap {
        public $conn;

        public function __construct(){
            $this->conn = new mysqli(dbHost, dbUsername, dbPassword, dbName);

            if ($this->conn->connect_error){
                echo "Connection failed : ". $this->conn->connect_error;
            }else {
                return $this->conn;
            }
        }

        public function viewInap(){
            $sql = "SELECT * FROM inap";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertInap($post){
            $notransaksi = $this->conn->real_escape_string($_POST['notransaksi']);
            $noid = $this->conn->real_escape_string($_POST['noid']);
            $jumlahtamu = $this->conn->real_escape_string($_POST['jumlahtamu']);
            $checkin = $this->conn->real_escape_string($_POST['checkin']);
            $checkout = $this->conn->real_escape_string($_POST['checkout']);

            $sql = "INSERT INTO inap(NoTransaksi, NoId, JumlahTamu, CheckIn, CheckOut) 
                    VALUES ('$notransaksi', '$noid', '$jumlahtamu', '$checkin', '$checkout')";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getInap($id){
            $sql = "SELECT * FROM inap WHERE idinap='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function updateInap($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $jumlahtamu = $this->conn->real_escape_string($_POST['jumlahtamu']);
            $checkin = $this->conn->real_escape_string($_POST['checkin']);
            $checkout = $this->conn->real_escape_string($_POST['checkout']);

            $sql = "UPDATE inap SET jumlahtamu='$jumlahtamu', 
                    checkin='$checkin', checkout='$checkout'
                    WHERE idinap='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteInap($id){
            $sql = "DELETE FROM inap WHERE idinap='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>