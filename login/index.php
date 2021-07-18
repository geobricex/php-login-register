<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
<form action="" name="f1" method="post">

<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Login</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/photo.jpg" height="250">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Contraseña</label>
					<input type="password" id="contrasena" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-danger">Registro</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</form>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#contrasena').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}
			
			
			// $jsonString = '{"usuario":"'+$('#usuario').val()+ '", "password":"'+$('#password').val()+'"}';
			// console.log($jsonString);
			// var values = $.parseJSON($jsonString);
			// console.log(values);
			var Usuario =  $('#usuario').val();
			var Contrasena =  $('#contrasena').val();
			// cadena="Usuario=" + Usuario + 
			// 		"&Contrasena=" + Contrasena;
					$.ajax({
						type:"POST",
						dataType:'json',
						url: "php/login.php",
						data:{Usuario:Usuario, Contrasena:Contrasena},
						// data: cadena,
						success:function(r){
							if(r==1){
								window.location="inicio.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>