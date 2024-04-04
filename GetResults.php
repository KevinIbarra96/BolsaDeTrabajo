<?php 
 $Function = $_GET['function'];

 if($Function == "GetOffers"){
   $Ciudad = $_GET['Ciudad'];
   $Puesto = $_GET['Puesto'];
   
    include("includes/bolsa_trabajo_logica.php");
    echo GetOffers($Ciudad,$Puesto);
 }

 if($Function == "VerifLogo"){
   include("includes/bolsa_trabajo_logica.php");
   echo VerifLogo($_SESSION['IdUser']);
}

if($Function == "VerifCV"){
  include("includes/bolsa_trabajo_logica.php");
  echo VerifCV($_SESSION['IdUser']);
}

if($Function == "VerifCF"){
  include("includes/bolsa_trabajo_logica.php");
  echo VerifCF($_SESSION['IdUser']);
}

if($Function == "PreAcep"){
  
  $Id_solicitud = $_GET['Id_solicitud'];
  $action = $_GET['action'];

  include("includes/bolsa_trabajo_logica.php");
  echo PreAcep($Id_solicitud,$action);
}

?>