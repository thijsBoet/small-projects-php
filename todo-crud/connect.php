<?php
require_once 'dbconfig.php';

$dsn = "mysql:host=$host;dbname=$db";

try {
  $pdo = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
  die($e->getMessage());
}