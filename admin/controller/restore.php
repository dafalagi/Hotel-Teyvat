<?php
    include_once('config/serverConfig.php');

    class Restore {
        public function beginRestore() {
            $restore_file  = "C:/Users/dafau/Documents/20210813_hotel_teyvat.sql";
            $server_name   = dbHost;
            $username      = dbUsername;
            $password      = dbPassword;
            $database_name = dbName;

            $cmd = "D:/wamp64/bin/mysql/mysql5.7.31/bin/mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
            exec($cmd);

            return $msg = "Restore Result : OK";
        }
    }
?>