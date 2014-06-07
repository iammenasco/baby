<?php
include 'con.php';
include 'model.php';

if (function_exists('conBaby')) {
	$con = conBaby();
}

$boyQuery = boyCount($con);
$boyCount = $boyQuery->fetch(PDO::FETCH_ASSOC);
$newBoyCount = $boyCount['boy'] + 1;
$currentBoyCount = $boyCount['boy'];
error_log($newBoyCount);
error_log($currentBoyCount);

$girlQuery = girlCount($con);
$girlCount = $girlQuery->fetch(PDO::FETCH_ASSOC);
$newGirlCount = $girlCount['girl'] + 1;
$currentGirlCount = $girlCount['girl'];

include 'view.php';

?>