<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/ajouterTache.css">
</head>
<body>
<?php require_once("entete.php") ?>
<div class="container">
  <form method="post"  action="saveTache.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nom Tâche</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="nomTache" placeholder="le nom de la tâche..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Status</label>
      </div>
      <div class="col-75">
        <select id="country" name="Status">
          <option value="faire">A faire</option>
          <option value="EnCours">En cours</option>
          <option value="Terminer">Terminer</option>
        </select>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Ajouter">
    </div>
  </form>
</div>
</body>
</html>