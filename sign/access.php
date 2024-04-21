<?php
$server = "localhost";
$user = "root";
$pass = "";
$DBname = "agence_de_voyage";

$conn = mysqli_connect($server, $user, $pass,$DBname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";