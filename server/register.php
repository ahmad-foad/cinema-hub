<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];

$pdo = new PDO('sqlite:../database/cinema-hub.db');

$statement = $pdo->prepare("INSERT INTO users (first_name, last_name, username, password) VALUES (?, ?, ?, ?)");

$statement->execute([
    $firstName,
    $lastName,
    $username,
    password_hash($password, PASSWORD_BCRYPT)
]);

// Redirect to the login page after successful registration
header('Location: /login.html');