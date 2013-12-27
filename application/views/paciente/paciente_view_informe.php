<div id="informe" class="content_tab">
	<div class="area" style="display: table;">
		<div class="posicion1">
			<div style="float:left; width:250px; height:30px;">
				<a id="open-modal-informe"><img src="<?=IMG.'add.png'?>" /></a>
            </div>
        </div>
        <div class="posicion1">
        	<div style="float:left; width:1050px; min-height: 35px;">
        		<table id="gradient-style-informe" class="informegrid" style="width:1000px;">
        			<thead>
        				<tr>
        					<th style="width: 80%;">Nombre de archivo</th>
        					<th style="width: 10%;">Tipo</th>
        					<?php if ($this->session->userdata['tipousuario']=='secretaria' || $this->session->userdata['tipousuario']=='administrador'): ?>
        						<th style="width: 10%;">Descargar</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody class="tabla">
                    	<?php if(is_array(@$informe)):?>
	                    	<?php foreach (@$informe as $inf):?>
	                    		 <tr>
	                    		 	<td><?= $inf->nombre; ?></td>
	                                <td><?= $inf->tipo; ?></td>
	                                <?php if ($this->session->userdata['tipousuario']=='secretaria' || $this->session->userdata['tipousuario']=='administrador'): ?>
	                                	<td style="text-align: center;"><a id="edit"><input name="valor" type="hidden" value="" /><img src='<?= IMG . 'download.png' ?>' width='20' height='20' /></a></td>
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
        <div id="modal-informe" class="reveal-modal">
			<div style="height: auto; overflow: hidden; padding-top: 10px">
				<form method="post" action="" id="frmSubir">
					<div style="float:left; width:400px; height:50px;">
						<label>Subir archivo:</label>
						<br>
						<input name="f_subir" type="file" id="f_subir" style="width: 300px"/>
					</div>
					<br />
					<div class="posicion1" style="float: right;" >
						<div style="float:left;  height:60px;">
							<input type="submit" id="subirArchivo" value="Subir"  class="button red" />
						</div>
					</div>
				</form>
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
    </div>
</div>