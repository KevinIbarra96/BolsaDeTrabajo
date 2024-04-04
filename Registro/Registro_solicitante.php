<?php 
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>MERAKI: Pasión & Entrega</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
    <link rel="shortcut icon" href="../assets/img/Ico.PNG">
	<!--<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-5/css/fontawesome-all.min.css">-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/Regsitro-css.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>
<body>

<style>
#boton{display:none;}
</style>

<?php

include("../includes/bolsa_trabajo_logica.php");

if(!isset($_SESSION['Tipo'])){
    echo "<script type='text/javascript'>
    window.location.href='../Log/logueo.php';
</script>'";
  }else{

$Tipo_cuenta = $_SESSION['Tipo'];

if($Tipo_cuenta == 'Empresa'){
echo "No puedes postularte a empleos con una cuenta de empresa";
}

if($Tipo_cuenta == 'Solicitante'){
    
    $Oferta_id = $_GET["id_oferta"];

  $Solicitante = mysqli_fetch_array(GetSolicitante($_SESSION['IdUser']));  
  //$Solicitante = "si";

  if(isset($Solicitante)){
      
    echo "<script type='text/javascript'>
        console.log('55',".$Solicitante['id_solicitante'].",$Oferta_id,'".$_SESSION['UserName']."');
        </script>'";

        Postular($Solicitante['id_solicitante'],$Oferta_id,$_SESSION['UserName']);

    echo "Se postulo con exito al trabajo, en espera de que la empresa se ponga en contacto";    
  }else{  

?>

<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="Registrar_solicitante.php" method="POST">
				<h2>Nuevo Usuario</h2>
				<div class="form-group">
					<label for="Telefono">Teléfono</label>
					<input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Tu Telefono" required>
					
				</div>
				<div class="form-group">
					<label for="Profecion">Profeción</label>
					<input type="text" name="Profecion" id="Profecion" class="form-control" placeholder="Tu Profecion" required >
					
                </div>
                <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Sube tu CV
                        </button>
                        <input type="hidden" name="btn_cv" id="btn_cv" class="form-control" value="<?php echo $echo; ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp; <img id="no-echo" class="u-header__logo-img u-header__logo-img--main mainlogo" width="30" src="../assets/img/no-echo.jpg" alt="No echo">
                        &nbsp;&nbsp;&nbsp;&nbsp; <img id="echo" class="u-header__logo-img u-header__logo-img--main mainlogo" width="30" src="../assets/img/echo.jpg" alt="echo">
                </div>
				<div class="form-group-last">
					<input type="submit" name="btn_Guardar" class="register" value="Guardar">
                    <input type="button" name="btn_Atras" class="register" onclick="Atras()" value="Atras">
				</div>
			</form>
		</div>
	</div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo CV</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="form1">
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="description">CV</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Cuardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>


<?php
  }
}
  }
?>

<script>    

var id = <?php echo $_SESSION['IdUser']; ?>

$.ajax({url: "../GetResults.php?function=VerifCV", success: function(result){

            var res = JSON.parse(result);
            var num = res.length;

            console.log(num);

            if(num >0){                
                $("#echo").show();
                $("#no-echo").hide();
                $("#btn_cv").val('Echo')
            }else{                
                $("#echo").hide();
                $("#no-echo").show();
                $("#btn_cv").val('no guardado')
            }

}});

        function onSubmitForm() {
            var frm = document.getElementById('form1');
            var data = new FormData(frm);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    var msg = xhttp.responseText.trim();
                    
                    console.log(msg.length,"success");

                    if (msg == 'success') {
                        alert(msg);
                        console.log("afe");
                        $('#exampleModal').modal('hide');
                        $("#echo").show();
                        $("#no-echo").hide();
                        $("#btn_cv").val('Echo')
                        <?php 
                        $echo = "Echo";
                        ?>
                    } else {
                        alert(msg);
                    }

                }
            };
            xhttp.open("POST", "upload.php", true);
            xhttp.send(data);
            $('#form1').trigger('reset');
        }

        function openModelPDF(url) {
            $('#exampleModal').modal('show');
            $('#iframePDF').attr('src','<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/meraki/Registro/'; ?>'+url);
        }

        function Atras(){
            console.log("Atras");
            //window.location.href='../Log/.php';
            window.history.back();
        }

</script>

</body>
</html>
