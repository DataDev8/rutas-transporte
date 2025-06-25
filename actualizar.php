<?php
include 'db.php';

$id = $_POST['id'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$duracion = $_POST['duracion'];
$tipo = $_POST['tipo'];

$stmt = $pdo->prepare("UPDATE rutas SET origen = ?, destino = ?, duracion = ?, tipo = ? WHERE id = ?");
$stmt->execute([$origen, $destino, $duracion, $tipo, $id]);

header("Location: index.php");
exit;
