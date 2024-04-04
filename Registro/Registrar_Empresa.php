<?php

include('../Database/conexion.php'); //incluimos el config.php que contiene los datos de la conexión a la db

session_start();

$btn_Guardar="";
$btn_Atras="";

if(isset($_POST['btn_Guardar']))$btn_Guardar=$_POST['btn_Guardar'];
if(isset($_POST['btn_Atras']))$btn_Atras=$_POST['btn_Atras'];

if($btn_Atras){
    header("Location:../Log/Bolsa_trabajo.php");
}

if($btn_Guardar){

//comprobamos que las variables enviadas por el form de login.php tienen contenido
if( ($_POST['Nombre'] == '') or 
    ($_POST['Descripcion'] == '') or 
    ($_POST['Ubicacion'] == '') or 
    ($_POST['Telefono'] == '') or 
    ($_POST['Web'] == '') or 
    ($_POST['btn_cf'] == 'no guardado') or
    ($_POST['btn_img'] == 'no guardado') or
    ($_POST['Razon_Social'] == '') or 
    ($_POST['RFC'] == '') or 
    ($_POST['Representante'] == '') or 
    ($_POST['Facebook'] == '') or 
    ($_POST['Twitter'] == '') or 
    ($_POST['Instagram'] == '')    
  )
{

//estan vacías, volvemos al index

echo "<script type='text/javascript'>
alert('Completa todos los campos');
//window.location.href='Registro_Empresa.php';
window.history.back();
</script>'";

//Header("Location: Registro_user.php"); 
}else{

//comprobamos en la db si existe ese nick con esa pass
$Empresa=mysqli_query($conexion,"INSERT INTO empresa (nombre_empresa,
                                                      descripcion_empresa,                                                      
                                                      Ubicacion,
                                                      Telefono,
                                                      Web,
                                                      USRS_ID,
                                                      Razon_Social,
                                                      RFC,
                                                      Representante,
                                                      Facebook,
                                                      Twitter,
                                                      Instagram
                                                           )
                                                    VALUES (
                                                    '".$_POST['Nombre']."',
                                                    '".$_POST['Descripcion']."',
                                                    '".$_POST['Ubicacion']."',
                                                    '".$_POST['Telefono']."',
                                                    '".$_POST['Web']."',
                                                    '".$_SESSION['IdUser']."',
                                                    '".$_POST['Razon_Social']."',
                                                    '".$_POST['RFC']."',
                                                    '".$_POST['Representante']."',
                                                    '".$_POST['Facebook']."',
                                                    '".$_POST['Twitter']."',
                                                    '".$_POST['Instagram']."'                                                     
                                                    );");

echo "<script type='text/javascript'>
        console.log('".mysqli_error($conexion)."');
        </script>";

if($Empresa){
    echo "<script type='text/javascript'>
    alert('Se ah asociado la informacion de la cuenta correcctamente');
    window.location.href='Registro_Oferta.php';
    </script>'";
    //Header("Location: ../Logueo.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}else{
    echo "<script type='text/javascript'>
        alert('Datos Erroneos',".mysqli_error($conexion).");    
        </script>'";
    echo "Datos incorrectos, por favor regresa a la pagina anterior e intentalo de nuevo: ";
    echo $_SESSION['IdUser'];
    echo " error: ".mysqli_error($conexion);
        //Header("Location: Registro_user.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}

}
}


?>
