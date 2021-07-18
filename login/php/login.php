<?php 
	session_start();
	require_once "conexion.php";

	$conexion=conexion();
	
		// $usuario=$_POST['usuario'];
		// $pass=sha1($_POST['password']);
			if(isset($_POST['Usuario'],$_POST['Contrasena'])){

				$usuario=$_POST['Usuario'];
				$pass=sha1($_POST['Contrasena']);

				$sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";
				$result=mysqli_query($conexion,$sql);
				if(mysqli_num_rows($result) > 0){
					$_SESSION['user']=$usuario;
					echo 1;	
				}else{
					echo 0;
				}				
			}
			else{
				echo 0;
			}
		
 ?>