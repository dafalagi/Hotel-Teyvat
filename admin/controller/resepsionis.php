<?php
    include_once('./config/serverConfig.php');

    class Resepsionis {
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

        public function viewResepsionis(){
            $sql = "SELECT * FROM resepsionis";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getResp($id){
            $sql = "SELECT * FROM resepsionis WHERE idpegawai='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function updateResp($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $idpegawai = $this->conn->real_escape_string($_POST['idpegawai']);
            $namapegawai = $this->conn->real_escape_string($_POST['namapegawai']);

            $sql = "UPDATE resepsionis SET idpegawai='$idpegawai', namapegawai='$namapegawai'
                    WHERE idpegawai='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteResp($id){
            $sql = "DELETE FROM resepsionis WHERE idpegawai='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertResp($post){
            $idpegawai = $this->conn->real_escape_string($_POST['idpegawai']);
            $idmanajer = $this->conn->real_escape_string($_POST['idmanajer']);
            $namapegawai = $this->conn->real_escape_string($_POST['namapegawai']);

            $sql = "INSERT INTO resepsionis VALUES ('$idpegawai', '$idmanajer', '$namapegawai')";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>