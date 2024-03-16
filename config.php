<?php
/**
 * Configuration for database connection
 *
 */
$host = "localhost";
$username = "root";
$password = "pass";
$dbname = "ecoride"; // will use later
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
 );



/* $db = new mysqli('localhost','myusername','mypassword','mydatabase');

$sql = "SELECT username, password FROM users WHERE username = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('s', $Username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if($user && $user['password'] === $Password){
  // Login successful
} else {
  // Login failed
}*/
