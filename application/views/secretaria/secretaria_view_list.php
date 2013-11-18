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
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </fieldset>
</form>