<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro Oferta</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>

<?php
include("../includes/bolsa_trabajo_logica.php");

if(!isset($_SESSION['UserName'])){
    echo "<script type='text/javascript'>    
    window.location.href='../Log/logueo.php';
</script>'";
  }else{

$Tipo_cuenta = $_SESSION['Tipo'];

if($Tipo_cuenta == 'Empresa'){        

  $Empresa = mysqli_fetch_array(GetEmpresa($_SESSION['IdUser']));
  //$Solicitante = "si";

  if(!isset($Empresa)){    
    echo "<script type='text/javascript'>        
        window.location.href='Registro_Empresa.php';
    </script>'";
  }else{  

?>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="Registrar_Oferta.php" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Informacion de la oferta</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Informacion de la oferta</h3>
									<p>Por favor ingresa la informacion de la oferta. </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Nombre</legend>
											<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" >
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Descripcion</legend>
											<input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripcion" >
										</fieldset>
									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Salario Inicial</legend>
											<input type="text" class="form-control" id="Salario1" name="Salario1" placeholder="Salario Inicial" >
										</fieldset>
									</div>                                    
									<div class="form-holder">
										<fieldset>
											<legend>Salario Final</legend>
											<input type="text" class="form-control" id="Salario2" name="Salario2" placeholder="Salario Final" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Ubicacion</legend>
											<input type="text" class="form-control" id="Ubicacion" name="Ubicacion" placeholder="Ubicacion" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Horario</legend>
                                            
                                            <select name="Horario" id="Horario">
                                                <option value="" disabled selected>Selecciona una opcion</option>
                                                <option value="Medio Tiempo">Medio Tiempo</option>
                                                <option value="Administrativo">Administrativo</option>
                                                <option value="Rolar Turnos">Rolar Turnos</option>                                                
                                            </select>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Habilidades</span>
			            </h2>
			            <section>
			                <div class="inner container">
			                	<div class="wizard-header">
									<h3 class="heading">Habilidades requeridas</h3>
									<p>Por favor ingresa las habilidades requeridas de la oferta. </p>
								</div>
                                <button type="button" class="btn btn-link btn-sm col-sm-6" data-toggle="modal" data-target="#Hab_Modal">Agregar habilidad</button>
                                <div class="">
                                <input type="hidden" id="ListaHab" name="ListaHab" value=""  />
                                <table id="TablaHab" class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>Habilidad</th>
                                                <th>Porcentaje</th>                                   
                                            </tr>
                                        </thead>
                                        <tbody id="HabSelected"><!--Ingreso un id al tbody-->
                                            <tr>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
				            
                            </div>								
							
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Tareas</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Tareas Requeridas</h3>
									<p>Por favor ingresa las Tareas requeridas de la oferta.</p>
								</div>
                                <button type="button" class="btn btn-link btn-sm col-sm-6" data-toggle="modal" data-target="#Tarea_Modal">Agregar habilidad</button>
                                <div class="">
                                <input type="hidden" id="ListaHab" name="ListaHab" value=""  />
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
                                    <table id="TablaTarea" class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>Tareas</th>
                                                <th>Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TarSelected"><!--Ingreso un id al tbody-->
                                            <tr>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
			                		</div>
			                	</div>
							</div>
			            </section>
                        <!-- SECTION 4 -->
			            <h2>
			            	<p class="step-icon"><span>04</span></p>
			            	<span class="step-text">Responsabilidades</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Responsabilidades Requeridas</h3>
									<p>Por favor ingresa las Responsabilidades requeridas de la oferta.</p>
								</div>
                                <button type="button" class="btn btn-link btn-sm col-sm-6" data-toggle="modal" data-target="#Resp_Modal">Agregar habilidad</button>
                                <div class="">
                                <input type="hidden" id="ListaHab" name="ListaHab" value=""  />
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
                                    <table id="TablaResp" class="table">
                                        <thead>
                                            <tr align="center">
                                                <th>Responsabilidades</th>
                                                <th>Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody id="RespSelected"><!--Ingreso un id al tbody-->
                                            <tr>
                                        
                                            </tr>
                                        </tbody>
                                    </table>
			                		</div>
			                	</div>
							</div>
                            <button class="zmdi zmdi-check" type="submit"></button>
                            <!--<li aria-hidden="true"><a href="#finish" role="menuitem"><button class="zmdi zmdi-check" type="submit"></button></a></li>-->
			            </section>
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
                    <input type="text" class="selectpicker form-control" id="hab_id" name="hab_id" data-width='100%' >
                    <label>Porcentaje</label>
                    <input type="number" class="selectpicker form-control" id="hab_por" name="hab_por" data-width='100%' >
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
                    <label>Porcentaje</label>
                    <input type="number" class="selectpicker form-control" id="tarea_por" name="tarea_por" data-width='100%' >
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
                    <label>Porcentaje</label>
                    <input type="number" class="selectpicker form-control" id="resp_por" name="resp_por" data-width='100%' >
             </div>
        </div>
        <div class="modal-footer">
            <!--Uso la funcion onclick para llamar a la funcion en javascript-->
            <button type="button" onclick="agregarResponsabilidad()" class="btn btn-default" data-dismiss="modal">Agregar</button>
        </div>
    </div>

</div>
</div>
    
<?php
  }
}
  }
?>


    <script src="../assets/js/Oferta_registra/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/Oferta_registra/jquery.steps_oferta.js"></script>
	<script src="../assets/js/Oferta_registra/main_oferta.js"></script>

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
            var por = $('#hab_por').val();
            //var text = $('#hab_id').find(':selected').text();//Capturo el Nombre del Habilidad- Texto dentro del Select
            var text = $('#hab_id').val();;           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iHab" align="center" value="'+ sel +'" >' + sel + '</td>';
            newtr = newtr + '<td class="iHab" align="center" value="'+ por +'" >' + por + '</td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="zmdi zmdi-delete"></i></button></td></tr>';
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
            var por = $('#tarea_por').val();
            //var text = $('#tarea_id').find(':selected').text();//Capturo el Nombre del Tarea- Texto dentro del Select
            var text = $('#tarea_id').val();;           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iTar" align="center" value="'+ sel +'" >' + sel + '</td>';
            newtr = newtr + '<td class="iHab" align="center" value="'+ por +'" >' + por + '</td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="zmdi zmdi-delete"></i></button></td></tr>';
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
            var por = $('#resp_por').val();
            //var text = $('#v').find(':selected').text();//Capturo el Nombre del Responsabilidad- Texto dentro del Select
            var text = $('#resp_id').val();;           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iResp" align="center" value="'+ sel +'" >' + sel + '</td>';
            newtr = newtr + '<td class="iResp" align="center" value="'+ por +'" >' + por + '</td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="zmdi zmdi-delete"></i></button></td></tr>';
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