<div id="enfermedad_actual" class="content_tab">
	<div class="area" style="display: table;">
		<div class="posicion1">
			<div style="float:left; width:250px; height:30px;">
				<a class="open-modal"><img src="<?=IMG.'add.png'?>" /></a>
            </div>
        </div>
        <div class="posicion1">
        	<div style="float:left; width:1050px; min-height: 35px;">
        		<table id="gradient-style" style="width:1000px;">
        			<thead>
        				<tr>
        					<th style="width: 14%;">Fecha</th>
        					<th style="width: 20%;">Tiempo de Enfermedad</th>
        					<th style="width: 60%;">Relato</th>
        					<?php if ($this->session->userdata['tipousuario']=='secretaria' || $this->session->userdata['tipousuario']=='administrador'): ?>
        						<th style="width: 6%;">Editar</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody class="tabla">
                    	<?php if(is_array(@$diagnostico)):?>
	                    	<?php foreach (@$diagnostico as $diagno):?>
	                    		 <tr>
	                    		 	<td><?= $diagno->fecha; ?></td>
	                                <td><?= $diagno->tiemenferm; ?></td>
	                                <td><?= $diagno->relato; ?></td>
	                                <?php if ($this->session->userdata['tipousuario']=='secretaria' || $this->session->userdata['tipousuario']=='administrador'): ?>
	                                	<td style="text-align: center;"><a id="edit"><input name="valor" type="hidden" value="<?=$diagno->diagnosticoid?>" /><img src='<?= IMG . 'edit.png' ?>' width='20' height='20' /></a></td>
	                                <?php endif ?>
	                             </tr>
	                    	<?php endforeach?>
                    	<?php endif?>
                    </tbody>
                    <tfoot></tfoot>
               </table>
           </div>
        </div>
        <br><br><br><br><br>
    </div>
	<div id="myModal" class="reveal-modal">
		<form id="frm-dialog" action="#">
		<input type="hidden" name="hdnhistoriaid" value="<?=@$historia->historiaclinicaid;?>"/>
		<input type="hidden" name="hdndiagnosticoid"/>
		<div class="posicion1" style="float: left">
			<div style="float:left; width:255px; height:60px;">
				<label>Fecha:</label>
				<br/>
				<input type="date" name="txtFecha" style="width: 240px;"/>
			</div>
		</div>
		<br/><br/><br/>
		<div class="posicion1" >
			<div style="float:left; width:519px; height:60px;">
				<label>Tiempo de Enfermedad (T.E) :</label>
				<br/>
				<input type="text" name="txtTiempo" value=""  placeholder=""   />
			</div>
		</div>
		<div class="posicion1" >
			<div style="float:left; width:519px; height:60px;">
				<label>SP :</label>
				<br/>
				<input type="text" name="txtsp" value="" placeholder=""  />
			</div>
		</div>
		<br/><br/><br/>
		<div class="posicion1" >
			<div style="float:left; width:1054px; height:auto;">
				<label>Relato :</label>
				<br/>
				<textarea name="txtRelato" rows="3" cols="127"></textarea>
			</div>
		</div>
		<br><br><br><br><br>
		<div class="posicion1" >
			<div style="float:left; width:1044px; height:auto;">
				<table class="tbl-funciones" style="width:100%;border: 1px solid #ABADB3; border-collapse: collapse;">
					<tr class="row1">
						<td width="17%">FUNCIONES VITALES:</td>
						<td width="16%">F.C. <input type="text" name="txtFC"/></td>
						<td width="17%">P.A. <input type="text" name="txtPA"/> </td>
						<td width="17%">F.R. <input type="text" name="txtFR"/> </td>
						<td width="16%">T. <input type="text" name="txtT"/> </td>
						<td width="17%">PESO <input type="text" name="txtPeso"/> </td>
					</tr>
					<tr class="row2">
						<td colspan="2" width="33%">GENERAL <input type="text" name="txtGeneral"/></td>
						<td colspan="2" width="33%">CABEZA: <input type="text" name="txtCabeza"/></td>
						<td colspan="2" width="34%">CUELLO: <input type="text" name="txtCuello"/></td>
					</tr>
					<tr class="row3">
						<td colspan="3" width="50%">TORAX Y PULMONES: <input type="text" name="txtTorax"/></td>
						<td colspan="3" width="50%">CARDIOVASCULAR <input type="text" name="txtCardio"/></td>
					</tr>
					<tr>
						<td colspan="2" width="33%" valign="middle" align="center">ABDOMEN</td>
						<td colspan="4" width="67%">
							<textarea name="txtAbdomen" style="border: 0; height: 30px; width: 690px;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" valign="middle" align="center">GENITO-UNITARIO</td>
						<td colspan="4">
							<textarea name="txtGenito" style="border: 0; height: 30px; width: 690px;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" valign="middle" align="center">LOCOMOTOR Y NEUROLOGICO</td>
						<td colspan="4">
							<textarea name="txtLocomotor" style="border: 0; height: 30px; width: 690px;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" valign="middle" align="center">Dx.</td>
						<td colspan="4">
							<textarea name="txtDX" style="border: 0; height: 30px; width: 690px;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" valign="middle" align="center">TRATAMIENTO</td>
						<td colspan="4">
							<textarea name="txtTratamiento" style="border: 0; height: 30px; width: 690px;"></textarea>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="posicion1" >
			<div style="float:left; width:1044px; height:auto;">
				<label>Exámenes Auxiliares :</label>
				<br/>
				<textarea name="txtExa" rows="3" cols="127"></textarea>
			</div>
		</div>
		<br/><br/><br/>
		<div class="posicion1" style="float: right;" >
			<div style="float:left;  height:60px;">
				<input id="add" type="button" value="Agregar"  class="button red" />
				<input type="button" value="Cancelar" class="button red cancelButton"/>
			</div>
		</div>
		<a class="close-reveal-modal">&#215;</a>
		</form>
	</div>
</div>