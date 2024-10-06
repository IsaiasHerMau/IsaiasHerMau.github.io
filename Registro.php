<?php
	include 'conexion.php';

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO usuarios(Nombre, Apellido, Correo, Contra) 
	VALUES('$nombre', '$apellido', '$email', '$password')";

	$ejecutar = mysqli_query($conexion, $query);

	// Verificar si la consulta se ejecutó correctamente
	if ($ejecutar) {
		echo '
            <script>
                alert("Registro Completado");
                window.location = "inicio.php";
            </script>
        ';
	    exit(); // Asegurarse de que no se ejecute el código posterior
	} else {
	    // Manejo de errores si la inserción falla
	    echo "Error: " . mysqli_error($conexion);
	}
?>
