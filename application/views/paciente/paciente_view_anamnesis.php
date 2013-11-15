<div id="anamnesis" class="content_tab">
	<fieldset style="min-width:1053px;">
		<legend>
			FILIACION
		</legend>
		<div class="area">
			<input type="hidden" name="hdnpacienteid" value="<?=@$paciente->pacienteid;?>"/>
			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Nombre Paciente :</label>
					<br/>
					<input type="text" name="txtnombre" value="<?=@$paciente->nombre;?>"  placeholder="Escriba Nombres" required="" />
				</div>
			</div>

			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Apellido Paterno :</label>
					<br/>
					<input type="text" name="txtapePaterno" value="<?=@$paciente->apepaterno;?>" placeholder="Escriba Ape. Paterno" required=""/>
				</div>
			</div>

			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Apellido Materno :</label>
					<br/>
					<input type="text" name="txtapeMaterno" value="<?=@$paciente->apematerno;?>" placeholder="Escriba Ape. Materno" required=""/>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Estado Civil:</label>
					<br/>
					<select name="list_estado">
						<option  selected="" value="">Seleccionar...</option>
						<?php
						foreach ($estadocivil as $key => $value) {
							echo '<option value="' . $key . '">' . $value . '</option>';
						}
						?>
					</select>
				</div>

			</div>
			<br/>
			<br/>
			<br/>
			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Edad Paciente:</label>
					<br/>
					<input type="text" name="txtedad" value="<?=@$paciente->edad;?>" placeholder="Escriba Edad" required=""/>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Ocupacion:</label>
					<br/>
					<input type="text" name="txtocupacion" value="<?=@$paciente->ocupacion;?>" placeholder="Escribe Ocupacion" required="" />
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:509px; height:60px;">
					<label>Domicilio:</label>
					<br/>
					<input style="width: 503px" type="text" name="txtdomicilio" value="<?=@$paciente->domicilio;?>" placeholder="Escribe Domicilio" required="" />
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Telefono:</label>
					<br/>
					<input type="text" name="txttelefono" value="<?=@$paciente->telefono;?>" placeholder="Escribe Telefono" required=""/>
				</div>
			</div>

			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Lugar de Nacimiento:</label>
					<br/>
					<input type="text" name="txtLugarNac" value="<?=@$paciente->lugarnac;?>" placeholder="Escribe Lugar Nac." required=""/>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:250px; height:60px;">
					<label>Lugar de Procedencia:</label>
					<br/>
					<input type="text" name="txtLugaProc" value="<?=@$paciente->lugarproc;?>" placeholder="Escribe Lugar Proc." required=""/>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
		</div>
	</fieldset>
	<fieldset class="antecedentes" style="min-width: 1053px;">
		<legend>
			ANTECEDENTES
		</legend>
		<div class="area">
			<div class="posicion1" >
				<div style="float:left; width:519px; height:60px;">
					<label>Médicos :</label>
					<br/>
					<input type="text" name="txtmedicos" value=""  placeholder="Escriba Medicos" required="" />
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:519px; height:60px;">
					<label>Quirúrgicos :</label>
					<br/>
					<input type="text" name="txtquirurgicos" value="" placeholder="Escriba antecedentes quirurgicos" required=""/>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<div class="posicion1" >
				<div style="float:left; width:1040px; height:60px;">
					<label>Alérgicos :</label>
					<br/>
					<input type="text" name="txtalergicos" value="" placeholder="Escriba alergias" required=""/>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<div class="posicion1" >
				<div style="float:left; width:170px; height:60px;">
					<label>Ginecologos:</label>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:275px; height:60px;">
					<label>FUR:</label>
					<br/>
					<input type="text" name="txtfur" value="" placeholder="" required=""/>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:275px; height:60px;">
					<label>MENARQUIA:</label>
					<br/>
					<input type="text" name="txtmenarquia" value="" placeholder="" required=""/>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:275px; height:60px;">
					<label>R.S.:</label>
					<br/>
					<input type="text" name="txtrs" value="" placeholder="" required=""/>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<div class="posicion1" >
				<div style="float:left; width:170px; height:60px;"></div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:275px; height:60px;">
					<label>R.C.:</label>
					<br/>
					<input type="text" name="txtrc" value="" placeholder="" required=""/>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:275px; height:60px;">
					<div class="posicion1" style="padding-left: 0">
						<div style="float:left; width:50px; height:60px;">
							<label>G:</label>
							<br/>
							<input type="text" name="txtg" value="" placeholder="" required=""/>
						</div>
					</div>
					<div class="posicion1" style="padding-left: 0">
						<div style="float:left; width:50px; height:60px;">
							<label>P:</label>
							<br/>
							<input type="text" name="txtp" value="" placeholder="" required=""/>
						</div>
					</div>
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:275px; height:60px;">
					<label>M.A.:</label>
					<br/>
					<input type="text" name="txtma" value="" placeholder="" required=""/>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<div class="posicion1" >
				<div style="float:left; width:519px; height:60px;">
					<label>Hospitalización :</label>
					<br/>
					<input type="text" name="txthospitalizacion" value=""  placeholder="" required="" />
				</div>
			</div>
			<div class="posicion1" >
				<div style="float:left; width:519px; height:60px;">
					<label>Hábitos Nocivos :</label>
					<br/>
					<input type="text" name="txthnocivos" value="" placeholder="" required=""/>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
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