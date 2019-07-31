<?php

require_once 'dbconfig.php';

$dsn = "mysql:host=$host;dbname=$db";

try {
  $pdo = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
  die($e->getMessage());
}

$nameIsset = true;
$locationIsset = true;

if(isset($_POST['save'])){
  if(!isset($_POST['name']) || $_POST['name'] == ''){
    $nameIsset = false;
    exit();
  } elseif (!isset($_POST['location']) || $_POST['name'] == 'location') {
    $locationIsset = false;
    exit();
  }
  
  $name = filter_var(htmlentities($_POST['name']),FILTER_SANITIZE_STRING);
  $location = filter_var(htmlentities($_POST['location']),FILTER_SANITIZE_STRING);

  $stmt = $pdo->prepare("INSERT INTO data (name, location) VALUES('$name', '$location')");
  $stmt->execute();
}