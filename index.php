<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOS</title>
</head>
<?php
    include_once('./db.php');
    $stm=$pdo_conn->query("SELECT * FROM todos");
    $liste= $stm->fetchAll();
?>
<body>
    <a href="ajouter.php">Ajout</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Titre</th>
            <th>Etat</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php
                foreach ($liste as $l) {
            ?>
            <tr>
                <td><?=$l['id']?></td>
                <td><?=$l['titre']?></td>
                <td><?=$l['etat']?></td>
                <td>
                    <a href="update.php?id=<?=$l['id']?>">modifier</a>
                    <a href="supprimer.php?id=<?=$l['id']?>">supprimer</a>
                    <a href="detail.php">details</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>
</html>