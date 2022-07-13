<?php 

// $db_user = "root";
// $db_pass = "";
// $db_name = "registration";

// $db = new PDO('mysql:host=localhost; dbname =' .$db_name. ';charset=utf8mb4', $db_user,$db_pass);
// $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$server = "localhost";
$username = "root";
$password = "12345";
$database = "listname";


$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}
?>