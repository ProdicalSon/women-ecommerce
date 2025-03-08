<?php
// includes/db.php

$host = 'localhost'; // Database host
$dbname = 'women_ecommerce'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password



try {
    $conn = new PDO("mysql:host=$host;port=3308;dbname=$dbname", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>