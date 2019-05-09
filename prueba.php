<?php 
	$conexion=mysqli_connect('localhost','root','','register')

?>

<!DOCTYPE html>
<html>
<head>
	<title>Usuarios Con Permiso</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div id="main-container">
		<table>
		<tr>
			
			<td>Cuenta</td>
			<td>Nombre</td>
			<td>Grado</td>
			<td>Grupo</td>
			<td>Fecha</td>
		</tr>
		<?php 
			$sql="SELECT * FROM registro";
			$resultado=mysqli_query($conexion,$sql);
			while ($mostar=mysqli_fetch_array($resultado)) {
				
			
		?>
		<tr>
			<td><?php echo $mostar['cuenta']; ?></td>
			<td><?php echo $mostar['nombre']; ?></td>
			<td><?php echo $mostar['grado']; ?></td>
			<td><?php echo $mostar['grupo']; ?></td>
			<td><?php echo $mostar['fecha_reg']; ?></td>
		</tr>
		<?php 
			}
		 ?>
	</table>
	<br><br>
	
</div>
</body>
</html>