<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "laravelqa";

// Create connection
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception => development
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $pdo;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}