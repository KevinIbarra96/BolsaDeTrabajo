<?php

include('../Database/conexion.php'); //incluimos el config.php que contiene los datos de la conexión a la db

session_start();

echo "<script type='text/javascript'>
console.log('".$_POST['btn_cv']."');
</script>'";

//comprobamos que las variables enviadas por el form de login.php tienen contenido
if( ($_POST['Telefono'] == '') or ($_POST['Profecion'] == '') or ($_POST['btn_cv'] == 'no guardado'))
{

//estan vacías, volvemos al index

echo "<script type='text/javascript'>
alert('Completa todos los campos');
//window.location.href='Registro_solicitante.php';
window.history.back();
</script>";

//Header("Location: Registro_user.php"); 
}else{

//comprobamos en la db si existe ese nick con esa pass
$Solicitante=mysqli_query($conexion,"INSERT INTO solicitante (telefono,
                                                           Profecion,
                                                           USRS_ID
                                                           )
                                                    VALUES (
                                                    '".$_POST['Telefono']."',
                                                    '".$_POST['Profecion']."',
                                                     ".$_SESSION['IdUser']."
                                                    );");

echo "<script type='text/javascript'>
        console.log('".mysqli_error($conexion)."');
        </script>";

if($Solicitante){
    echo "<script type='text/javascript'>
    alert('Te has postulado con exito, espera de respuesta de la empresa');
    window.location.href='../Bolsa_trabajo.php';
    </script>'";
    //Header("Location: ../Logueo.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}else{
    echo "<script type='text/javascript'>
        alert('Datos Erroneos',".mysqli_error($conexion).");
        window.history.back();
        </script>'";
    //echo "Datos incorrectos, por favor regresa a la pagina anterior e intentalo de nuevo";    
        echo $_SESSION['IdUser'];
        echo mysqli_error($conexion);
        
        //Header("Location: Registro_user.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}

}


?>
