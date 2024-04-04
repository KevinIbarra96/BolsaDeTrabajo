<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!--<script src="../js/jquery-3.6.0.min.js"></script>-->

    <title>MERAKI: Pasión & Entrega</title>
    <link rel="shortcut icon" href="../assets/img/Ico.png">

</head>
<body>

<?php

include("../includes/bolsa_trabajo_logica.php");

if(!isset($_SESSION['Tipo'])){
    echo "<script type='text/javascript'>
    window.location.href='../Log/logueo.php';
</script>'";
  }else{

$Tipo_cuenta = $_SESSION['Tipo'];


if($Tipo_cuenta == 'Empresa'){
    

  $Empresa = mysqli_fetch_array(GetEmpresa($_SESSION['IdUser']));  
  //$Solicitante = "si";

  if(!isset($Empresa)){
    header("location:Registro_Empresa.php");
    echo "<script type='text/javascript'>
    window.location.href='Registro_Empresa.php';
</script>'";
  }else{    
    
?>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <img class="u-header__logo-img u-header__logo-img--main mainlogo" width="100" src="../assets/img/Logotipo-Meraki.png" alt="Image Description">
        <br>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(155,143,196);"><font color="white">Nueva Oferta</font></div>
                    <div class="card-body">
                        <form action="Registrar_oferta.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input type="text" id="Nombre" class="form-control" name="Nombre"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Descripcion</label>
                                <div class="col-md-6">
                                    <textarea type="text" id="Descripcion" class="form-control" name="Descripcion"  autofocus></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Salario</label>
                                <div class="col-md-6">
                                    <input type="text" id="Salario" class="form-control" name="Salario"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Ubicacion</label>
                                <div class="col-md-6">
                                    <input type="text" id="Ubicacion" class="form-control" name="Ubicacion"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Horario</label>
                                <div class="col-md-6">
                                    <input type="text" id="Horario" class="form-control" name="Horario"  autofocus>
                                </div>
                            </div>

                            <div class="form-group row" style="text-align:center;">
                            <!--<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>-->
                            <button type="button" class="btn btn-link btn-sm col-sm-6" data-toggle="modal" data-target="#Hab_Modal">Agregar habilidad</button>
                                <div class="">
                                <input type="hidden" id="ListaHab" name="ListaHab" value="" required />
                                <table id="TablaHab" class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>Habilidad</th>                                        
                                            </tr>
                                        </thead>
                                        <tbody id="HabSelected"><!--Ingreso un id al tbody-->
                                            <tr>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <br>

                            <div class="form-group row" style="text-align:center;">
                            <!--<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>-->
                            <button type="button" class="btn btn-link btn-sm col-sm-6" data-toggle="modal" data-target="#Tarea_Modal">Agregar Tarea</button>
                                <div class="">
                                <input type="hidden" id="ListaTarea" name="ListaTarea" value="" required />
                                <table id="TablaTarea" class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>Tareas</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TarSelected"><!--Ingreso un id al tbody-->
                                            <tr>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <br>  

                            <div class="form-group row" style="text-align:center;">
                            <!--<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>-->
                            <button type="button" class="btn btn-link btn-sm col-sm-5" data-toggle="modal" data-target="#Resp_Modal">Agregar Responsabilidad</button>
                                <div class="">
                                <input type="hidden" id="ListaResp" name="ListaResp" value="" required />
                                <table id="TablaResp" class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>Responsabilidades</th>
                                            </tr>
                                        </thead>
                                        <tbody id="RespSelected"><!--Ingreso un id al tbody-->
                                            <tr>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="btn_Guardar" value="btn_Guardar">
                                    Registrar
                                </button>
                                <button type="submit" class="btn btn-secundary" id="Atras" name="btn_Atras" value="btn_Atras">
                                    Atras
                                </button>
                            </div>                            
                    </div>
                    </form>
                </div>
            </div>
        </div>

<!-- Modal Habilidades -->
<div class="modal fade" id="Hab_Modal" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar una habilidad</h4>
        </div>
        <div class="modal-body">
             <div class="form-group">
                        <label>Habilidad</label>
                    <input class="selectpicker form-control" id="hab_id" name="hab_id" data-width='100%' >                            
                    </select>
             </div>
        </div>
        <div class="modal-footer">
            <!--Uso la funcion onclick para llamar a la funcion en javascript-->
            <button type="button" onclick="agregarHabilidad()" class="btn btn-default" data-dismiss="modal">Agregar</button>
        </div>
    </div>

</div>
</div>

<!-- Modal Tareas -->
<div class="modal fade" id="Tarea_Modal" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar una tarea</h4>
        </div>
        <div class="modal-body">
             <div class="form-group">
                        <label>Tarea</label>
                    <input class="selectpicker form-control" id="tarea_id" name="tarea_id" data-width='100%' >                            
                    </select>
             </div>
        </div>
        <div class="modal-footer">
            <!--Uso la funcion onclick para llamar a la funcion en javascript-->
            <button type="button" onclick="agregarTarea()" class="btn btn-default" data-dismiss="modal">Agregar</button>
        </div>
    </div>

</div>
</div>

<!-- Modal Responsabilidades -->
<div class="modal fade" id="Resp_Modal" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar una Responsabilidad</h4>
        </div>
        <div class="modal-body">
             <div class="form-group">
                        <label>Responsabilidad</label>
                    <input class="selectpicker form-control" id="resp_id" name="resp_id" data-width='100%' >                            
                    </select>
             </div>
        </div>
        <div class="modal-footer">
            <!--Uso la funcion onclick para llamar a la funcion en javascript-->
            <button type="button" onclick="agregarResponsabilidad()" class="btn btn-default" data-dismiss="modal">Agregar</button>
        </div>
    </div>

</div>
</div>


    </div>
        
<?php
  }
}
  }
?>

<!-- script para la lista dinamica de Habilidades -->

<script type="text/javascript">
  // Refresca Habilidad: Refresco la Lista de Habilidads dentro de la Tabla
  // Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un Habilidad al usuario
  // Sino habilito el boton Guardar para que pueda Guardar
  var ip_Hab = [];
    function RefrescaHabilidad($Value){
        
        var i = 0;
        $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar
        
        if($Value == "delet21"){                               
                if (i > 0) {
                    $('#guardar').removeAttr('disabled','disabled');
                }
                console.log(ip_Tar);
                var ip_Habt=JSON.stringify(ip_Hab); //Convierto la Lista de Habilidads a un JSON para procesarlo en tu controlador
                $('#ListaHab').val(encodeURIComponent(ip_Habt)); 
        
        }else{
            ip_Hab.push({ hab_id : $Value });
            if (i > 0) {
            $('#guardar').removeAttr('disabled','disabled');
            }
            console.log(ip_Hab);
            var ip_Habt=JSON.stringify(ip_Hab); //Convierto la Lista de Habilidads a un JSON para procesarlo en tu controlador
            $('#ListaHab').val(encodeURIComponent(ip_Habt));
        }

    }
       function agregarHabilidad() {

            //var sel = $('#hab_id').find(':selected').val(); //Capturo el Value del Habilidad
            var sel = $('#hab_id').val();
            //var text = $('#hab_id').find(':selected').text();//Capturo el Nombre del Habilidad- Texto dentro del Select
            var text = $('#hab_id').val();;           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iHab" align="center" value="'+ sel +'" >' + sel + '</td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="fa fa-times"></i></button></td></tr>';
            $('#HabSelected').append(newtr); //Agrego el Habilidad al tbody de la Tabla con el id=HabSelected
            
            RefrescaHabilidad(sel);//Refresco Habilidads
            $('#hab_id').val("");   
                
            $('.remove-item').off().click(function(e) {
                $(this).parent('td').parent('tr').remove(); //En accion elimino el Habilidad de la Tabla
                var val = $(this).parent('td').parent('tr').attr("data-id"); //En esta accion se obtiene el valor

                if ($('#HabSelected tr.item').length == 0){
                    $('#HabSelected .no-item').slideDown(300);
                }
                    //ip_Hab.splice();                    
                    console.log( $(this).parent('td').parent('tr').attr("data-id"));
                    var hab_pos = ip_Hab.findIndex(hab=> hab.hab_id ===val);                    
                    ip_Hab.splice(hab_pos,1);
                    
                RefrescaHabilidad("delet21");
            });

 
           $('.iHab').off().change(function(e) {
                RefrescaHabilidad(sel);
           });
    }

</script>


<!-- script para la lista dinamica de Tareas -->

<script type="text/javascript">
  // Refresca Tarea: Refresco la Lista de Tareas dentro de la Tabla
  // Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un Tarea al usuario
  // Sino habilito el boton Guardar para que pueda Guardar
  var ip_Tar = [];
    function RefrescaTarea($Value){
        
        var i = 0;
        $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar

        if($Value == "delet21"){                               
                if (i > 0) {
                    $('#guardar').removeAttr('disabled','disabled');
                }
                console.log(ip_Tar);
                var ip_Tart=JSON.stringify(ip_Tar); //Convierto la Lista de Tareas a un JSON para procesarlo en tu controlador
                $('#ListaTarea').val(encodeURIComponent(ip_Tart)); 
        
        }else{
            ip_Tar.push({ tarea_id : $Value });
            if (i > 0) {
            $('#guardar').removeAttr('disabled','disabled');
            }
            console.log(ip_Tar);
            var ip_Tart=JSON.stringify(ip_Tar); //Convierto la Lista de Tareas a un JSON para procesarlo en tu controlador
            $('#ListaTarea').val(encodeURIComponent(ip_Tart)); 
        }           
    }
       function agregarTarea() {

            //var sel = $('#tarea_id').find(':selected').val(); //Capturo el Value del Tarea
            var sel = $('#tarea_id').val();
            //var text = $('#tarea_id').find(':selected').text();//Capturo el Nombre del Tarea- Texto dentro del Select
            var text = $('#tarea_id').val();;           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iTar" align="center" value="'+ sel +'" >' + sel + '</td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="fa fa-times"></i></button></td></tr>';
            $('#TarSelected').append(newtr); //Agrego el Tarea al tbody de la Tabla con el id=TarSelected
            
            RefrescaTarea(sel);//Refresco Tareas
            $('#tarea_id').val("");   
                
            $('.remove-item').off().click(function(e) {
                $(this).parent('td').parent('tr').remove(); //En accion elimino el Tarea de la Tabla
                var val = $(this).parent('td').parent('tr').attr("data-id"); //En esta accion se obtiene el valor

                if ($('#TarSelected tr.item').length == 0){
                    $('#TarSelected .no-item').slideDown(300);
                }
                    //ip_Tar.splice();                    
                    console.log( $(this).parent('td').parent('tr').attr("data-id"));
                    var Tar_pos = ip_Tar.findIndex(Tar=> Tar.tarea_id ===val);
                    ip_Tar.splice(Tar_pos,1);            
                    
                RefrescaTarea("delet21");
            });

 

           $('.iTar').off().change(function(e) {
                RefrescaTarea(sel);
           });
    }

</script>


<!-- script para la lista dinamica de Responsabilidades -->

<script type="text/javascript">
  // Refresca Habilidad: Refresco la Lista de Habilidads dentro de la Tabla
  // Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un Habilidad al usuario
  // Sino habilito el boton Guardar para que pueda Guardar
  var ip_Resp = [];
    function RefrescaResponsabilidad($Value){
        
        var i = 0;
        $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar
        
        if($Value == "delet21"){                               
                if (i > 0) {
                    $('#guardar').removeAttr('disabled','disabled');
                }
                console.log(ip_Resp);
                var ip_Respt=JSON.stringify(ip_Resp); //Convierto la Lista de Responsabilidads a un JSON para procesarlo en tu controlador
                $('#ListaResp').val(encodeURIComponent(ip_Respt)); 
        
        }else{
            ip_Resp.push({ resp_id : $Value });
            if (i > 0) {
            $('#guardar').removeAttr('disabled','disabled');
            }
            console.log(ip_Resp);
            var ip_Respt=JSON.stringify(ip_Resp); //Convierto la Lista de Responsabilidads a un JSON para procesarlo en tu controlador
            $('#ListaResp').val(encodeURIComponent(ip_Respt)); 
        }           
    }
       function agregarResponsabilidad() {

            //var sel = $('#resp_id').find(':selected').val(); //Capturo el Value del Responsabilidad
            var sel = $('#resp_id').val();
            //var text = $('#v').find(':selected').text();//Capturo el Nombre del Responsabilidad- Texto dentro del Select
            var text = $('#resp_id').val();;           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iResp" align="center" value="'+ sel +'" >' + sel + '</td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="fa fa-times"></i></button></td></tr>';
            $('#RespSelected').append(newtr); //Agrego el Responsabilidad al tbody de la Tabla con el id=RespSelected
            
            RefrescaResponsabilidad(sel);//Refresco Responsabilidads
            $('#resp_id').val("");   
                
            $('.remove-item').off().click(function(e) {
                $(this).parent('td').parent('tr').remove(); //En accion elimino el Responsabilidad de la Tabla
                var val = $(this).parent('td').parent('tr').attr("data-id"); //En esta accion se obtiene el valor

                if ($('#RespSelected tr.item').length == 0){
                    $('#RespSelected .no-item').slideDown(300);
                }
                    //ip_Resp.splice();                    
                    console.log( $(this).parent('td').parent('tr').attr("data-id"));
                    var resp_pos = ip_Resp.findIndex(resp=> resp.resp_id ===val);
                    console.log(resp_pos);
                    ip_Resp.splice(resp_pos,1);                                      
                    
                RefrescaResponsabilidad("delet21");
            });

 
           $('.iResp').off().change(function(e) {
                RefrescaResponsabilidad(sel);
           });
    }

</script>

</body>
</html>
