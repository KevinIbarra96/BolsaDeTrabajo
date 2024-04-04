
<?php

//session_start();

//include('../Database/conexion.php'); //incluimos el config.php que contiene los datos de la conexión a la db


function file_name($string) {

  // Tranformamos todo a minusculas

  $string = strtolower($string);

  //Rememplazamos caracteres especiales latinos

  $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

  $repl = array('a', 'e', 'i', 'o', 'u', 'n');

  $string = str_replace($find, $repl, $string);

  // Añadimos los guiones

  $find = array(' ', '&', '\r\n', '\n', '+');
  $string = str_replace($find, '-', $string);

  // Eliminamos y Reemplazamos otros carácteres especiales

  $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

  $repl = array('', '-', '');

  $string = preg_replace($find, $repl, $string);

  return $string;
}

function PreAcep($Id_solicitud,$action){

  include('Database/conexion.php');
  $UserAct = $_SESSION['UserName'];
  
  echo "<script type='text/javascript'>
  console.log('$UserAct');
  </script>'";

  $PreAc = mysqli_query($conexion,"UPDATE solicitante_oferta SET Estatus = '$action',user_update = '$UserAct' WHERE id_solicitudes = $Id_solicitud;");

  return $PreAc;

}

function GetSolOffer($id_oferta){
  include('Database/conexion.php');

  $SolOffers = mysqli_query($conexion,"SELECT a.id_solicitudes,
  	                                          a.Estatus,
                                              a.id_oferta,
                                              b.nombre_oferta,
                                              a.id_solicitante,
                                              c.telefono,
                                              c.Profecion,
                                              d.USRS_ID,
                                              d.USRS_NAME,
                                              d.USRS_LASTNAME,
                                              d.USRS_EMAIL,
                                              e.cv_url
                                            FROM solicitante_oferta as a
                                            INNER JOIN empleo_ofertas as b ON a.id_oferta = b.id_oferta
                                            INNER JOIN solicitante as c ON c.id_solicitante = a.id_solicitante
                                            INNER JOIN users as d ON d.USRS_ID = c.USRS_ID
                                            INNER JOIN cv_archivo as e ON d.USRS_ID = e.USRS_ID
                                            WHERE a.active = 1 and a.id_oferta = $id_oferta;");

  return $SolOffers;
}


function Postular($id_Solicitante,$id_oferta,$UserAct){

  include('../Database/conexion.php');

  $Oferta_sol = mysqli_query($conexion,"INSERT INTO solicitante_oferta (id_oferta,id_solicitante,user_create) VALUES ($id_oferta,$id_Solicitante,'$UserAct');");

  return $Oferta_sol;

}

function GetNumSol($id_oferta){

  include('Database/conexion.php');

  $Solicitantes = mysqli_query($conexion,"SELECT count(id_solicitudes) as numSol FROM solicitante_oferta WHERE id_oferta = $id_oferta and active = 1;");

  return $Solicitantes;

}

function GetCompanyOffers($USRS_ID){  

  include('Database/conexion.php');

  $CompanyOffers = mysqli_query($conexion,"SELECT a.id_oferta,
                                                  a.nombre_oferta,
                                                  a.descripcion_oferta,
                                                  a.salario,
                                                  a.ubicacion as ubicacion_oferta,
                                                  a.horario,
                                                  a.habilidades,
                                                  DATE(a.date_create) as day,
                                                  a.tareas,
                                                  a.responsabilidades,
                                                  b.nombre_empresa as empresa,
                                                  b.Telefono,
                                                  b.ubicacion as ubicacion_empresa,
                                                  b.Web,
                                                  b.id_empresa,
                                                  c.USRS_ID,
                                                  c.USRS_EMAIL,
                                                  d.Emp_url
                                                  FROM empleo_ofertas as a
                                                  INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                                  INNER JOIN users as c ON b.USRS_ID = c.USRS_ID
                                                  INNER JOIN emp_logo as d ON d.USRS_ID = b.USRS_ID AND d.active =1
                                                  WHERE b.USRS_ID = $USRS_ID and a.active = 1;");

  return $CompanyOffers;

}

function VerifLogo($USRS_ID){
  include('Database/conexion.php');
  
  $Logo = mysqli_query($conexion,"SELECT * FROM emp_logo WHERE USRS_ID = $USRS_ID AND active = 1;");

$Json = [];

  while($F = mysqli_fetch_assoc($Logo)){
    $Json [] = array(
      'Emp_url'=>$F['Emp_url'],
  );
  }

  return json_encode($Json);
}

function VerifCV($USRS_ID){
  include('Database/conexion.php');
  
  $CV = mysqli_query($conexion,"SELECT * FROM cv_archivo WHERE USRS_ID = $USRS_ID AND active = 1;");

$Json = [];

  while($F = mysqli_fetch_assoc($CV)){
    $Json [] = array(
      'cv_url'=>$F['cv_url'],
  );
  }

  return json_encode($Json);
}

function VerifCF($USRS_ID){
  include('Database/conexion.php');
  
  $CF = mysqli_query($conexion,"SELECT * FROM cf_archivo WHERE USRS_ID = $USRS_ID AND active = 1;");

$Json = [];

  while($F = mysqli_fetch_assoc($CF)){
    $Json [] = array(
      'cf_url'=>$F['cf_url'],
  );
  }

  return json_encode($Json);
}

function GetSolicitante($USRS_ID){
  include('../Database/conexion.php');
  
  $Solicitante = mysqli_query($conexion,"SELECT * FROM solicitante WHERE USRS_ID = $USRS_ID AND active = 1;");

  return $Solicitante;
  
}

//Query para obtener 10 logos de empresas que trabajan con meraki.
function GetEmpLogIndex(){
  include('Database/conexion.php');

  $Emp_Logo = mysqli_query($conexion,"SELECT Emp_url FROM emp_logo LIMIT 10;");

  return $Emp_Logo;

}

function GetEmpresa($USRS_ID){
  include('../Database/conexion.php');

  $Empresa = mysqli_query($conexion,"SELECT * FROM empresa WHERE USRS_ID = $USRS_ID AND active = 1;");

  return $Empresa;
}

function GetOffers($Ciudad,$Puesto){
  include('Database/conexion.php');
  
if($Ciudad != null and $Puesto != null){    

          $Offers = mysqli_query($conexion,"SELECT a.id_oferta,
                                                    a.nombre_oferta,
                                                    a.descripcion_oferta,
                                                    a.salario,
                                                    a.ubicacion as ubicacion_oferta,
                                                    a.horario,
                                                    a.habilidades,
                                                    DATE(a.date_create) as day,
                                                    b.nombre_empresa as empresa,
                                                    c.Emp_url
                                                  FROM empleo_ofertas as a
                                                  INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                                  LEFT JOIN emp_logo as c ON c.USRS_ID = b.USRS_ID AND c.active =1
                                                  WHERE a.active = 1 and a.ubicacion = '$Ciudad' and a.nombre_oferta = '$Puesto'
                                                  ORDER BY a.date_create DESC ;");

}else{
  if($Ciudad == null and $Puesto == null){
    
    $Offers = mysqli_query($conexion,"SELECT a.id_oferta,
                                              a.nombre_oferta,
                                              a.descripcion_oferta,
                                              a.salario,
                                              a.ubicacion as ubicacion_oferta,
                                              a.horario,
                                              a.habilidades,
                                              DATE(a.date_create) as day,
                                              b.nombre_empresa as empresa,
                                              c.Emp_url
                                            FROM empleo_ofertas as a
                                            INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                            LEFT JOIN emp_logo as c ON c.USRS_ID = b.USRS_ID AND c.active =1
                                            WHERE a.active = 1 ORDER BY a.date_create DESC limit 6;");
  }else{
    if($Ciudad != null){      
      $Offers = mysqli_query($conexion,"SELECT a.id_oferta,
                                              a.nombre_oferta,
                                              a.descripcion_oferta,
                                              a.salario,
                                              a.ubicacion as ubicacion_oferta,
                                              a.horario,
                                              a.habilidades,
                                              DATE(a.date_create) as day,
                                              b.nombre_empresa as empresa,
                                              c.Emp_url
                                            FROM empleo_ofertas as a
                                            INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                            LEFT JOIN emp_logo as c ON c.USRS_ID = b.USRS_ID AND c.active =1
                                            WHERE a.active = 1 and a.ubicacion = '$Ciudad'
                                            ORDER BY a.date_create DESC ;");
    }
    if($Puesto != null){
      
      $Offers = mysqli_query($conexion,"SELECT a.id_oferta,
                                              a.nombre_oferta,
                                              a.descripcion_oferta,
                                              a.salario,
                                              a.ubicacion as ubicacion_oferta,
                                              a.horario,
                                              a.habilidades,
                                              DATE(a.date_create) as day,
                                              b.nombre_empresa as empresa,
                                              c.Emp_url
                                            FROM empleo_ofertas as a
                                            INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                            LEFT JOIN emp_logo as c ON c.USRS_ID = b.USRS_ID AND c.active =1
                                            WHERE a.active = 1 and a.nombre_oferta = '$Puesto'
                                            ORDER BY a.date_create DESC ;");
    }
  }
  
  }

$Json = [];

  while($F = mysqli_fetch_assoc($Offers)){
    $Json [] = array(
      'id_oferta'=>$F['id_oferta'],
      'nombre_oferta'=>$F['nombre_oferta'],
      'descripcion_oferta'=>$F['descripcion_oferta'],
      'ubicacion_oferta'=>$F['ubicacion_oferta'],
      'horario'=>$F['horario'],
      'habilidades'=>$F['habilidades'],
      'salario'=>$F['salario'],
      'day'=>$F['day'],
      'empresa'=>$F['empresa'],
      'Emp_url'=>$F['Emp_url']
  );
  }

  return json_encode($Json);

}

function GetEspecificOffer($id_oferta){

  include('Database/conexion.php');

  $EspecificOffer = mysqli_query($conexion,"SELECT a.id_oferta,
                                                  a.nombre_oferta,
                                                  a.descripcion_oferta,
                                                  a.salario,
                                                  a.ubicacion as ubicacion_oferta,
                                                  a.horario,
                                                  a.habilidades,
                                                  DATE(a.date_create) as day,
                                                  a.tareas,
                                                  a.responsabilidades,
                                                  b.nombre_empresa as empresa,
                                                  b.Telefono,
                                                  b.ubicacion as ubicacion_empresa,
                                                  b.Web,
                                                  c.USRS_ID,
                                                  c.USRS_EMAIL,
                                                    d.Emp_url
                                                FROM empleo_ofertas as a
                                                INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                                INNER JOIN users as c ON b.USRS_ID = c.USRS_ID
                                                INNER JOIN emp_logo as d ON d.USRS_ID = b.USRS_ID AND d.active =1
                                                WHERE a.id_oferta = $id_oferta;");

  return $EspecificOffer;

}

function GetRecentOffers(){

  include('Database/conexion.php');
  //require_once 'Database/conexion.php';
  
  $Ofertas_Recientes1 = mysqli_query($conexion,"SELECT a.id_oferta,
                                                      a.nombre_oferta,
                                                      a.descripcion_oferta,
                                                      a.salario,
                                                      a.ubicacion as ubicacion_oferta,
                                                      a.horario,
                                                      a.habilidades,
                                                      DATE(a.date_create) as day,
                                                      b.nombre_empresa as empresa,
                                                      c.Emp_url
                                                    FROM empleo_ofertas as a
                                                    INNER JOIN empresa as b ON b.id_empresa = a.id_empresa
                                                    LEFT JOIN emp_logo as c ON c.USRS_ID = b.USRS_ID AND c.active = 1
                                                    WHERE a.active = 1 ORDER BY a.date_create DESC limit 6;");
  
  return $Ofertas_Recientes1;

}

function GetNumberOffers(){
  include('Database/conexion.php');

  $NumeroOferta = mysqli_query($conexion,"SELECT COUNT(id_oferta) as ofertas_empleo FROM empleo_ofertas WHERE active = 1;");

  return $NumeroOferta;

}

?>