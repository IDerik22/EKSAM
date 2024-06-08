<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'password') {
    $_SESSION['loggedin'] = true;
    header('Location: dashboard.php');
} else {
    echo "Vale kasutajanimi või parool.";
}
?>
