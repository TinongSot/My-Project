<?php
         $host = "localhost";
         $databaseName = "listname";
         $username = "root";
         $password = "";
         
         $sdn = "mysql:host=$host;dbname=$databaseName";
         
         try {
             $conn = new PDO($sdn, $username, $password);
             // set the PDO error mode to exception
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
           }
      ?>