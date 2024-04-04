<?php

session_start();

include('../Database/conexion.php');
include('../includes/bolsa_trabajo_logica.php');

$IdUser = $_SESSION['IdUser'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    //$file_name = $_FILES['file']['name'];
      $file_name = $_SESSION['UserName'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {        
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'png'||$extension == 'jpg'||$extension == 'jpeg') {
            $dir = 'assets/user_files/Emp_Logo/';
            /*if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }*/
            $file_tmp_name = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = "../".$dir . file_name($file_name).'-'.$IdUser . '.' . $extension;
            $Emp_Url = $dir . file_name($file_name).'-'.$IdUser . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                
            }
        }
    }

    $ins = $conexion->query("INSERT INTO emp_logo(Emp_url,USRS_ID) VALUES ('$Emp_Url',$IdUser)");

    if ($ins) {
        echo 'success';
    } else {
        echo $conexion ->error;
    }
} else {
    echo 'fail';
}


 ?>