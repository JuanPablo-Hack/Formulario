<?php 
	session_start();
	$con = mysqli_connect('localhost','root','','register');
	$cuenta = $_POST['cuenta']; 
	$pass = $_POST['password'];
	
	
	$sql=mysqli_query($con,"SELECT * FROM registro WHERE cuenta='$cuenta'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contra']){
			echo "<script>location.href='prueba.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.html'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.html'</script>";	

	}		
			
 ?>