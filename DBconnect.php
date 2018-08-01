<?php

$hostname="localhost";
$username="aikram2";
$password="Crick3t1";
$dbname="aikram2";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>