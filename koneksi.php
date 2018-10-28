<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$db ="modul8";

$conn = new mysqli($hostname, $username, $pass,$db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>