<?php
$nom = $_POST['nomTache'];
$status = $_POST['Status'];
require_once("conn.php");
$ps=$pdo->prepare("INSERT INTO tache(nom,status) VALUES(?,?)");
$params = array($nom,$status);
$ps->execute($params);
header("location:taches.php");
?>