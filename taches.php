<?php
require_once("conn.php");
$req="SELECT * FROM tache";
$ps=$pdo->prepare($req);
$ps->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâches</title>
    <link rel="stylesheet" type="text/css" href="css/myStyle.css">
</head>
<body>
    <?php require_once("entete.php") ?>
    <table id="customers">
        <thead>
            <tr>
                <th>CODE</th>
                <th>NOM</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
        <?php while($tch=$ps->fetch() ) { ?>
        <tr>
            <td><?php echo($tch["code"]) ?></td>
            <td><?php echo($tch['nom']) ?></td>
            <td><?php echo($tch['status'])?></td>
            <td><a href="editTache.php?code=<?php echo($tch["code"])?>">Modifier</a></td>
            <td><a onclick="return confirm('Voulez-vous supprimer!!!');" href="supprimerTache.php?code=<?php echo($tch["code"])?>">Supprimer</a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>