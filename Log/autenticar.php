<?php

include('../Database/conexion.php'); //incluimos el config.php que contiene los datos de la conexión a la db

session_start();

if( ($_POST['CURP'] == ' ') or ($_POST['password'] == ' ') )//comprobamos que las variables enviadas por el form de login.php tienen contenido
{
//Header("Location: logueo.php"); //estan vacías, volvemos al index
}else{

$usuarios=mysqli_query($conexion,"SELECT * FROM users WHERE USR_CURP = '".$_POST['CURP']."' and USRS_PASSWORD = '".$_POST['password']."' and USRS_STATUS = 'Y';");

while ($a = mysqli_fetch_array($usuarios)) {
    $_SESSION['IdUser'] = $a['USRS_ID']; 
    $_SESSION['Curp'] = $a['USR_CURP']; 
    $_SESSION['UserName'] = $a['USRS_NAME']; 
    $_SESSION['Email'] = $a['USRS_EMAIL']; 
    $_SESSION['Tipo'] = $a['USRS_TIPO'];     
}

if($_SESSION['IdUser']!=null){
    echo "<script type='text/javascript'>
    alert('Bienvenido: ".$_SESSION['UserName']." ".$_SESSION['Tipo']." ');
    window.location.href='../Bolsa_trabajo.php';
    </script>'";
    //Header("Location: ../Bolsa_trabajo.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}else{    
    echo "<script type='text/javascript'>
        alert('Usuario o contraseña incorrectos');
        window.location.href='logueo.php';
        </script>'";
}

} 
?>
