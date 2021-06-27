<?php
    include_once('./config/serverConfig.php');

    class Manajer {
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

        public function viewManajer(){
            $sql = "SELECT * FROM manajer";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getManajer($id){
            $sql = "SELECT * FROM manajer WHERE idmanajer='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertManajer($post){
            $idmanajer = $this->conn->real_escape_string($_POST['idmanajer']);
            $namamanajer = $this->conn->real_escape_string($_POST['namamanajer']);

            $sql = "INSERT INTO manajer VALUES ('$idmanajer', '$namamanajer')";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function updateManajer($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $idmanajer = $this->conn->real_escape_string($_POST['idmanajer']);
            $namamanajer = $this->conn->real_escape_string($_POST['namamanajer']);

            $sql = "UPDATE manajer SET idmanajer='$idmanajer', namamanajer='$namamanajer'
                    WHERE idmanajer='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteManajer($id){
            $sql = "DELETE FROM manajer WHERE idmanajer='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>