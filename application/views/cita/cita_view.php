<div class="legend">
	<h2>Cita: Control de cita médica</h2>
</div>
<br />
<div style="min-width: 1081px; width: 1081px;margin: 0 auto;">
	<div style="width: 100%; height: 30px">
		<div id="ya" style="width:600px; height:30px;margin: 0 auto; text-align: center">
			<label id="Msg" style="font-size: 24px; font-weight: bold;">Citas Reservadas</label>
		</div>
	</div>
    <br>
	<div class="posicion1" style="padding-left: 0px">
		<div style="float:left; width:250px; height:30px;">
			<a id="open-modal-search"><img src="<?=IMG.'search.png'?>" height="24" width="24"/></a>
		</div>
    </div>
	<div id="calendar" class="fc fc-ltr">
	</div>
	<div id="modal-buscar" class="reveal-modal">
		<div style="height: auto; overflow: hidden; padding-top: 10px">
			<div style="float:left; width:400px; height:30px;">
				<label>Buscar Por:</label>
				<input type="text" id="txtBuscarCita"style="width: 300px"/>
			</div>
			<br />
			<div style="float:left; width:276px; height:30px; margin-left: 72px">
				<input id="especialidad" type="radio" name="rFiltro" value="especialidad" style="vertical-align: middle;"/>
				<label>Especialidad</label>
				<input id="medico" type="radio" name="rFiltro" style="vertical-align: middle; margin-left: 20px"/>
				<label>Medico</label>
			</div>
			<br />
		</div>
		<a class="close-reveal-modal">&#215;</a>
	</div>
</div>
