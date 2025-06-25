<?php
$host = 'sql101.infinityfree.com';
$db = 'if0_36994981_marcaciones';
$user = 'if0_36994981';
$pass = 'hHBErBDKIuc3X';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
