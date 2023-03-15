<?php
require_once("./db.php");
if ($_GET) {
    # code...
    $id = $_GET['id'];
    $sql = "SELECT * FROM todos WHERE id=$id";
    $todo = ($pdo_conn->query($sql))->fetch();
}
if ($_POST) {
    $titre = $_POST['titre'];
    $etat = $_POST['etat'] ? 1 : 0;
    $date = (new DateTime())->format('Y-M-d H:m:s');
    $sql = "UPDATE `todos` SET `titre` = '$titre', `etat` = $etat WHERE `todos`.`id` = $id";

    $result = $pdo_conn->exec($sql);
    if ($result) {
        header('location: index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
</head>

<body>
    <h1>Ajout</h1>
    <form action="" method="POST">
        <label>Titre</label>
        <input value="<?=$todo['titre']?>" type="text" name="titre">

        <label>Etat</label>
        <input <?=$todo['etat']==1?'checked':null?>  type="checkbox" name="etat" id="">

        <div>
            <input type="submit" name="todos" value="Add">
        </div>
    </form>
</body>

</html>