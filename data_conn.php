<?php
$sename= "localhost";
$basename= "root";
$password = "";

$data_name = "user_db";

$connection = mysqli_connect($sename, $basename, $password, $data_name);

if (!$connection) {
	echo "Something went wrong";
}
?>
