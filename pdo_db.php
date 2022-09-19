<?php
session_start();

$database = [
    'host' => 'localhost',
    'dbname' => 'blog',
    'user' => 'root',
    'pass' => ''
];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
    echo 'ok :)';
} catch (PDOException $e) {
    die("An error happend, Error: " . $e->getMessage());
}