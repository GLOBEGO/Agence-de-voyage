<?php

function quatre(){
session_start();
// Connect to the database
include "../admin/functions.php";
$conn = connect();

// Get the form data
$email = $_SESSION['email'];
$date = $_POST['date'];
$compagnie = $_POST['label6'];
$num_passengers = $_POST['multiplier1'];
$prix = $_POST['pls1'];

// Insert the data into the reservation table
$sql = "INSERT INTO reservation_vol (email, date, compagnie,num_passengers, prix, classe,destination) VALUES (?, ?, ?, ?, ?, 'premiere','$dest')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssid", $email, $date, $compagnie, $num_passengers, $prix);
$result = $stmt->execute();

// Check for errors
if ($result === FALSE) {
    die("Error: " . $conn->error);
}
else{
    header("location: ../payment/payement.php");
}

// Close the database connection
$conn->close();

// Redirect the user back to the previous page

exit();}

function trois(){
// Connect to the database
session_start();
include "../admin/functions.php";
$conn = connect();

// Get the form data
$email = $_SESSION['email'];
$nom = $_POST['firstSelect'];
$num_passengers = $_POST['multiplier4'];
$duree = $_POST['dtt'];
$prix = $_POST['dtt2'];

// Insert the data into the reservation table
$sql = "INSERT INTO reservation_hotel (email, nom,nb_personne, prix, notation,duree) VALUES (?, ?, ?, ?,'***',?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssid", $email, $nom, $num_passengers, $prix,$duree);
$result = $stmt->execute();

// Check for errors
if ($result === FALSE) {
    die("Error: " . $conn->error);
}
else{
    header("location: ../payment/payement.php");
}

// Close the database connection
$conn->close();

// Redirect the user back to the previous page

exit();
}
function cinq(){
session_start();
// Connect to the database
include "../admin/functions.php";
$conn = connect();

// Get the form data
$email = $_SESSION['email'];
$date = $_POST['date'];
$compagnie = $_POST['label4'];
$num_passengers = $_POST['multiplier'];
$prix = $_POST['pls'];

// Insert the data into the reservation table
$sql = "INSERT INTO reservation_vol (email, date, compagnie,num_passengers, prix, classe,destination) VALUES (?, ?, ?, ?, ?, 'affaires','$dest')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssid", $email, $date, $compagnie, $num_passengers, $prix);
$result = $stmt->execute();

// Check for errors
if ($result === FALSE) {
    die("Error: " . $conn->error);
}
else{
    header("location: ../payment/payement.php");
}

// Close the database connection
$conn->close();

// Redirect the user back to the previous page

exit();
}
?>

