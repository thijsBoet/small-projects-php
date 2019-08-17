<?php 
session_start([
  'cookie_lifetime' => 2592000,
]);
$_SESSION['post-data'] = $_POST;
require_once '../database/pdo.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="resources/terminal.css">
</head>
<body>