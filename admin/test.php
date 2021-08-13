<?php
include_once('controller/backup.php');

$backupObj = new Backup();

$msg = $backupObj->beginBackup();

echo $msg;