<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre'])) {
    header("Location: sesion.html");
    exit();
}

// Accede al nombre del usuario
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="estilo_perfil.css">
</head>
<body>
    <div class="perfil-container">
        <h1>Bienvenido, <?php echo htmlspecialchars($nombre); ?>!</h1>
        <p>¡Has iniciado sesión correctamente!</p>

        <a href="sesion.html" class="logout-button">Cerrar Sesión</a>
    </div>
</body>
</html>