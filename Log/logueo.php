<?php 
session_start();
?>

<!doctype html>
<html>
<title>MERAKI: Pasión & Entrega</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!--<link rel="icon" type="image/png" href="../assets/img/icons/favicon.ico"/>-->
    <link rel="shortcut icon" href="../assets/img/Ico.PNG">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main-log.css">
<!--===============================================================================================-->
<body>

<?php

  if(isset($_SESSION['UserName'])){ 
    //header("location: ../Bolsa_trabajo.php");
	echo "<script type='text/javascript'>
    window.location.href='../Bolsa_trabajo.php';
    </script>'";
  }else{    

?>

<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/img/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="autenticar.php" method="POST">
					<span class="login100-form-logo">
						<!--<i class="zmdi zmdi-landscape"></i>-->
                        <img class="u-header__logo-img u-header__logo-img--main mainlogo" width="50%" src="../assets/img/Ico.PNG" alt="Meraki">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Inicio de session
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Por favor ingresa la curp">
						<input class="input100" type="text" id="CURP" name="CURP" placeholder="CURP">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Por favor ingresa la contraseña">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<!--<a class="txt1" href="#">
							Forgot Password?
						</a>-->
                        <a class="txt1" href="../Registro/Registro_user.php">Registrar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

<?php
  }
?>

<!--===============================================================================================-->
<!--<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>-->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/popper.js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
	
<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>

</body>
</html>
