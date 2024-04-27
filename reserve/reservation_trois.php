<?php
session_start();
include "../admin/functions.php";
$conn = connect();

// Get the form data
$email = $_SESSION['email'];
$date = $_POST['date'];
$nom = $_POST['firstSelect'];
$num_passengers = $_POST['multiplier4'];
$duree = $_POST['dtt'];
$prix = $_POST['dd2'];

// Insert the data into the reservation table
$sql = "INSERT INTO reservation_hotel (email, date, nom,nb_personne, prix, notation,duree) VALUES (?, ?, ?, ?, ?,?, '***')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssid", $email, $date, $nom, $num_passengers, $prix,$duree);
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
?>