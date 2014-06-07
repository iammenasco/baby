<?php

include 'index.php';

if (function_exists('conBaby')) {
	$con = conBaby();
}

if (isset($con)) {
	girlVote($con, $newGirlCount);
}

function girlVote($con, $newGirlCount) {
	error_log('girl vote');
	error_log($newGirlCount);
	$query = "UPDATE votes SET girl = '$newGirlCount' WHERE votes.vote_pk = 1;";
	$con->exec($query);
}

?>