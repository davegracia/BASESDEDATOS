<?php
	$dni=$_POST['dni'];
	$nom=$_POST['nombre'];
	$tel=$_POST['telefono'];
	$cor=$_POST['correo'];
	$est=$_POST['estudios'];
	$emp=$_POST['empresa'];
	//Conectar con la base de datos
	include("conexion.php");
	
	$sql="INSERT INTO alumnos(dni, alumno, email, telefono, nifempresa, idestudios)
	VALUES ('$dni','$nom','$cor','$tel','$emp',$est)";
	//Ejecutar la consulta
	mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
	//Terminar la conexion
	mysqli_close($conexion);
	//Volver al formulario
	header("location:formalumnos.php");
?>
