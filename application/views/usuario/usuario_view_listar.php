<div class="legend">
	<h2>Usuario: Listado de Usuarios</h2>
</div>
<br>
<form style="min-width: 1081px;">
	<div class="usuario-informacion">
		<fieldset class="informacion" style="min-width: 1053px;">
			<legend>
				Información
			</legend>
			<div class="area" style="display: table;">
				<div class="posicion1">
					<div style="float:left; width:250px; height:45px;">
						<label>Buscar :</label>
						<input type="text" name="txtnombre" value=""  placeholder="Buscar usuario" required="" />
					</div>
				</div>
				<div class="posicion1" style="margin-top: 0; clear: both">
					<div style="float:left; width:250px; height:30px;">
						<?php if(@$this->session->flashdata('mensaje')){echo ('<span class=mensaje><img src="'.IMG.'check.png'.'" width="16" height="16"/> '.$this->session->flashdata('mensaje').'</span>');}?>
					</div>
				</div>
				<br>
				<br>
				<div class="posicion1">
					<div style="float:left; width:1050px; min-height: 35px;">
						<table id="gradient-style" style="width:1000px;">
							<thead>
								<tr>
									<th style="width: 28%;">Usuario</th>
									<th style="width: 40%;">Nombres</th>
									<th style="width: 18%;">Tipo Usuario</th>
									<th style="width: 7%;">Editar</th>
									<th style="width: 7%;">Borrar</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($usuarios as $usuario):?>
									<tr>
										<td><?=$usuario->usuario;?></td>
										<td><?=$usuario->nombcompleto;?></td>
										<td><?=$usuario->tipousuario;?></td>
										<td style="text-align: center;"><a href='<?=base_url().'home/actualizar_usuario/'.$usuario->usuarioid?>'><img src='<?=IMG.'edit.png'?>' width='20' height='20' /></a></td>
										<td style="text-align: center;"><a href='<?=base_url().'home/eliminar_usuario/'.$usuario->usuarioid?>'><img src='<?=IMG.'trash.png'?>' width='20' height='20' /></a></td>
									</tr>
								<?php endforeach;?>
							</tbody>
							<tfoot></tfoot>
						</table>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
		</fieldset>
	</div>
</form>