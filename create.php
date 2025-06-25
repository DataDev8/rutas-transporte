<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $duracion = $_POST['duracion'];
    $tipo = $_POST['tipo'];

    // Validaciones básicas
    if (empty($origen) || empty($destino) || empty($duracion) || empty($tipo)) {
        $error = "Todos los campos son obligatorios.";
    } elseif (!is_numeric($duracion) || $duracion <= 0) {
        $error = "La duración debe ser un número positivo.";
    } else {
        // Insertar en la base de datos
        $stmt = $pdo->prepare("INSERT INTO rutas (origen, destino, duracion, tipo) VALUES (?, ?, ?, ?)");
        $stmt->execute([$origen, $destino, $duracion, $tipo]);
        $success = "Ruta registrada exitosamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Ruta</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>
    <div class="container">
        <h1>Registrar Ruta</h1>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
        <form action="create.php" method="POST">
            <label for="origen">Origen:</label>
            <input type="text" name="origen" required>
            <label for="destino">Destino:</label>
            <input type="text" name="destino" required>
            <label for="duracion">Duración (minutos):</label>
            <input type="number" name="duracion" required>
            <label for="tipo">Tipo:</label>
            <select name="tipo" required>
                <option value="carga">Carga</option>
                <option value="pasajeros">Pasajeros</option>
            </select>
            <button type="submit">Registrar Ruta</button>
        </form>
        <a href="index.php">Ver Rutas Registradas</a>
    </div>
</body>
</html>
