<?php
// Include the database connection file
global $dsn, $username, $options, $password;
require_once 'DBconnect.php';

try {
    // Create a new PDO instance
    $db = new PDO($dsn, $username, $password, $options);
    echo "Database connection successful";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
