<?php 
    include_once('./config/serverConfig.php');

    class Kamar {
        public $conn;

        public function __construct(){
            $this->conn = new mysqli(dbHost, dbUsername, dbPassword, dbName);

            if ($this->conn->connect_error){
                echo "Connection failed : ". $this->conn->connect_error;
            }else {
                return $this->conn;
            }
        }

        public function viewKamar(){
            $sql = "SELECT * FROM kamar";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertKamar($post){
            $nokamar = $this->conn->real_escape_string($_POST['nokamar']);
            $tipekamar = $this->conn->real_escape_string($_POST['tipekamar']);

            $sql = "INSERT INTO kamar VALUES ('$nokamar', '$tipekamar')";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function getKamar($id){
            $sql = "SELECT * FROM kamar WHERE nokamar='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function updateKamar($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $nokamar = $this->conn->real_escape_string($_POST['nokamar']);
            $tipekamar = $this->conn->real_escape_string($_POST['tipekamar']);

            $sql = "UPDATE kamar SET nokamar='$nokamar', tipekamar='$tipekamar'
                    WHERE nokamar='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteKamar($id){
            $sql = "DELETE FROM kamar WHERE nokamar='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>