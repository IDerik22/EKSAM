<?php
$servername = "localhost";
$username = "pilet4";
$password = "Passw0rd!";
$dbname = "linuxpilet4";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ühendus ebaõnnestus: " . $conn->connect_error);
}
?>
