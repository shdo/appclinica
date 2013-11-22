<div class="legend">
    <h2>Secretaria: Lista de Secretarias</h2>
</div>
<br/>
<form style="min-width: 1081px;">
    <fieldset class="informacion" style="min-width: 1053px;">
        <legend>
            Información
        </legend>
        <div class="area" style="display: table;">
            <div class="posicion1">
                <div style="float:left; width:250px; height:60px;">
                    <label>Buscar :</label>
                    <input type="text" name="txtbuscar" value=""  placeholder="Escriba primer apellido" required="" />
                </div>
            </div>
            <div class="posicion1" >
            	<div style="float:left; width:340px; height:60px;">
					<a href="<?=base_url().'secretaria/secretaria/report'?>" target="_blank"><input type="button" value="Exportar"  class="button red" /></a>
				</div>
			</div>
            <br><br><br>
            <div class="posicion1">
                <div style="float:left; width:1050px; min-height: 35px;">
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
<!--                                <th style="width: 34px;">Reporte</th>-->
                                <?php endif?>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($secretarias as $secretaria): ?>
                            <tr>
                                <td><?= $secretaria->dni; ?></td>
                                <td><?= $secretaria->nombres; ?></td>
                                <td><?= $secretaria->apepaterno . ' ' . $secretaria->apematerno; ?></td>
                                <td>edad</td>
                                <td><?= $secretaria->domicilio; ?></td>
                                <td><?= $secretaria->telefono; ?></td>
                                <?php if ($this->session->userdata['tipousuario']=='administrador'): ?>
                                <td style="text-align: center;"><a href='<?= base_url() . 'home/actualizar_secretaria/' . $secretaria->personaid ?>'><img src='<?= IMG . 'edit.png' ?>' width='20' height='20' /></a></td>
                                <td style="text-align: center;"><a href='<?= base_url() . 'home/eliminar_secretaria/' . $secretaria->secretariaid . '/' . $secretaria->personaid ?>'><img src='<?= IMG . 'trash.png' ?>' width='20' height='20' /></a></td>
                                <?php endif ?>
                                    <!--<td style="text-align: center;"><a href='#'><img src='<?= IMG . 'doc.png' ?>' width='20' height='20' /></a></td>-->
                                </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </fieldset>
</form>