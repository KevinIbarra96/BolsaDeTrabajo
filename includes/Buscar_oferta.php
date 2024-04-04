<?php
//include('../Database/conexion.php'); //incluimos el config.php que contiene los datos de la conexión a la db
//session_start();

echo "<h1>Esta es otra página</h1>";

/*if(($_POST['Puesto'] != '') or ($_POST['Ciudad'] != ''))
{

    $Oferta=mysqli_query($conexion,"SELECT * FROM empleo_ofertas WHERE (nombre_oferta = '".$_POST['Puesto']."' or ubicacion = '".$_POST['Ciudad']."') and active = 1;");

    if(isset($Oferta)){
        Header("Location: ../Bolsa_trabajo.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
    }
    
}else{
    echo "<script type='text/javascript'>
    alert('Para completar la busqueda debes de llenar almenos un campo en la busqueda');
    //window.location.href='../Bolsa_trabajo.php';
    </script>'";
}*/


?>