<?php
header('Content-Type: text/html; charset=UTF-8');
include 'db.php';

$stmt = $pdo->query("SELECT * FROM rutas");
$rutas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Rutas</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>
    <div class="container">
        <h1>Rutas Registradas</h1>

        <!-- Tabla responsive -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Duración (min)</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($rutas) > 0): ?>
                        <?php foreach ($rutas as $ruta): ?>
                            <tr>
                                <td><?= htmlspecialchars($ruta['origen']); ?></td>
                                <td><?= htmlspecialchars($ruta['destino']); ?></td>
                                <td><?= htmlspecialchars($ruta['duracion']); ?></td>
                                <td><?= htmlspecialchars($ruta['tipo']); ?></td>
                                <td class="actions">
                                    <form method="get" action="editar.php" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= $ruta['id']; ?>">
                                        <button type="submit" class="btn btn-edit">Editar</button>
                                    </form>
                                    <form method="get" action="eliminar.php" style="display:inline;" onsubmit="return confirm('¿Estás seguro de eliminar esta ruta?');">
                                        <input type="hidden" name="id" value="<?= $ruta['id']; ?>">
                                        <button type="submit" class="btn btn-delete">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No hay rutas registradas.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <a href="create.php" class="button-link">Registrar Nueva Ruta</a>
    </div>
</body>
</html>
