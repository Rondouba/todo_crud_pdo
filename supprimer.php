<?php
    if($_GET){
        require_once("./db.php");
        $id = $_GET['id'];
        $sql= "DELETE FROM todos WHERE id=$id";

        $result=$pdo_conn->exec($sql);
        if($result){
            header('location: index.php');
        }
    }
?>