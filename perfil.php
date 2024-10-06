<?php
session_start();
include 'conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Consulta solo el nombre
$query = "SELECT Nombre FROM usuarios WHERE Correo='$email' AND Contra='$password'";
$result = mysqli_query($conexion, $query);

if (mysqli_num_rows($result) > 0) {
    // Almacena solo el nombre en la sesión
    $usuario = mysqli_fetch_assoc($result);
    $_SESSION['nombre'] = $usuario['Nombre'];

    // Redirige al perfil
    header("Location: perfil2.php");
    exit();
} else {
    // Manejo de error si las credenciales son incorrectas
    echo 'Credenciales incorrectas.';
}
?>

