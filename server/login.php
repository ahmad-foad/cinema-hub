<?php

$username = $_POST['username'];
$password = $_POST['password'];

$pdo = new PDO('sqlite:../database/cinema-hub.db');

$statement = $pdo->prepare("SELECT * FROM users WHERE username = ?");

$statement->execute([$username]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Password is correct, set session variables
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    // Redirect to the home page after successful login
    header('Location: /index.html');
} else {
    // Invalid credentials, redirect back to login page with error message
    header('Location: /login.html?error=invalid_credentials');
}