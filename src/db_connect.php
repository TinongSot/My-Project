<?php

include "vendor/autoload.php";

$host = "localhost";
$databaseName = "listname";
$username = "root";
$password = "";

$sdn = "mysql:dbname=$databaseName";

try {
    $conn = new PDO($sdn, $username, $password);
    // set the PDO error mode to exception
    $fluent = new \Envms\FluentPDO\Query($conn);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


?>