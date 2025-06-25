<?php
include 'db.php';
$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM rutas WHERE id = ?");
$stmt->execute([$id]);
$ruta = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ruta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
</head>
<body>
    <div class="container">
        <h1>Editar Ruta</h1>
        <form method="POST" action="actualizar.php">
            <input type="hidden" name="id" value="<?= $ruta['id']; ?>">

            <label for="origen">Origen:</label>
            <input type="text" id="origen" name="origen" value="<?= htmlspecialchars($ruta['origen']); ?>" required>

            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino" value="<?= htmlspecialchars($ruta['destino']); ?>" required>

            <label for="duracion">Duración (min):</label>
            <input type="number" id="duracion" name="duracion" value="<?= htmlspecialchars($ruta['duracion']); ?>" required>

            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" value="<?= htmlspecialchars($ruta['tipo']); ?>" required>

            <button type="submit">Actualizar</button>
        </form>

        <a href="index.php" class="button-link">← Volver al listado</a>
    </div>
</body>
</html>
