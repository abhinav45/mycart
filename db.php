<?php

$servername = "localhost:3325";
$username = "root";
$password = "";
$db = "mystore";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>