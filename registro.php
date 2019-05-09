<?php 
	$con=mysqli_connect('localhost','root','','register');
	$nombre=$_POST['nombre'];
	$cuenta=$_POST['cuenta'];
	$grado=$_POST['grado'];
	$grupo=$_POST['grupo'];
	$contra=$_POST['contra'];

	$sql="INSERT INTO registro(cuenta,nombre,grado,grupo,contra) VALUES ('$cuenta','$nombre','$grado','$grupo','$contra')";
	mysqli_query($con,$sql);
	header('Location: index.html')

?>