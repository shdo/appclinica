<div class="legend">
	<h2>Paciente: Agregar Paciente</h2>
</div>
<br/>
<ul class="tabs">
	<li class="anamnesis">
		<a href="#anamnesis">Anamnesis</a>
	</li>
	<li class="enfermedad">
		<a href="#enfermedad_actual">Enfermedad Actual</a>
	</li>
	<li class="informe">
		<a href="#informe">Informe</a>
	</li>
</ul>
<div class="content">
	<form name = "frm-addpacciente" action = "<?=base_url().'paciente/paciente/addOrUpdate'?>" method="post" style="min-width: 1081px;">
		<?=@$anamnesis;?>
	</form>
	<?=@$enfermedad;?>
	<?=@$documentos;?>
</div>