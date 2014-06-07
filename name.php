<?php
include 'con.php';

if (isset($_GET['name'])) {
	$name = test_input($_GET['name']);
} else {
	$name = false;
}

if (isset($_GET['gender'])) {
	$gender = test_input($_GET['gender']);
} else {
	$gender = false;
}

if ((function_exists('conBaby') == true) and ($name == true) and ($gender == true)) {
	$con = conBaby();
}

if (isset($con)) {
	name($con, $name, $gender);
}

function name($con, $name, $gender) {
	if ($gender == 'girl') {
		$query = "INSERT INTO names(names_pk, girl_name, boy_name)
					VALUES (NULL, '$name', NULL);";
		$status = $con->exec($query);
	} else if ($gender == 'boy'){
	$query = "INSERT INTO names(names_pk, girl_name, boy_name)
				VALUES (NULL, NULL, '$name');";
	$status = $con->exec($query);
	} else {
		exit;
	}
};

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>