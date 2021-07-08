<?php
    include_once('./php/config/serverConfig.php');

    class Tamu {
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

        public function addtamu($post){
            $noid = $this->conn->real_escape_string($_POST['noid']);
            $username = $this->conn->real_escape_string($_SESSION['username']);
            $tipeid = $this->conn->real_escape_string($_POST['tipeid']);
            $nama = $this->conn->real_escape_string($_POST['nama']);

            $sql = "INSERT INTO tamu VALUES ('$noid','$username','$tipeid','$nama')";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>