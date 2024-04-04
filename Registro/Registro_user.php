<?php 
session_start();
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
	<title>MERAKI: Pasión & Entrega</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
    <link rel="shortcut icon" href="../assets/img/Ico.PNG">

	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/Regsitro-css.css">
    

</head>
<body class="form-v5">

<?php

if(isset($_SESSION['UserName'])){    
  echo "<script type='text/javascript'>
  window.location.href='../Bolsa_trabajo.php';
</script>'";
}else{

?>

	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail validate-form" action="Registrar_user.php" method="POST">
				<h2>Nuevo Usuario</h2>
				<div class="form-group wrap-input100 validate-input" data-validate = "Por favor ingresa tu nombre">
					<label>Nombre(s)</label>
					<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre" required>
					
				</div>
				<div class="form-group">
					<label for="Apellidos">Apellidos</label>
					<input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Apellido" required >
					
				</div>
				<div class="form-group">
					<label for="Apellidos">Curp</label>
					<input type="text" name="Curp" id="Curp" class="form-control" placeholder="Curp" required >
					
				</div>
                <div class="form-group">
					<label for="Email">Email</label>
					<input type="text" name="Email" id="Email" class="form-control" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" name="Password" id="Password" class="form-control" placeholder="Password" required>
					
				</div>
                <div class="form-group">
					<label for="Password2">Confirmar Contraseña</label>
					<input type="password" name="Password2" id="Password2" class="form-control" placeholder="Password" required>
					
				</div>
                <div class="form-group">
					<label for="Pregunta">Pregunta de seguridad</label>
                    <select name="Pregunta" id="Pregunta" class="form-control" aria-label="Default select example"  style="width:95%">
                        <option value="">Selecciona una opcion</option>
                        <option name="Pregunta1" value="¿Cuál es tu comida favorita?">¿Cuál es tu comida favorita?</option>
                        <option name="Pregunta2" value="¿Cuál es el nombre de su primer maestro?">¿Cuál es el nombre de su primer maestro?</option>
                        <option name="Pregunta3" value="¿Cuál es el segundo nombre de tu padre?">¿Cuál es el segundo nombre de tu padre?</option>
                        <option name="Pregunta4" value="¿Cuál es tu ciudad natal?">¿Cuál es tu ciudad natal?</option>
                        <option name="Pregunta5" value="¿Cuál es el nombre de tu segunda mascota?">¿Cuál es el nombre de tu segunda mascota?</option>
                    </select>
					
				</div>
				<div class="form-group">
					<label for="Respuesta">Respuesta de seguridad</label>
					<input type="text" name="Respuesta" id="Respuesta" class="form-control" placeholder="Respuesta" required>
					
				</div>
				<div class="form-row-last">
					<input type="submit" name="btn_Guardar" class="register" value="Guardar">
                    <input type="button" name="btn_Atras" class="register" onclick="Atras()" value="Atras">
				</div>
			</form>
		</div>
	</div>

<?php
    }
?>

<script>

function Atras(){
console.log("Atras");
window.location.href='../Log/logueo.php';
}

</script>

<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>
