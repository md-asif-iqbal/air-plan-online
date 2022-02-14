<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "MONACO_AIRPORT";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}else{
	echo "";
}

?>