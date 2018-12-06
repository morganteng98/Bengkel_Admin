<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "bengkol";

$connection = mysqli_connect($servername, $username, $password, $databasename);

if (!$connection){
	echo "error: ". mysqli_connect_error();
	exit();
}

?>