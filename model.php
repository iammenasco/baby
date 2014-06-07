<?php

function boyCount($con) {
	$query = 	"SELECT boy
				FROM votes";
	$count = $con->query($query);
	return $count;
}
function girlCount($con) {
	$query = 	"SELECT girl
				FROM votes";
	$count = $con->query($query);
	return $count;
}
?>