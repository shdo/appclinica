<div class="legend">
	<h2>Medico: Agregar Medico</h2>
</div>
<br/>
<form style="min-width:1053px;" method="POST" action="<?=base_url().'medico/medico/addOrUpdate'?>">
	<div class="doctor-general">
		<fieldset style="min-width:1053px;">
			<legend>General</legend>
			<div class="area">
				<input type="hidden" name="hdnmedicoid" value=""/>
				<input type="hidden" name="hdnpersonaid" value="<?=@$medico->personaid;?>"/>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>D.N.I.:</label>
						<br/>
						<input type="text" name="txtdni" value="<?=@$medico->dni;?>"  placeholder="Escriba D.N.I" required="" />
					</div>
				</div>
				<br><br><br>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Nombres:</label>
						<br/>
						<input type="text" name="txtnombre" value="<?=@$medico->nombres;?>"  placeholder="Escriba Nombres" required="" />
					</div>
				</div>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Apellido Paterno:</label>
						<br/>
						<input type="text" name="txtapepaterno" value="<?=@$medico->apepaterno;?>"  placeholder="Escriba Apellido Paterno" required="" />
					</div>
				</div>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Apellido Materno:</label>
						<br/>
						<input type="text" name="txtapematerno" value="<?=@$medico->apematerno;?>"  placeholder="Escriba Apellido Materno" required="" />
					</div>
				</div>
				<br><br><br>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Fecha de Nacimiento:</label>
						<br/>
						<input type="date" name="txtfecha" value="<?=@$medico->fechnacimiento;?>" required="" style="width: 240px;"/>
					</div>
				</div>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Estado Civil:</label>
						<br/>
						<select name="list_estado" style="width: 245px;" required>
							<option  selected="" value="">Seleccionar...</option>
							<?php
								foreach ($estadocivil as $key => $value) {
									echo '<option value="' . $key . '">' . $value . '</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Teléfono:</label>
						<br/>
						<input type="text" name="txttelefono" value="<?=@$medico->telefono;?>"  placeholder="Escriba Teléfono" required="" />
					</div>
				</div>
				<br><br><br>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Departamento:</label>
						<br/>
						<select name="list_departamento" style="width: 245px;">
							<option  selected="" value="">Seleccionar...</option>
							<?php
								foreach ($departamentos as $key => $value) {
									echo '<option value="' . $key . '">' . $value . '</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Provincia:</label>
						<br/>
						<select name="list_provincia" style="width: 245px;">
							<option  selected="" value="">Seleccionar...</option>
							<?php
								foreach ($provincias as $key => $value) {
									echo '<option value="' . $key . '">' . $value . '</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Distrito:</label>
						<br/>
						<select name="list_distrito" style="width: 245px;">
							<option  selected="" value="">Seleccionar...</option>
							<?php
								foreach ($distritos as $key => $value) {
									echo '<option value="' . $key . '">' . $value . '</option>';
								}
							?>
						</select>
					</div>
				</div>
				<br><br><br>
				<div class="posicion1" >
					<div style="float:left; width:340px; height:60px;">
						<label>Especialidad:</label>
						<br/>
						<input type="text" name="txtespecialidad" value="<?=@$medico->especialidad?>"  placeholder="Escriba Nombres" required="" />
					</div>
				</div>
				<div class="posicion1">
					<div style="float:left; width:696px; height:60px;">
						<label>Dirección:</label>
						<br/>
						<input type="text" name="txtdireccion" value="<?=@$medico->domicilio;?>"  placeholder="Escriba Direccion" required="" style="width: 599px;"/>
					</div>
				</div>
			</div>
		</fieldset>
		<div class="posicion1" style="float: left; padding-left: 0" >
			<div style="float:right;  height:60px;">
				<?php if(@$this->session->flashdata('mensaje')){echo ('<span class=mensaje><img src="'.IMG.'check.png'.'" width="16" height="16"/> '.$this->session->flashdata('mensaje').'</span>');}?>
			</div>
		</div>
		<div class="posicion1" style="float: right;" >
			<div style="float:left;  height:60px;">
				<input type="submit" value="Guardar"  class="button red" />
				<input type="reset" value="Reset" class="button red" />
			</div>
		</div>
	</div>
</form>