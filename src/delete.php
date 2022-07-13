<?php

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
        header("Location: index.php?success=successfully updated");
    }else {
      header("Location: delete.php?id=$id&error=unknown error occurred");
   }
}else{
    header("Location: index.php");
}
