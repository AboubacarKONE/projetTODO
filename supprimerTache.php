<?php
$code = $_GET['code'];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM tache WHERE code=?");
$params=array($code);
$ps->execute($params);
header("location:taches.php");
?>