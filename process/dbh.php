<?php

$servername = "us-cdbr-east-05.cleardb.net";
$dBUsername = "b3f410f2854486";
$dbPassword = "33e32c06";
$dBName = "heroku_6a79d6ef5482fee";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>