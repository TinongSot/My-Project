<?php
session_start();

if(isset($_GET['id'])){
    include "db_connect.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $query = $fluent->deleteFrom('products')->where('id', $id)->execute();
    if($query){
        $_SESSION['success'] = "Delete successfully";
        header("Location: crud_page.php");
    }else {
        $_SESSION['error'] = "Unknown error occurred";
        header("Location: delete.php");
   }
}else{
    header("Location: crud_page.php");
}