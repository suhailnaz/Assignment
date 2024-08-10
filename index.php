<?php
session_start();

// Dynamically calculate the base URL for your project
$baseUrl = dirname($_SERVER['SCRIPT_NAME']);

// Check if the user is an admin
if (isset($_SESSION['admin'])) {
    header('Location: ' . $baseUrl . '/admin/dashboard.php');
    exit();
}

// Check if the user is a regular user
if (isset($_SESSION['user'])) {
    header('Location: ' . $baseUrl . '/user/index.php');
    exit();
}

// If no session is set, redirect to user login page
header('Location: ' . $baseUrl . '/login.php');
exit();
?>
