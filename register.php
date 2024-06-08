<?php
include 'db.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$category = $_POST['category'];
$email = $_POST['email'];

$sql = "SELECT * FROM participants WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Sellise emailiga inimene on juba registreeritud.";
} else {
    $sql = "INSERT INTO participants (firstName, lastName, category, email) VALUES ('$firstName', '$lastName', '$category', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registreerimine õnnestus!";
    } else {
        echo "Registreerimine ebaõnnestus: " . $conn->error;
    }
}

$conn->close();
?>
