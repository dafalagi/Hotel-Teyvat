<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$nama 		= $_POST['nama'];
	$checkin 	= $_POST['checkin'];
	$checkout 	= $_POST['checkout'];
	$jeniskamar	= $_POST['jeniskamar'];

		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}