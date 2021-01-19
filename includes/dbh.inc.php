<?php

$servername = "dmsweb.hopto.org";
$database	= "DB";
$password	= "PASSWORD";
$username	= "USERNAME";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Connection Failed: ". mysqli_connect_error());
}