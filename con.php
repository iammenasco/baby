<?php
function conBaby() {
	$server = 'localhost';
	$username = 'iammenas_baby';
	$password = '8xU-QMh-5mU-msN';
	$db = 'iammenas_baby';
	$dsn = 'mysql:host='.$server.';dbname='.$db;
	$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// Now create the connection object
	try {
		$link = new PDO($dsn, $username, $password, $option);
		error_log('connection to main db established');
	} catch (PDOException $e) {
		header('Location: /errordocs/500.php');
		exit;
	}
	return $link;
}
?>