<?php 
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

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

<?php

include("../includes/bolsa_trabajo_logica.php");

if(!isset($_SESSION['UserName'])){
    
    echo "<script type='text/javascript'>    
    window.location.href='../Log/logueo.php';
</script>'";
  }else{    

?>

<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="Registrar_Empresa.php" method="POST">
				<h2>Datos de la Empresa</h2>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLogo">
                        Sube el logo
                    </button>
                    <input type="hidden" name="btn_img" id="btn_img" class="form-control" value="<?php echo $echo_img; ?>">
                    &nbsp;&nbsp;&nbsp;&nbsp; <img id="no-echo-img" class="u-header__logo-img u-header__logo-img--main mainlogo" width="30" src="../assets/img/no-echo.jpg" alt="No echo">
                    &nbsp;&nbsp;&nbsp;&nbsp; <img id="echo-img" class="u-header__logo-img u-header__logo-img--main mainlogo" width="30" src="../assets/img/echo.jpg" alt="echo">                
                </div>
                <br>
				<div class="form-group">
					<label for="full-name">Nombre</label>
					<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Tu nombre" required>
					
				</div>
				<div class="form-group">
					<label for="full-name">Razon Social</label>
					<input type="text" name="Razon_Social" id="Razon_Social" class="form-control" placeholder="Tu RS" required>
					
				</div>
				<div class="form-group">
					<label for="Descripcion">Descripcion</label>
					<input type="text" name="Descripcion" id="Descripcion" class="form-control" placeholder="Tu Descripcion" required >
					
				</div>
                <div class="form-group">
					<label for="Ubicacion">Ubicacion</label>
					<input type="text" name="Ubicacion" id="Ubicacion" class="form-control" placeholder="Ubicacion" required>
					
				</div>
				<div class="form-group">
					<label for="Telefono">Telefono</label>
					<input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Tu Telefono" required>
					
				</div>
				<div class="form-group">
					<label for="Telefono">RFC</label>
					<input type="text" name="RFC" id="RFC" class="form-control" placeholder="Tu RFC" required>
					
				</div>
				<div class="form-group">
					<label for="Telefono">Representante Legal</label>
					<input type="text" name="Representante" id="Representante" class="form-control" placeholder="Tu Representante" required>
					
				</div>
				<div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Sube tu Constancia Fiscal
                        </button>
                        <input type="hidden" name="btn_cf" id="btn_cf" class="form-control" value="<?php echo $echo; ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp; <img id="no-echo" class="u-header__logo-img u-header__logo-img--main mainlogo" width="30" src="../assets/img/no-echo.jpg" alt="No echo">
                        &nbsp;&nbsp;&nbsp;&nbsp; <img id="echo" class="u-header__logo-img u-header__logo-img--main mainlogo" width="30" src="../assets/img/echo.jpg" alt="echo">						
                </div>
				<br>
                <div class="form-group">
					<label for="Web">Página Web</label>
					<input type="text" name="Web" id="Web" class="form-control" placeholder="Tu Web" required>
					
				</div>
				<div class="form-group">
					<label for="Web">Facebook</label>
					<input type="text" name="Facebook" id="Facebook" class="form-control" placeholder="Tu Facebook" required>
					
				</div>
				<div class="form-group">
					<label for="Web">Twitter</label>
					<input type="text" name="Twitter" id="Twitter" class="form-control" placeholder="Tu Twitter" required>
					
				</div>
				<div class="form-group">
					<label for="Web">Instagram</label>
					<input type="text" name="Instagram" id="Instagram" class="form-control" placeholder="Tu Instagram" required>
					
				</div>
				<div class="form-group-last">
					<input type="submit" name="btn_Guardar" class="register" value="Guardar">
                    <input type="button" name="btn_Atras" class="register" onclick="Atras()" value="Atras">
				</div>
			</form>
		</div>
	</div>

        <!-- Modal CF-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva contanscia fiscal</h5>
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
                                <label for="description">CF</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" name="btn_cf" id="btn_cf" onclick="onSubmitForm()">Cuardar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Logo-->
        <div class="modal fade" id="exampleModalLogo" tabindex="-1" aria-labelledby="exampleModalLabelLogo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogo">Logo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" action="upload_logo.php" id="form2">
                            <div class="form-group">
                                Añadir imagen: <input name="file" id="file" type="file"/>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" name="subir" value="Subir imagen" onclick="onSubmitFormLogo()">Cuardar</button>
                    </div>
                </div>
            </div>
        </div>       


<?php
  }
?>

<script>

var id = <?php echo $_SESSION['IdUser']; ?>

$.ajax({url: "../GetResults.php?function=VerifCF", success: function(result){

            var res = JSON.parse(result);
            var num = res.length;

            if(num >0){                
                $("#echo").show();
                $("#no-echo").hide();
                $("#btn_cf").val('Echo');
            }else{                
                $("#echo").hide();
                $("#no-echo").show();
                $("#btn_cf").val('no guardado');
            }

}});

$.ajax({url: "../GetResults.php?function=VerifLogo", success: function(result){

var res = JSON.parse(result);
var num = res.length;

console.log(num,res);

if(num >0){                
    $("#echo-img").show();
    $("#no-echo-img").hide();
    $("#btn_img").val('Echo');
}else{                
    $("#echo-img").hide();
    $("#no-echo-img").show();
    $("#btn_img").val('no guardado');
}

}});

function onSubmitForm() {

            var frm = document.getElementById('form1');
            var data = new FormData(frm);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    var msg = xhttp.responseText.trim();

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
            xhttp.open("POST", "upload_cf.php", true);
            xhttp.send(data);
            $('#form1').trigger('reset');
        }

        function onSubmitFormLogo() {
            var frm = document.getElementById('form2');
            var data = new FormData(frm);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4) {
                    var msg = xhttp.responseText.trim();                    
                    if (msg == 'succcess') {
                        alert("2",msg);                        
                        $('#exampleModal').modal('hide');
                        $("#echo-img").show();
                        $("#no-echo-img").hide();
                        $("#btn_img").val('Echo-img')
                        <?php 
                        $echo_img = "Echo-img";
                        ?>
                    } else {
                        alert(msg);
                    }

                }
            };
            xhttp.open("POST", "upload_logo.php", true);
            xhttp.send(data);
            $('#form2').trigger('reset');
        }


function Atras(){
console.log("Atras");
window.location.href='../Log/logueo.php';
}

</script>

</body>
</html>
