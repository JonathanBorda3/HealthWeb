<?php

$sname= "localhost";
$unmae= "Jona";
$password = "10786034";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}