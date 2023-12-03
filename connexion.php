<?php

$host = 'localhost';
$dbname = 'jeu';
$user = 'root';
$pass = '';

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
