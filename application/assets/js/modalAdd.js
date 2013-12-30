function limpiarForm(){
	$('input[name=txtFecha]').val('');$('input[name=txtTiempo]').val('');$('input[name=txtsp]').val('')
	;$('textarea[name=txtRelato]').val('');$('input[name=txtFC]').val('');$('input[name=txtPA]').val('')
	;$('input[name=txtFR]').val('');$('input[name=txtT]').val('');$('input[name=txtPeso]').val('')
	;$('input[name=txtCabeza]').val('');$('input[name=txtCuello]').val('')
	;$('input[name=txtTorax]').val('');$('input[name=txtCardio]').val('');$('textarea[name=txtAbdomen]').val('')
	;$('textarea[name=txtGenito]').val('');$('textarea[name=txtLocomotor]').val('');$('textarea[name=txtDX]').val('');
	;$('textarea[name=txtTratamiento]').val('');
	;$('textarea[name=txtExa]').val('');
}
$(document).on('ready',function(){
		var uri = purl();
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		var calendar = $('#calendar').fullCalendar({
			eventDrop: function(event, dayDelta, minuteDelta, allDay, revertfunc){
				if(dayDelta!=0 || minuteDelta!=0){
					$.post('http://localhost/appclinica/home/mover_cita/'+event.id+'/'+dayDelta+'/'+minuteDelta);
				}
				console.log(event);
				console.log(dayDelta);
				console.log(minuteDelta);
				console.log(allDay);
				console.log(revertfunc);
			},
			dayClick: function(date, allDay, jsEvent, view){
				var check = $.fullCalendar.formatDate(date,'yyyy-MM-dd');
				var today = $.fullCalendar.formatDate(new Date(),'yyyy-MM-dd');
				if(check<today){
					alert('No puedes reservar citas en dias pasados');
				}else{
					window.location = 'http://localhost/appclinica/home/agregar_cita/'+$.fullCalendar.formatDate(date,'yyyy-MM-dd');
				}
				
			},
			eventResize: function(event, dayDelta, minuteDelta, revertFunc){
				if(dayDelta!=0 || minuteDelta!=0){
					$.post('http://localhost/appclinica/home/agrandar_cita/'+event.id+'/'+minuteDelta);
				}
				console.log(event);
				console.log(dayDelta);
				console.log(minuteDelta);
				console.log(revertFunc);
			},
			header : {
				left : 'prev,next today',
				center : 'title',
				right : 'month,agendaWeek,agendaDay'
			},
			editable : true,
			slotMinutes: 10,
			minTime:'8:00',
			maxTime:'22:00',
			hiddenDays: [0],
			allDaySlot: false,
			events: 'http://localhost/appclinica/home/listar_cita/'+null+'/'+null
		});
		
		$('#enfermedad_actual #open-modal-enfermedad').on('click', function(){
			limpiarForm();
			$('.reveal-modal-bg').remove();
			$('#myModal').reveal({
				animation:'fade', 
				animationspeed: 300,                     
     			closeonbackgroundclick: false,
			});
		});

		$('#add').on('click', function(){
			function Enfermedad(fecha,tiemenferm,sp,relato
							,fc,pa,fr,temperatura,
							peso,cabeza,cuello,toraxpulmones,
							cardiovascular,abdomen,genitourinario,
							locomotor,neurologico,dx1,dx2
							,dx3,dx4,tratamiento1
							,tratamiento2,tratamiento3,tratamiento4
							,exauxiliares,historiaclinicaid,diagnosticoid){
			this.fecha=fecha;
			this.tiemenferm=tiemenferm;
			this.sp=sp;
			this.relato=relato;
			this.fc=fc;
			this.pa=pa;
			this.fr=fr;
			this.temperatura=temperatura;
			this.peso=peso;
			this.cabeza=cabeza;
			this.cuello=cuello;
			this.toraxpulmones=toraxpulmones;
			this.cardiovascular=cardiovascular;
			this.abdomen=abdomen;
			this.genitourinario=genitourinario;
			this.locomotor=locomotor;
			this.neurologico=neurologico;
			this.dx1=dx1;
			this.dx2=dx2;
			this.dx3=dx3;
			this.dx4=dx4;
			this.tratamiento1=tratamiento1;
			this.tratamiento2=tratamiento2;
			this.tratamiento3=tratamiento3;
			this.tratamiento4=tratamiento4;
			this.exauxiliares=exauxiliares;
			this.historiaclinicaid=historiaclinicaid;
			this.diagnosticoid=diagnosticoid;
		}
		
		var enferm = new Enfermedad($('input[name=txtFecha]').val(),$('input[name=txtTiempo]').val(),$('input[name=txtsp]').val()
								   ,$('textarea[name=txtRelato]').val(),$('input[name=txtFC]').val(),$('input[name=txtPA]').val()
								   ,$('input[name=txtFR]').val(),$('input[name=txtT]').val(),$('input[name=txtPeso]').val()
								   ,$('input[name=txtCabeza]').val(),$('input[name=txtCuello]').val()
								   ,$('input[name=txtTorax]').val(),$('input[name=txtCardio]').val(),$('textarea[name=txtAbdomen]').val()
								   ,$('textarea[name=txtGenito]').val(),$('textarea[name=txtLocomotor]').val(),$('textarea[name=txtLocomotor]').val(),$('textarea[name=txtDX]').val()
								   ,$('textarea[name=txtDX]').val(),$('textarea[name=txtDX]').val(),$('textarea[name=txtDX]').val()
								   ,$('textarea[name=txtTratamiento]').val(),$('textarea[name=txtTratamiento]').val(),$('textarea[name=txtTratamiento]').val(),$('textarea[name=txtTratamiento]').val()
								   ,$('textarea[name=txtExa]').val(),$('input[name=hdnhistoriaid]').val(),$('input[name=hdndiagnosticoid]').val());
		var listEnfenrmedad = new Array();
		listEnfenrmedad[listEnfenrmedad.length] = enferm;
		var json = JSON.stringify(listEnfenrmedad);
			$.post('http://localhost/appclinica/paciente/enfermedad/addOrUpdate',{enfermedad:json}, function(rpta){
				var json = JSON.parse(rpta);
				if(enferm.diagnosticoid==null){
					$( "#gradient-style tbody" ).append( "<tr>" +
	              	"<td>" + enferm.fecha + "</td>" +
	              	"<td>" + enferm.tiemenferm+ "</td>" +
	              	"<td>" + enferm.relato + "</td>" +
	              	"<td style='text-align: center;'><a id='edit'><input name='valor' type='hidden' value='"+json.id+"'/><img src=" + $('#gradient-style tbody').find('img').attr('src') + " width=20 height=20></a></td>" +
	            	"</tr>" );
				}
				else{
					$.post('http://localhost/appclinica/paciente/enfermedad/getAll',{id:enferm.historiaclinicaid},function(rptas){
						var jsonRpta = JSON.parse(rptas);
						$('#gradient-style tbody tr').remove();
						for(j=0;j<jsonRpta.length;j++){
							$('#gradient-style tbody').append("<tr>" +
	              			"<td>" + jsonRpta[j].fecha + "</td>" +
	              			"<td>" + jsonRpta[j].tiemenferm+ "</td>" +
			              	"<td>" + jsonRpta[j].relato + "</td>" +
			              	"<td style='text-align: center;'><a id='edit'><input name='valor' type='hidden' value='"+jsonRpta[j].diagnosticoid+"'/><img src='http://localhost/appclinica/application/assets/img/edit.png' width=20 height=20></a></td>" +
			            	"</tr>");
						}
					});
				}
	            $('.reveal-modal-bg').delay(300).fadeOut(300);
	            $('#myModal').animate({
	            	"opacity" : 0
	            }, 300, function() {
	            	$('#myModal').css({'opacity' : 1, 'visibility' : 'hidden', 'top' : 100});
	            });
			});
		});
		
		$('#gradient-style .tabla').on('click','#edit', function(){
			$.post('http://localhost/appclinica/paciente/enfermedad/get/'+$(this).find('input').attr('value'),{id:$(this).find('input').attr('value')}, function(rpta){
				var json = JSON.parse(rpta);
				$('input[name=txtFecha]').val(json.fecha);$('input[name=txtTiempo]').val(json.tiemenferm);$('input[name=txtsp]').val(json.sp)
				;$('textarea[name=txtRelato]').val(json.relato);$('input[name=txtFC]').val(json.fc);$('input[name=txtPA]').val(json.pa)
				;$('input[name=txtFR]').val(json.fr);$('input[name=txtT]').val(json.temperatura);$('input[name=txtPeso]').val(json.peso)
				;$('input[name=txtCabeza]').val(json.cabeza);$('input[name=txtCuello]').val(json.cuello)
				;$('input[name=txtTorax]').val(json.toraxpulmones);$('input[name=txtCardio]').val(json.cardiovascular);$('textarea[name=txtAbdomen]').val(json.abdomen)
				;$('textarea[name=txtGenito]').val(json.genitourinario);$('textarea[name=txtLocomotor]').val(json.locomotor +' '+ json.neurologico);$('textarea[name=txtDX]').val(json.dx1+' '+json.dx2+' '+json.dx3+' '+json.dx4);
				;$('textarea[name=txtTratamiento]').val(json.tratamiento1+' '+json.tratamiento2+' '+json.tratamiento3+' '+json.tratamiento4);
				;$('textarea[name=txtExa]').val(json.exauxiliares);$('input[name=hdnhistoriaid]').val(json.historiaclinicaid);$('input[name=hdndiagnosticoid]').val(json.diagnosticoid);
				$('#myModal').reveal({
					animation:'fade', 
					animationspeed: 300,                     
     				closeonbackgroundclick: false,
				});
			});
		});

		/*$('#subirArchivo').on('click', function(){
			$.post('http://localhost/appclinica/paciente/paciente/upload/',{historia:$('input[name=hdnhistoriaid]').val()}, function(data){
				console.log($("#gradient-style-informe"));
				var jsonRpta = JSON.parse(data);
				$("#gradient-style-informe tbody").append( "<tr>" +
	              "<td>" + json.nombre + "</td>" +
	              "<td>" + json.tipo+ "</td>" +
	              "<td></td>" +
	              "</tr>" );
			});
		});*/

		$('#frmSubir').submit(function(e) {
      		e.preventDefault();
      		$.ajaxFileUpload({
         		url         :'http://localhost/appclinica/paciente/paciente/upload/', 
         		secureuri      :false,
         		fileElementId  :'f_subir',
         		dataType    : 'json',
         		data        : {
            		'historia' : $('input[name=hdnhistoriaid]').val()
         		},
         		success  : function (data, status)
         		{
					console.log($("#gradient-style-informe"));
					$("#gradient-style-informe tbody").append( "<tr>" +
	           		  "<td>" + data.nombre + "</td>" +
	           		  "<td>" + data.tipo+ "</td>" +
	           		  "<td style='text-align: center;'><a id=edit><input name=valor type=hidden value= /><img src=http://localhost/appclinica/application/assets/img/download.png width='20' height='20' /></a></td>" +
	           		  "</tr>" );
					$('.reveal-modal-bg').delay(300).fadeOut(300);
	            	$('#modal-informe').animate({
	            		"opacity" : 0
	            	}, 300, function() {
	            		$('#modal-informe').css({'opacity' : 1, 'visibility' : 'hidden', 'top' : 100});
	            	});
         		}
      		});
      		return false;
   		});
		
		$('#open-modal-search').on('click',function(){
			$('#txtBuscarCita').val('');
			$('#modal-buscar').addClass('medium');
			$('.medium').css('top','250px');
			$('#modal-buscar').reveal({
				animation:'fade', 
				animationspeed: 300,                     
     			closeonbackgroundclick: false,
			});
		});

		$('#informe #open-modal-informe').on('click',function(){
			$('#f_subir').val('');
			$('#modal-informe').addClass('medium');
			$('.medium').css('top','250px');
			$('.reveal-modal-bg').remove();
			$('#modal-informe').reveal({
				animation:'fade', 
				animationspeed: 300,                     
     			closeonbackgroundclick: false,
			});
		});

		$("#especialidad").click(function() {  
        	if($("#especialidad").is(':checked')) {  
            	camp='especialidad'
        	}
    	});

		$("#medico").click(function() {  
        	if($("#medico").is(':checked')) {  
            	camp='nombcompleto'
        	} 
    	});
		$('#txtBuscarCita').autocomplete({
			source: function(request,response){
				$.ajax({
					type: 'POST',
					url:'http://localhost/appclinica/cita/cita/autocomplete',
					data: {
						dato: $('#txtBuscarCita').val(),
						campo: camp
					},
					dataType: 'json',
					success: function(data){
						if(data!=null){
							if(camp=='especialidad'){
								response($.map(data, function(item){
									return {
										label: item.especialidad,
										value: item.especialidad,
										campo: item.especialidad
									}
								}));
							}
							if(camp==='nombcompleto'){
								response($.map(data, function(item){
									return {
										label: item.nombcompleto,
										value: item.nombcompleto,
										campo: item.nombcompleto
									}
								}));
							}
						}
					},
					error: function(){
						
					}
				});
			},
			delay: 1000,
			select: function(event, ui){
				var url = 'http://localhost/appclinica/home/listar_cita/'+camp+'/'+ui.item.campo;
				console.log(url);
				$('#calendar table').remove();
				$('#calendar div').remove();
				$('#Msg').remove();
				$('#ya').append("<label id='Msg' style='font-size: 24px; font-weight: bold;'>Citas Reservadas: "+ui.item.campo+"</label>");
				$('#calendar').fullCalendar({
					eventDrop: function(event, dayDelta, minuteDelta, allDay, revertfunc){
						if(dayDelta!=0 || minuteDelta!=0){
							$.post('http://localhost/appclinica/home/mover_cita/'+event.id+'/'+dayDelta+'/'+minuteDelta);
						}
						console.log(event);
						console.log(dayDelta);
						console.log(minuteDelta);
						console.log(allDay);
						console.log(revertfunc);
					},
					dayClick: function(date, allDay, jsEvent, view){
						var check = $.fullCalendar.formatDate(date,'yyyy-MM-dd');
						var today = $.fullCalendar.formatDate(new Date(),'yyyy-MM-dd');
						if(check<today){
							alert('No puedes reservar citas en dias pasados');
						}else{
							window.location = 'http://localhost/appclinica/home/agregar_cita/'+$.fullCalendar.formatDate(date,'yyyy-MM-dd');
						}
						
					},
					eventResize: function(event, dayDelta, minuteDelta, revertFunc){
						console.log(event);
						console.log(dayDelta);
						console.log(minuteDelta);
						console.log(revertFunc);
					},
					header : {
						left : 'prev,next today',
						center : 'title',
						right : 'month,agendaWeek,agendaDay'
					},
					editable : true,
					slotMinutes: 10,
					minTime:'8:00',
					maxTime:'22:00',
					hiddenDays: [0],
					allDaySlot: false,
					events: url
			});
		
		/*$('.area .open-modal').on('click', function(){
			limpiarForm();
			$('#myModal').reveal({
				animation:'fade', 
				animationspeed: 300,                     
     			closeonbackgroundclick: false,
			});
		});*/
				$('.reveal-modal-bg').delay(300).fadeOut(300);
	            $('#modal-buscar').animate({
	            	"opacity" : 0
	            }, 300, function() {
	            	$('#modal-buscar').css({'opacity' : 1, 'visibility' : 'hidden', 'top' : 100});
	            });
			}
		});
		
		$('#txtbuscarPaciente').autocomplete({
			source: function(request,response){
				$.ajax({
					type: 'POST',
					url:'http://localhost/appclinica/paciente/paciente/autocomplete',
					data: {
						dato: $('#txtbuscarPaciente').val()
					},
					dataType: 'json',
					success: function(data){
						if(data!=null){
							response($.map(data, function(item){
								return {
									label: item.nomcompleto,
									value: item.nomcompleto,
									pacienteid: item.pacienteid,
									nomcompleto: item.nomcompleto
								}
							}));
						}
					},
					error: function(){
						
					}
				});
			},
			delay: 1000,
			select: function(event, ui){
				$('.tabs').hide();
				$('#nuevo').hide();
				$('#recurrente').hide();
				$('input[name=hdnpacienteid]').val(ui.item.pacienteid);
				$('input[name=txtnombre]').val(ui.item.nomcompleto);
				$('input[name=hdnfecha_actual]').val(uri.segment(4));
				$('.content .agregar_cita').show();
			}
		});
		$('#buscarCita').autocomplete({
			source: function(request,response){
				$.ajax({
					type: 'POST',
					url:'http://localhost/appclinica/medico/medico/autocomplete',
					data: {
						dato: $('#buscarCita').val()
					},
					dataType: 'json',
					success: function(data){
						if(data!=null){
							response($.map(data, function(item){
								return {
									label: item.nombcompleto,
									value: item.nombcompleto,
									medicoid: item.medicoid,
									nomcompleto: item.nombcompleto
								}
							}));
						}
					},
					error: function(){
						
					}
				});
			},
			delay: 1000,
			select: function(event, ui){
				$('#c_atendidas').attr('href','http://localhost/appclinica/cita/cita/report/'+ui.item.medicoid+'/atendidas/'+$('#buscarCita').val());
				$('#c_pendientes').attr('href','http://localhost/appclinica/cita/cita/report/'+ui.item.medicoid+'/pendientes/'+$('#buscarCita').val());
			}
		});
		$('#cboEspecialidad').on('change', function(){
			$('#cboEspecialidad option:selected').each(function(){
				$.post('http://localhost/appclinica/medico/medico/getByEspecialidad',{especialidad:$('#cboEspecialidad').val()},function(data){
					var json = JSON.parse(data);
					$('#cboMedico option').remove();
					for(var i=0;i<json.length;i++){
						$('#cboMedico').append('<option value='+json[i].medicoid+'>'+json[i].nombcompleto+'</option>');
					}
				});
			});
		});
});