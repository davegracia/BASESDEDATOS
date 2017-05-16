<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>formaulmnos.php</title>
</head>

<body>
<?php
include("conexion.php");
?>
<form name="alumnos" id="alumnos" method="post" action="insalumnos.php">
<table align="center" width="50%">
<tr>
	<td colspan="2"><img src="imagenes/logosz.JPG" width="500px" ></img></td>
</tr>
<tr>
	<td>DNI:</td>
	<td><input type="text" name="dni" id="dni" placeholder="DNI"></input></td>
</tr>
<tr>
	<td>Apellidos y Nombre</td>
	<td><input type="text" name="nombre" id="nombre" placeholder="Apellidos y Nombre"></input></td>
</tr>
<tr>
	<td>email</td>
	<td><input type="email" name="correo" id="correo" placeholder="correo"></input></td>
</tr>
<tr>
	<td>telefono</td>
	<td><input type="text" name="telefono" id="telefono" placeholder="movil"></input></td>
</tr>
<tr>
	<td>Estudios</td>
	<td><select name="estudios" id="estudios">
			<option value="">Elige una opción...</option>
			<?php
				$sql="SELECT * FROM estudios";
				$registros=mysqli_query($conexion,$sql);
				while($linea=mysqli_fetch_array($registros)){
					echo"<option value='$linea[idestudio]'>$linea[estudio]";
				};
			?>
		</select>
	</td>
</tr>
<tr>
	<td>Empresa</td>
	<td><select name="empresa" id="empresa">
			<option value="">Elige una empresa...</option>
			<?php
				$sql="SELECT * FROM empresas";
				$registros=mysqli_query($conexion,$sql);
				while($linea=mysqli_fetch_array($registros)){
					echo"<option value='$linea[nif]'>$linea[empresa]";
				};
			?>

		</select>
	</td>
</tr>
<tr>
	<td colspan="2" align="right"><input type="submit" value="Enviar"></input></td>
	<td colspan="2" align="right"><a href="veralumnos.php"><input type="button" value="ver"></input></a></td>
</tr>
</table>
</form>
</body>

</html>
