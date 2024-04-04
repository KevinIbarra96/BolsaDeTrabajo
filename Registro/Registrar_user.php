<?php
include('../Database/conexion.php'); //incluimos el config.php que contiene los datos de la conexión a la db

session_start();

$btn_Guardar="";
$btn_Atras="";

if(isset($_POST['btn_Guardar']))$btn_Guardar=$_POST['btn_Guardar'];
if(isset($_POST['btn_Atras']))$btn_Atras=$_POST['btn_Atras'];

if($btn_Atras){
    header("Location:../Log/logueo.php");
}

if($btn_Guardar){    

//comprobamos que las variables enviadas por el form de login.php tienen contenido
if( ($_POST['Nombre'] == '') or ($_POST['Apellidos'] == '') or ($_POST['Email'] == '') or ($_POST['Password'] == '') or ($_POST['Password2'] == '') or ($_POST['Respuesta'] == '')  or ($_POST['Pregunta'] == '') or ($_POST['Curp'] == ''))
{

//estan vacías, volvemos al index

echo "<script type='text/javascript'>
alert('Completa todos los campos');
//window.location.href='Registro_user.php';
window.history.back();
</script>'";

//Header("Location: Registro_user.php"); 
}else{



//comprobamos en la db si existe ese nick con esa pass
$usuarios=mysqli_query($conexion,"INSERT INTO users (USRS_NAME,
                                                    USRS_LASTNAME,
                                                    USRS_EMAIL,
                                                    USRS_PASSWORD,
                                                    USRS_PASSWORD_QUESTION,
                                                    USRS_PASSWORD_ANSWER,
                                                    USRS_TIPO,
                                                    USR_CURP)
                                                    VALUES (
                                                    '".$_POST['Nombre']."',
                                                    '".$_POST['Apellidos']."',
                                                    '".$_POST['Email']."',
                                                    '".$_POST['Password']."',
                                                    '".$_POST['Pregunta']."',
                                                    '".$_POST['Respuesta']."',
                                                    'Solicitante',
                                                    '".$_POST['Curp']."'
                                                    );");                                                



echo "<script type='text/javascript'>
        console.log('".mysqli_error($conexion)."');
        </script>";

if($usuarios){
    echo "<script type='text/javascript'>
    alert('Registro Exitoso');
    window.location.href='../Log/logueo.php';
    </script>'";
    //Header("Location: ../Logueo.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}else{
    echo "<script type='text/javascript'>
        alert('Datos Erroneos');    
        </script>'";
    echo "Datos incorrectos, por favor regresa a la pagina anterior e intentalo de nuevo";
        //echo mysqli_error($conexion);
        //Header("Location: Registro_user.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}

}
}


?>
