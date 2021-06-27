<?php
    include_once('./config/serverConfig.php');

    class Tamu {
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

        public function viewTamu(){
            $sql = "SELECT * FROM tamu";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getTamu($id){
            $sql = "SELECT * FROM tamu WHERE noid='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertTamu($post){
            $noid = $this->conn->real_escape_string($_POST['noid']);
            $username = $this->conn->real_escape_string($_POST['username']);
            $tipeid = $this->conn->real_escape_string($_POST['tipeid']);
            $nama = $this->conn->real_escape_string($_POST['nama']);

            $sql = "INSERT INTO tamu VALUES ('$noid', '$username', '$tipeid', '$nama')";
            $result = $this->conn->query($sql);
            
            return $result;
        }

        public function updateTamu($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $noid = $this->conn->real_escape_string($_POST['noid']);
            $tipeid = $this->conn->real_escape_string($_POST['tipeid']);
            $nama = $this->conn->real_escape_string($_POST['nama']);

            $sql = "UPDATE tamu SET noid='$noid', tipeid='$tipeid', nama='$nama'
                    WHERE noid='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteTamu($id){
            $sql = "DELETE FROM tamu WHERE noid='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>