<?php
require '../Database/conexion.php'; //incluimos el config.php que contiene los datos de la conexi�n a la db

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>

<link rel="shortcut icon" href="../assets/img/head_image.PNG">

<link href="css/login-box.css" rel="stylesheet" type="text/css" />
<link href="css/styles_propios.css" rel="stylesheet" type="text/css" />
<link href="css/style3-loginbtn.css" rel="stylesheet" type="text/css" />
<link href="css/botones_con_estilo.css" rel="stylesheet" type="text/css" />

<!-- Scripts para el dise�o de los botones -->
    <link href="css/button_style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript" charset="UTF-8"></script>
	<script src="js/animation_button.js" type="text/javascript" charset="UTF-8"></script>


<!-- CSS para darle fondo ajustado a la pantalla -->
<style type="text/css">
body {
background:url(images/background.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>

</head>

<body>

<?php
if(!isset($_SESSION['usuario'])) //comprobamos que no existe la session, es decir, que no se ha logeado, y mostramos el form
{

echo "
<a href='registro.php' align='right'>Registrar</a>

<center><div style='padding: 30px 280px 0 250px;'>


<div align='center' id='login-box'>

<form action='autenticar.php' method='POST' >

	<H2>Login</H2>
	Ingresa los datos
	<br />
	<br />
	<div id='login-box-name' style='margin-top:20px;'>Usuario:</div><div id='login-box-field' style='margin-top:20px;'><input name='username' class='form-login title='Username' value='' size='30' maxlength='2048' /></div>
	</Br>
    <div id='login-box-name'>Contrase&ntildea:</div><div id='login-box-field'><input name='password' type='password' class='form-login' title='Password' value='' size='30' maxlength='2048' /></div>

	<div>
    </Br>
		<input type='submit' name='Logon' value='Entrar' class='button' >        
		
	</div>   
</form>

</div>
</div></center> 


";


}else{

echo "<body>";

//Si se ha logeado, mostramos el nick y la opci�n de deslogearse
//Este ser�a el men� que saldr�a a la gente que esta logueada, se puede modificar y a�adir cosas

echo "<div id='contenedor'>
    		<h1 class='btnAzul'>Bienvenid@: ".$_SESSION['usuario']."</h1>
		</div>
	 ";			


/*echo "<center><div class='rounded' style='background-image: url(images/div_background.jpg); width: 200px; border: inset'>";
echo "<span style='color:#FFF' /><h1>Bienvenid@: ".$_SESSION['usuario']."</h1>"; //ej Bienvenido Jose
echo "</div></center>"; */

//echo "<br /><br /><center><h2><font color='#FFF'>Por favor, selecciona una opcion:</font></h2></center><br />";
echo "<br /><br /><center><img src='Imagenes Varias/Textos/logueo.png'></center><br />";
                       
echo"                   <div id='button-container' class='digg'>
                            <a href='index.php' id='button'>Inicio</a>
                                <div id='arrow-container'>
                                    <div id='arrow-rectangle-staff' class='one'>
                                    </div>
                                    <div id='arrow-rectangle-handle' class='two'>
                                    </div>
                                    <div id='arrow-triangle' >
                                    </div>
                                </div>
                        </div>
                        
        
                        
                        <div id='button-container' class='rss'>
                            <a href='logout.php' id='button'>Cerrar Sesi&oacute;n</a>
                                <div id='arrow-container'>
                                    <div id='arrow-rectangle'>
                                    </div>
                                    <div id='arrow-triangle'>
                                    </div>
                                </div>
                        </div>
                        
                        
                    </div>";

}


echo "</body>";

?>


</body>
</html>