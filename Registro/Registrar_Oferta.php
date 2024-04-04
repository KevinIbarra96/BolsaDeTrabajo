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

//comprobamos que las variables enviadas por el form de login.php tienen contenido
if( ($_POST['Nombre'] == '') or ($_POST['Descripcion'] == '') or ($_POST['Salario'] == '') or ($_POST['Ubicacion'] == '') or ($_POST['Horario'] == '') or ($_POST['ListaHab'] == '') or ($_POST['ListaTarea'] == '') or ($_POST['ListaResp'] == ''))
{

//estan vacías, volvemos al index

echo "<script type='text/javascript'>
alert('Completa todos los campos');
//window.location.href='Registro_Oferta.php';
window.history.back();
</script>'";

//Header("Location: Registro_user.php"); 
}else{

$Habilidades = miControlador("Habilidad");
$Habs = implode(",",$Habilidades);

echo "<script type='text/javascript'>
console.log($Habs);
</script>'";

$Tareas = miControlador("Tarea");
$Tars = implode(",",$Tareas);

$Responsabilidades = miControlador("Responsabilidad");
$resps = implode(",",$Responsabilidades);

/*foreach($Habilidades as $a){
    echo "<script type='text/javascript'>
    console.log('28','$a');  
    console.log('Prueba de que funciona');
    </script>";
}*/

$empresa=mysqli_query($conexion,"SELECT id_empresa FROM empresa WHERE USRS_ID = '".$_SESSION['IdUser']."';");

while ($a = mysqli_fetch_array($empresa)) {
    $empresa_id = $a['id_empresa']; //damos la id del user a la variable idusuario
    
}

//comprobamos en la db si existe ese nick con esa pass
$Oferta_empleo=mysqli_query($conexion,"INSERT INTO empleo_ofertas (nombre_oferta,
                                                                 descripcion_oferta,
                                                                 salario,
                                                                 ubicacion,                                                                 
                                                                 habilidades,
                                                                 horario,
                                                                 tareas,
                                                                 responsabilidades,
                                                                 id_empresa
                                                                )
                                                        VALUES (
                                                                '".$_POST['Nombre']."',
                                                                '".$_POST['Descripcion']."',
                                                                '".$_POST['Salario']."',
                                                                '".$_POST['Ubicacion']."',
                                                                '$Habs',
                                                                '".$_POST['Horario']."',
                                                                '$Tars',
                                                                '$resps',
                                                                $empresa_id
                                                                );");



echo "<script type='text/javascript'>
        console.log('".mysqli_error($conexion)."');
        </script>";

if($Oferta_empleo){
    echo "<script type='text/javascript'>
    alert('Oferta creada con exito, en espera de la solicitudes');
    //window.location.href='../Bolsa_trabajo.php';
    </script>'";
    //Header("Location: ../Logueo.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}else{
    echo "<script type='text/javascript'>
        alert('Datos Erroneos',".mysqli_error($conexion).");
        </script>'";
    echo "Datos incorrectos, por favor regresa a la pagina anterior e intentalo de nuevo";
        echo $empresa_id;
        echo mysqli_error($conexion);
        //Header("Location: Registro_user.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}

}


function miControlador($list){
    $data = array();

    $misHabilidads = array();
    $habs = array();

    $misTareas = array();
    $Tars = array();

    $misResponds = array();
    $Respns = array();

    foreach($_POST as $key => $value) {  //Recibo el los valores por POST 
      $data[$key] = $value;
   }

   $acturl_hab = urldecode($data['ListaHab']); //decodifico el JSON
   $Habilidads = json_decode($acturl_hab);

   $acturl_Tar = urldecode($data['ListaTarea']); //decodifico el JSON
   $Tareas = json_decode($acturl_Tar);

   $acturl_Resp = urldecode($data['ListaResp']); //decodifico el JSON
   $Responsabilidads = json_decode($acturl_Resp);

  foreach ($Habilidads  as $ha) {
      $misHabilidads = array(
          'HabilidadId' => $ha->hab_id,//así llamamos al id del Habilidad en la vista en la funcion Refresca
          'HabilidadPor' => $ha->hab_por,//así llamamos al id del Habilidad en la vista en la funcion Refresca
      );
      array_push($habs,$misHabilidads['HabilidadId']);
      array_push($habs,$misHabilidads['HabilidadPor']);
    }

    foreach ($Tareas  as $tra) {
        $misTareas = array(
            'TareasId' => $tra->tarea_id,//así llamamos al id del Tareas en la vista en la funcion Refresca
            'TareasPor' => $tra->tarea_por,//así llamamos al id del Tareas en la vista en la funcion Refresca
        );  
        array_push($Tars,$misTareas['TareasId']);
        array_push($Tars,$misTareas['TareasPor']);
      }

      foreach ($Responsabilidads  as $rep) {
        $misResponds = array(
            'ResponsId' => $rep->resp_id,//así llamamos al id del Responsabilidad en la vista en la funcion Refresca
            'ResponsPor' => $rep->resp_por,//así llamamos al id del Responsabilidad en la vista en la funcion Refresca
        );
        array_push($Respns,$misResponds['ResponsId']);
        array_push($Respns,$misResponds['ResponsPor']);
      }

      if($list == "Habilidad"){
        return $habs;
      }

      if($list == "Tarea"){
        return $Tars;
      }
      if($list == "Responsabilidad"){
        return $Respns;
      }
    
}

?>
