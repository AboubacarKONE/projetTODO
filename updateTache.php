<?php
$code = $_POST['code'];
$nom = $_POST['nomTache'];
$status = $_POST['Status'];
require_once("conn.php");
$ps=$pdo->prepare("UPDATE tache SET status=? WHERE code=?");
$params = array($status,$code);
$ps->execute($params);
header("location:taches.php");
?>