<?php
global $dsn, $username, $options, $password;
require_once 'DBconnect.php';

try {
    $db = new PDO($dsn, $username, $password, $options);
    echo "Database connection successful";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
