<?php
    if($_GET){
        require_once("./db.php");
        $id = $_GET['id'];
        $sql= "SELECT * FROM todos WHERE id=$id)";

        $result=($pdo_conn->query($sql))->fetch();
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
   titre: <?=$result['titre']?> <br>
   etat: <?=$result['etat']?> <br>
    </form>
</body>
</html>