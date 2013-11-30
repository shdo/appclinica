$(document).on('ready',function(){
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
	              	"<td style='text-align: center;'><a id='edit' href=#><input name='valor' type='hidden' value='"+json.id+"'/><img src=" + $('#gradient-style tbody').find('img').attr('src') + " width=20 height=20></a></td>" +
	            	"</tr>" );
				}
				else{
					for(i=0;i<$('#gradient-style>tbody>tr').length;i++){
						if(json.id==$('#gradient-style tbody tr').find('input').attr('value')){
							alert('este es igual');
						}
					}
				}
	            $('.reveal-modal-bg').delay(300).fadeOut(300);
	            $('#myModal').animate({
	            	"opacity" : 0
	            }, 300, function() {
	            	$('#myModal').css({'opacity' : 1, 'visibility' : 'hidden', 'top' : 100});
	            });
			});
		});
		
		$('#gradient-style tbody #edit').on('click', function(){
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
});
