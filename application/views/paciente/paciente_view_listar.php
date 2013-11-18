<div class="legend">
    <h2>Paciente: Lista de Paciente</h2>
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
            <div class="posicion1" style="margin-top: 0; clear: both">
                <div style="float:left; width:250px; height:30px;">
                    <?php if (@$this->session->flashdata('mensaje')) {
                        echo ('<span class=mensaje><img src="' . IMG . 'check.png' . '" width="16" height="16"/> ' . $this->session->flashdata('mensaje') . '</span>');
                    } ?>
                </div>
            </div>
            <br><br>
            <div class="posicion1">
                <div style="float:left; width:1050px; min-height: 35px;">
                    <table id="gradient-style" style="width:1000px;">
                        <thead>
                            <tr>
                                <th style="width: 14%;">Nombres</th>
                                <th style="width: 23%;">Apellidos</th>
                                <th style="width: 6%;">Edad</th>
                                <th style="width: 27%;">Domicilio</th>
                                <th style="width: 11%;">Teléfono</th>
                                <?php if ($this->session->userdata['tipousuario']=='secretaria' || $this->session->userdata['tipousuario']=='administrador'): ?>
                                    <th style="width: 6%;">Editar</th>
                                    <th style="width: 6%;">Borrar</th>
                                <?php endif ?>
                                <th style="width: 7%;">Reporte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pacientes as $paciente): ?>
                                <tr>
                                    <td><?= $paciente->nombre; ?></td>
                                    <td><?= $paciente->apepaterno . ' ' . $paciente->apematerno; ?></td>
                                    <td><?= $paciente->edad; ?></td>
                                    <td><?= $paciente->domicilio; ?></td>
                                    <td><?= $paciente->telefono; ?></td>
                                    <?php if ($this->session->userdata['tipousuario']=='secretaria' || $this->session->userdata['tipousuario']=='administrador'): ?>
                                        <td style="text-align: center;"><a href='<?= base_url() . 'home/actualizar_paciente/' . $paciente->pacienteid ?>'><img src='<?= IMG . 'edit.png' ?>' width='20' height='20' /></a></td>
                                        <td style="text-align: center;"><a href='<?= base_url() . 'home/eliminar_paciente/' . $paciente->pacienteid ?>'><img src='<?= IMG . 'trash.png' ?>' width='20' height='20' /></a></td>
                                    <?php endif ?>
                                    <td style="text-align: center;"><a href='#'><img src='<?= IMG . 'doc.png' ?>' width='20' height='20' /></a></td>
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

