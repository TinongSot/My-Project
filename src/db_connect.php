<?php
require '../vendor/autoload.php';
//require_once "db_config.php";
$host = "localhost";
$databaseName = "listname";
$username = "root";
$password = "";
$sdn = "mysql:dbname=$databaseName";

try {
    $conn = new PDO($sdn, $username, $password);
    $fluent = new \Envms\FluentPDO\Query($conn);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


?>