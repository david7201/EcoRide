<?php
global $dsn, $username, $password, $options;
require_once '../config.php'; 
try {
    $connection = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}