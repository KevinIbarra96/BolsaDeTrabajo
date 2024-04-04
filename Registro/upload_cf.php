<?php
session_start();

include('../Database/conexion.php');
include('../includes/bolsa_trabajo_logica.php');

$IdUser = $_SESSION['IdUser'];

echo "<script type='text/javascript'>
console.log(".$_POST['btn_cf'].");
</script>'";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conexion->real_escape_string(htmlentities($_POST['title']));
    $description = $conexion->real_escape_string(htmlentities($_POST['description']));

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {        
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            if($_FILES['file']['size'] < 3000000){
                $dir = 'cf_files/';
                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
                $file_tmp_name = $_FILES['file']['tmp_name'];
                //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
                $new_name_file = $dir . file_name($file_name).$IdUser . '.' . $extension;
                if (copy($file_tmp_name, $new_name_file)) {
                    $ins = $conexion->query("INSERT INTO cf_archivo(cf_nombre,cf_descripcion,cf_url,USRS_ID) VALUES ('$title','$description','$new_name_file',$IdUser)");

                    if ($ins) {
                        echo 'success';
                    } else {
                        echo $conexion ->error;
                    }
                } else {
                    echo 'fail';
                }
                }
            }else{
                echo 'Archivo excede el peso permitido';
            }
        }else{
            echo 'Solo se permite archivo tipo PDF';
        }
    }

?>