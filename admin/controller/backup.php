<?php
    include_once('config/serverConfig.php');

    class Backup {
        public function beginBackup() {
            define("BACKUP_PATH", "C:/Users/dafau/Documents/");

            $server_name   = dbHost;
            $username      = dbUsername;
            $password      = dbPassword;
            $database_name = dbName;
            $date_string   = date("Ymd");

            $cmd = "D:/wamp64/bin/mysql/mysql5.7.31/bin/mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} > " . BACKUP_PATH . "{$date_string}_{$database_name}.sql";

            exec($cmd);

            return $msg = "Backup Result : OK";
        }
    }
?>