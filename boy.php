<?php

include 'index.php';

if (function_exists('conBaby')) {
	$con = conBaby();
}

if (isset($con)) {
	boyVote($con, $newBoyCount);
}

function boyVote($con, $newBoyCount) {
	$query = "UPDATE votes SET boy = '$newBoyCount' WHERE votes.vote_pk = 1;";
	$con->exec($query);
}

?>