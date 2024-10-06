<?php
	session_start();

	include 'conexion.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$email' and  Contra = '$password'");

	if(mysqli_num_rows($validar) > 0){
		$_SESSION['usuario'] = $email;
		header("location: inicio.php");
		exit;
	}else{
		echo '
			<script>
				alert("Usuario no existe, verifique los datos");
				window.location = "sesion.html";
			</script>
		';
		exit;
	}

?>