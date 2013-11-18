<div class="legend">
	<?php
		if(@$usuario->usuarioid==null){
			echo "<h2>Usuario: Agregar Usuario</h2>";
		}
		else{
			echo "<h2>Usuario: Editar Usuario</h2>";
		}
	?>
</div>
<br>
<form style="min-width:1053px;" method="POST" action="<?=base_url().'usuario/usuario/addOrUpdate'?>">
	<div class="usuario-general">
		<fieldset style="min-width:1053px;">
			<legend>
				General
			</legend>
			<br />
			<div class="area">
				<div class="center" style="width: 436px; margin: 0 auto;">
					<input type="hidden" name="hdnusuarioid" value="<?=@$usuario->usuarioid;?>"/>
					<div class="posicion1" >
						<div style="float:left; width:420px; height:60px;">
							<label style="width: 18%; float: left; text-align: right;">Persona :</label>
							<select required="" name="list_persona" style="width: 330px"">
								<?php
								if(@$usuario->personaid){
									foreach ($personas as $persona) {
										if(@$usuario->personaid===$persona->personaid){
											echo '<option selected="" value="' . @$usuario->personaid . '">' . @$persona->nombcompleto . '</option>';
										}
									}
								}else{
									echo '<option  selected="" value="">Seleccionar...</option>';
									foreach ($personas as $persona) {
										echo '<option value="' . @$persona->personaid . '">' . @$persona->nombcompleto . '</option>';
									}
								}
								?>
							</select>
						</div>
					</div>
					<br><br><br>
					<div class="posicion1" >
						<div style="float:left; width:420px; height:60px;">
							<label style="width: 18%; float: left; text-align: right;">Usuario :</label>
							<input type="text" name="txtusuario" value="<?=@$usuario->usuario;?>"  placeholder="Escriba usuario" required="" style="width: 325px"/>
						</div>
					</div>
					<br><br><br>
					<div class="posicion1" >
						<div style="float:left; width:420px; height:60px;">
							<label style="width: 18%; float: left; text-align: right;">Contraseña :</label>
							<input type="password" name="txtcontrasenia" value="<?=@$usuario->contrasenia;?>"  placeholder="Escriba contraseña" required="" style="width: 325px"/>
						</div>
					</div>
					<br><br><br>
					<div class="posicion1" >
						<div style="float:left; width:420px; height:60px;">
							<label style="width: 18%; float: left; text-align: right;">Tipo :</label>
							<select required="" name="list_tipousuario" style="width: 330px"">
								<option  selected="<?=@$usuario->tipousuario;?>" value="">Seleccionar...</option>
								<option  value="administrador">Administrador</option>
								<option  value="medico">Médico</option>
								<option  value="secretaria">Secretaria</option>
							</select>
						</div>
					</div>
					<br><br><br>
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