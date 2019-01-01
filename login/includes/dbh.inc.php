<?php
//Database Handler//

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Revelation21:3,4";
$dBName = "svs_login";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

//Database connection error handler//

if (!$conn) {
	die("Database connection failed: ".mysqli_connect_error());
}