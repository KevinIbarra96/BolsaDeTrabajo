function getWSPost(jsonData, WsURL, ErrorMessage, callback) {//Función: Ejecuta la llamada al servicio web			$.ajax({		//headers: { 'Content-Type': "application/json; charset=utf-8"},		//dataType: "JSON",		//data: JSON.stringify(jsonData),		crossDomain : true,		type: 'POST', 		data: jsonData,		url: WsURL, 		// headers: {			 // 'Authorization': 'Basic ' + btoa('.\Planning_user:Apmt2017*')		 // },		/*beforeSend: function (xhr) {			xhr.setRequestHeader ("Authorization", "Basic " + btoa(".\Planning_user" + ":" + "Apmt2017*"));		},*/		success: function (data) {			callback(null, data);					},		error: function(e) {			if (ErrorMessage == "")				ErrorMessage = "Ha ocurrido un error al consumir el servicio web";						console.log(ErrorMessage);			console.log(e.responseText);			console.log(e);			callback(e);			//swal("Oops...", ErrorMessage,"error");		}	});		/*	beforeSend: function (xhr) {    xhr.setRequestHeader ("Authorization", "Basic " + btoa(username + ":" + password));},		*/}function getWSGet(WsURL, ErrorMessage, callback) {//Función: Ejecuta la llamada al servicio web de tipo GET	$.ajax({		headers: {'Content-Type': "application/json; charset=utf-8"},		crossDomain : true,		dataType: "JSON",		type: "GET",		url: WsURL, 		beforeSend: function (xhr) {			xhr.setRequestHeader ("Authorization", "Basic " + btoa("AESPANA" + ":" + "APMT2017"));		},				success: function (data) {			callback(null, data);					},		error: function(e) {			console.log(ErrorMessage);			console.log(e);			callback(e);			//swal("Oops...", ErrorMessage,"error");		}	});}function GetURLParameter(p_Parametro) {//[Obtenemos el valor del parametro de la URL indicado.]	var sPageURL = window.location.search.substring(1);    var sURLVariables = sPageURL.split('&');	for (var i = 0; i < sURLVariables.length; i++)    {		var sParameterName = sURLVariables[i].split('=');		 if (sParameterName[0] == p_Parametro)        {			return sParameterName[1];		}	}}function reloadScripts() {//Recarga todos los scripts de la página	$("body script[src*='.js']").each(function(){		var oldScript = this.getAttribute("src");		$(this).remove();		var newScript;		newScript = document.createElement('script');		newScript.type = 'text/javascript';		newScript.src = oldScript;		console.log(oldScript);		document.getElementsByTagName("body")[0].appendChild(newScript);	});}function shownotificationCircle(p_title,p_msg,type){	$('body').pgNotification({		style: 'bar',		title: p_title,		message: p_msg,		position: 'top-right',		timeout: 1500,		type: type	}).show();}		function getLanguageTables(){//Función: Lenguaje en español para las tablas dinamicas	var LanguageTables = { 		"sProcessing":     "<img class='loader-gear-table' src='gears.gif'  />&nbsp;&nbsp;&nbsp;<span class='bolder blue'>Procesando...</span>",		"sLengthMenu":     "Mostrar _MENU_ registros por p&aacute;gina",		"sZeroRecords":    "No se encontraron resultados",		"sEmptyTable":     "Ning&uacute;n dato disponible en esta tabla",		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",		"sInfoEmpty":      "No hay registros a mostrar",		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",		"sInfoPostFix":    "",		"sSearch":         "Buscar:",		"sUrl":            "",		"sInfoThousands":  ",",		//"sLoadingRecords": "Cargando...",		"oPaginate": {			"sFirst":    "Primero",			"sLast":     "Último",			"sNext":     "Siguiente",			"sPrevious": "Anterior"		},		"oAria": {			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",			"sSortDescending": ": Activar para ordenar la columna de manera descendente"		},		 buttons: {            pageLength: {                _: "%d Filas",                '-1': "Todas"            }        }	};			return LanguageTables;}function getLanguageDatepicker() {		return {		days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],		daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],		daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],		months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],		monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],		today: "Hoy",		clear: "Limpiar",		weekStart: 1,		format: "dd/mm/yyyy"	};}		$.date = function(dateObject) {		var d = new Date(dateObject);		var day = d.getDate();		var month = d.getMonth() + 1;		var year = d.getFullYear();		if (day < 10) {			day = "0" + day;		}		if (month < 10) {			month = "0" + month;		}		var date = day + "/" + month + "/" + year;		return date;	};		$.datetime = function(dateObject) {		var d = new Date(dateObject);		var day = d.getDate();		var month = d.getMonth() + 1;		var year = d.getFullYear();		var hours = d.getUTCHours();		var minutes = d.getUTCMinutes();		var seconds = d.getUTCSeconds();						if (day < 10) {			day = "0" + day;		}		if (month < 10) {			month = "0" + month;		}		if (minutes < 10)			minutes = "0" + minutes;		if (seconds < 10)			seconds = "0" + seconds;				var date = day + "/" + month + "/" + year + " " + hours + ":" + minutes + ":" + seconds;		return date;	};		$.currentdatetime = function(m,s) {		var d = new Date();		var day = d.getDate();		var month = d.getMonth() + 1;		var year = d.getFullYear();		var hours = d.getHours();		var minutes = d.getMinutes();		var seconds = d.getSeconds();						if (day < 10) {			day = "0" + day;		}		if (month < 10) {			month = "0" + month;		}		if (minutes < 10)			minutes = "0" + minutes;		if (seconds < 10)			seconds = "0" + seconds;				minutes = (m=="N")?"00":minutes;		seconds = (s=="N")?"00":seconds;				var date = day + "/" + month + "/" + year + " " + hours + ":" + minutes + ":" + seconds;		return date;	};		$.customdatetime = function(day) {		var d = new Date();		var day = d.getDate() + day;		var month = d.getMonth() + 1;		var year = d.getFullYear();		var hours = d.getHours();		var minutes = d.getMinutes();		var seconds = d.getSeconds();						if (day < 10) {			day = "0" + day;		}		if (month < 10) {			month = "0" + month;		}		if (minutes < 10)			minutes = "0" + minutes;		if (seconds < 10)			seconds = "0" + seconds;				var date = day + "/" + month + "/" + year + " " + hours + ":" + minutes + ":" + seconds;		return date;	};		$.curdate = function() {		var d = new Date();		var day = d.getDate();		var month = d.getMonth() + 1;		var year = d.getFullYear();		if (day < 10) {			day = "0" + day;		}		if (month < 10) {			month = "0" + month;		}		var date = day + "/" + month + "/" + year;		return date;	};		$.curtime = function(day) {		var d = new Date();		var hours = d.getHours();		var minutes = d.getMinutes();		var seconds = d.getSeconds();		if (hours < 10)			hours = "0" + hours;		if (minutes < 10)			minutes = "0" + minutes;		if (seconds < 10)			seconds = "0" + seconds;				var date = hours + ":" + minutes + ":" + seconds;		return date;	};		function getObject(p_Parent) {//Devolvemos un arreglo con los elementos del elemento y selector indicado del DOOM					var MapObject = {};		$(p_Parent).each(function (i, element){MapObject[$(element).attr("id")] = $(element).val();});			return MapObject;	}		function isNull(p_Value) {		if (p_Value == "" || p_Value == null || p_Value.length == 0)			return true;		else			return false;	}		function getJoin(p_CurrentModal, p_Elements, p_Delimiter) {		var Out = "";		$.each(p_Elements.split(','), function(i,e) {Out+=$.trim($(p_CurrentModal + "#"+e).val()) + p_Delimiter;});		return Out;	}			function getListasDinamicasChoosen(p_Element, p_List, p_Parameters, p_Select, p_PlaceHolder) {			getWSPost({AppID: AppID, Query: p_List, Parameters: p_Parameters, Delimiter: ","}, WS.DynamicCursor, "", function(errorLanzado, data){			if(errorLanzado) return;							$(p_Element).empty();			$(p_Element).append("<option value='NA' hidden>"+((p_PlaceHolder.length>0)?p_PlaceHolder:"Selecciona una Opción")+"</option>");			$.each(data.data, function(i,n) {				$(p_Element).append("<option value='"+n.Value+"'  " + ((n.Data!= undefined )?('data-data="'+n.Data+'" '):" ") + ((n.Data2!= undefined )?('data-data2="'+n.Data2+'" '):" ") + ((n.Data3!= undefined )?('data-data3="'+n.Data3+'" '):" ") +((p_Select==n.Value)?"selected":"")+">"+n.Text+"</option>");				});				$(p_Element).chosen({width: "100%", no_results_text: "No se encontraron resultados coincidentes"});				$(p_Element).val(((p_Select.length>0)?p_Select:"NA")).prop('disabled', false).trigger("chosen:updated");		});			}		function getListasDinamicas(p_Element, p_List, p_Parameters, p_Select, p_PlaceHolder) {			getWSPost({AppID: AppID, Query: p_List, Parameters: p_Parameters, Delimiter: ","}, WS.DynamicData, "", function(errorLanzado, data){			if(errorLanzado) return;			$(p_Element).empty();			$(p_Element).append("<option value='NA' hidden>"+((p_PlaceHolder.length>0)?p_PlaceHolder:"Selecciona una Opción")+"</option>");			$.each(data.data, function(i,n) {				$(p_Element).append("<option value='"+n.Value+"'  " + ((n.Data!= undefined )?('data-data="'+n.Data+'" '):" ") + ((n.Data2!= undefined )?('data-data2="'+n.Data2+'" '):" ") + ((n.Data3!= undefined )?('data-data3="'+n.Data3+'" '):" ")+((p_Select==n.Value)?"selected":"")+">"+n.Text+"</option>");				});			});			}		function getDynamicListChoosen(p_Element, p_List, p_Parameters, p_Select, p_PlaceHolder) {			getWSPost({AppID: AppID, Query: p_List, Parameters: p_Parameters, Delimiter: ","}, WS.DynamicData, "", function(errorLanzado, data){			if(errorLanzado) return;			$(p_Element).empty();			$(p_Element).append("<option value='NA' hidden>"+((p_PlaceHolder.length>0)?p_PlaceHolder:"Selecciona una Opción")+"</option>");			$.each(data.data, function(i,n) {				$(p_Element).append("<option value='"+n.Value+"'  " + ((n.Data!= undefined )?('data-data="'+n.Data+'" '):" ") + ((n.Data2!= undefined )?('data-data2="'+n.Data2+'" '):" ") + ((n.Data3!= undefined )?('data-data3="'+n.Data3+'" '):" ") +((p_Select==n.Value)?"selected":"")+">"+n.Text+"</option>");				});				$(p_Element).chosen({width: "100%", no_results_text: "No se encontraron resultados coincidentes"});				$(p_Element).val(((p_Select.length>0)?p_Select:"NA")).prop('disabled', false).trigger("chosen:updated");		});			}		function getDiferenciaDias(p_Inicio, p_Fin) {		var Inicio = p_Inicio.split("/"); 		Inicio =  new Date([Inicio[1] , Inicio[0] , Inicio[2]].join("/"));				var Fin = p_Fin.split("/"); 		Fin =  new Date([Fin[1] , Fin[0] , Fin[2]].join("/"));		var timeDiff = Math.abs(Fin.getTime() - Inicio.getTime());		var diff = Math.ceil(timeDiff / (1000 * 3600 * 24)); 		return (isNaN(diff)?0:diff);	}		function getDateAdd(p_Inicio, p_Dias) {		var Inicio = p_Inicio.split("/"); 		Inicio =  new Date([Inicio[1] , Inicio[0] , Inicio[2]].join("/"));		var newdate = new Date(Inicio);				newdate.setDate(newdate.getDate() +  parseInt(p_Dias,10));		var dd = newdate.getDate();		var mm = newdate.getMonth() + 1;		var y = newdate.getFullYear();			return ((dd < 10)?"0"+dd:dd) + '/' + ((mm < 10)?"0"+mm:mm) + '/' + y;		 	} 		function TableButtons(p_FileName, p_Columns, p_Copy, p_CSV, p_Excel, p_PDF, p_Print, p_Visibility, p_pageLength){				var Title = p_FileName,			FileName = p_FileName;				var $Copy = p_Copy,			$CSV = p_CSV,			$Excel = p_Excel,			$PDF = p_PDF,			$Print = p_Print,			$Visibility = p_Visibility,			$PageLenght = p_pageLength;				var Buttons = [];						if ($PageLenght) {					Buttons.push(				{ 					extend: 'pageLength',					text: "<i class='fa fa-list-ol'></i> <span>N&uacute;mero de Filas</span>"				}			);		}				if ($Visibility) {					Buttons.push(				{ 					extend: "colvis",					text: "<i class='fa fa-eye-slash'></i> <span>Ver Columnas</span>",					collectionLayout: 'fixed two-column',					//exclude: [0],					columnText: function ( dt, idx, title ) {						return (idx)+': '+title;					}				}			);		}		if($Copy){			Buttons.push(				{ 					extend: 'copy',					text: "<i class='fa fa-copy'></i> <span>Copiar</span>",					title: Title,					filename: FileName,					exportOptions: {						columns: p_Columns					}				}			);		}				if($CSV) {			Buttons.push(				{					extend: 'csv',					text: "<i class='fa fa-database'></i> <span>Exportar a CSV</span>",					title: Title,					filename: FileName,					exportOptions: {						columns: p_Columns					}				}			);		}					if($Excel) {			Buttons.push(				{					extend: 'excel', 					text: "<i class='fa fa-file-excel-o'></i> <span>Exportar a Excel</span>",					title: Title,					filename: FileName,					exportOptions: {						columns: p_Columns					},					customize: function(xlsx) {											var sheet = xlsx.xl.worksheets['sheet1.xml'];												//Encabezados con filtros						$('row:first c', sheet).attr( 's', '22' );						 						var lastCol = sheet.getElementsByTagName('col').length - 1;						var colRange = createCellPos( lastCol ) + '1';						var afSerializer = new XMLSerializer();						var xmlString = afSerializer.serializeToString(sheet);						var parser = new DOMParser();						var xmlDoc = parser.parseFromString(xmlString,'text/xml');						var xlsxFilter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','autoFilter');						var filterAttr = xmlDoc.createAttribute('ref');						filterAttr.value = 'A1:' + colRange;						xlsxFilter.setAttributeNode(filterAttr);						sheet.getElementsByTagName('worksheet')[0].appendChild(xlsxFilter);						function createCellPos( n ){							var ordA = 'A'.charCodeAt(0);							var ordZ = 'Z'.charCodeAt(0);							var len = ordZ - ordA + 1;							var s = "";						 							while( n >= 0 ) {								s = String.fromCharCode(n % len + ordA) + s;								n = Math.floor(n / len) - 1;							}							return s;						}					}				}			);		}				if($PDF) {			Buttons.push(				{					extend: 'pdf', 					text: "<i class='fa fa-file-pdf-o'></i> <span>Exportar a PDF</span>",					orientation: 'landscape',					pageSize: 'LETTER',					title: Title,					filename: FileName,					exportOptions: {						columns: p_Columns					},					customize: function(doc) {						doc.styles.title.fontSize = 10;						doc.defaultStyle.fontSize = 7;						doc.styles.tableHeader.fontSize = 8;						doc.styles.tableFooter.fontSize = 8;					}				}			);		}				if($Print) {			Buttons.push(				{					extend: 'print',					text: "<i class='fa fa-print'></i> <span>Imprimir</span>",					title: Title,					exportOptions: {						columns: p_Columns					},					customize: function (win){						$(win.document.body).addClass('white-bg');						$(win.document.body).css('font-size', '10px');						$(win.document.body).find('table')								.addClass('compact')								.css('font-size', 'inherit');					}				}			);		}							var ButtonsCollection =	[            {                extend: 'collection',                text: "<i class='fa fa-gear'></i> <span>Opciones</span>",                buttons: Buttons            }        ]						return ButtonsCollection;			}		