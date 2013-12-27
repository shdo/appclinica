<div class="legend">
    <h2>Medico: Lista de Medicos</h2>
</div>
<br/>
<form style="min-width: 1081px;">
    <fieldset class="informacion" style="min-width: 1053px;">
        <legend>
            Información
        </legend>
        <div class="area" style="display: table;">
            <div class="posicion1">
                <div style="float:left; width:250px; height:45px;">
                    <label>Buscar :</label>
                    <input type="text" name="txtbuscar" value=""  placeholder="Escriba primer apellido" required="" />
                </div>
            </div>
            <div class="posicion1" >
            	<div style="float:left; width:340px; height:60px;">
					<a href="<?=base_url().'medico/medico/report'?>" target="_blank"><input type="button" value="Exportar"  class="button red" /></a>
				</div>
			</div>
            <div class="posicion1" style="margin-top: 0; clear: both">
                <div style="float:left; width:250px; height:30px;">
                    <?php if (@$this->session->flashdata('mensaje')) {
                        echo ('<span class=mensaje><img src="' . IMG . 'check.png' . '" width="16" height="16"/> ' . $this->session->flashdata('mensaje') . '</span>');
                    } ?>
                </div>
            </div>
            <br><br>
            <div class="posicion1">
                <div style="float:left; width:1050px; min-height: 30px;">
                    <table id="gradient-style" style="width:1000px;">
                        <thead>
                            <tr>
                                <th style="width: 84px;">DNI</th>
                                <th style="width: 104px;">Nombres</th>
                                <th style="width: 184px;">Apellidos</th>
                                <th style="width: 34px;">Edad</th>
                                <th style="width: 224px;">Domicilio</th>
                                <th style="width: 84px;">Teléfono</th>
                                <?php if ($this->session->userdata['tipousuario']=='administrador'): ?>
                                <th style="width: 34px;">Editar</th>
                                <th style="width: 34px;">Borrar</th>
                                <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($medicos as $medico): ?>
                            <tr>
                                <td><?= $medico->dni; ?></td>
                                <td><?= $medico->nombres; ?></td>
                                <td><?= $medico->apepaterno . ' ' . $medico->apematerno; ?></td>
                                <td>edad</td>
                                <td><?= $medico->domicilio; ?></td>
                                <td><?= $medico->telefono; ?></td>
                                <?php if ($this->session->userdata['tipousuario']=='administrador'): ?>
                                <td style="text-align: center;"><a href='<?= base_url() . 'home/actualizar_doctor/' . $medico->medicoid ?>'><img src='<?= IMG . 'edit.png' ?>' width='20' height='20' /></a></td>
                                <td style="text-align: center;"><a href='<?= base_url() . 'home/eliminar_doctor/' . $medico->medicoid . '/' . $medico->personaid ?>'><img src='<?= IMG . 'trash.png' ?>' width='20' height='20' /></a></td>
                                <?php endif ?>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <div></div>
                    </table>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </fieldset>
</form>