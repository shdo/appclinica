<!DOCTYPE html>
<html style="margin: 0px;">
	<head></head>
	<body style="background: #E3E2A8;">
		<div style="padding: 50px;">
			<div style="width: 100%;">
				<div style="width: 50%;float: left;">
					<h2>HISTORIA CLINICA</h2>
				</div>
				<div style="width: 50%; border: 1px solid; float: left; padding-bottom: 5px; padding-top: 5px; padding-left: 10px; padding-right: 10px;">
					<label style="display: inline-block; width: 26%">APELLIDOS:</label>
					<label style="display: inline-block;width: 74%; border-bottom: 1px solid;"><?=@$paciente->apepaterno.' '.@$paciente->apematerno?></label>
					<br><br>
					<label style="display: inline-block; width: 23%">NOMBRES:</label>
					<label style="display: inline-block;width: 77%; border-bottom: 1px solid;"><?=$paciente->nombre?></label>
				</div>
			</div>
			<div style="clear: both"></div>
			<div style="width: 100%;">
				<div>
					<h4>I. ANAMNESIS:</h4>
					<h4>1. FILIACION:</h4>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:33%; height:25px;"></div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:33%; height:25px;"></div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:34%; height:25px;">
							<?php
								switch ($paciente->estadcivil) {
									case 'S':
										$estado_civil='Soltero';
										break;
									case 'C':
										$estado_civil='Casada';
										break;
									case 'D':
										$estado_civil='Divorciada';
										break;
									case 'V':
										$estado_civil='Viudo';
										break;
								}
							?>
							<label style="display: inline-block; width: 35%">Estado Civil:</label>
							<label style="display: inline-block;width: 65%; border-bottom: 1px solid;"><?=$estado_civil?></label>
						</div>
					</div>
					<br>
					<br>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:33%; height:25px;">
							<label style="display: inline-block; width: 16%">Edad:</label>
							<label style="display: inline-block;width: 80%; border-bottom: 1px solid;"><?=$paciente->edad?></label>
						</div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:33%; height:25px;">
							<label style="display: inline-block; width: 31%">Ocupación:</label>
							<label style="display: inline-block;width: 64%; border-bottom: 1px solid;"><?=$paciente->ocupacion?></label>
						</div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:34%; height:25px;">
							<label style="display: inline-block; width: 40%">Lugar de Nac.:</label>
							<label style="display: inline-block;width: 60%; border-bottom: 1px solid;"><?=$paciente->lugarnac?></label>
						</div>
					</div>
					<br>
					<br>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:41%; height:25px;">
							<label style="display: inline-block; width: 24%">Domicilio:</label>
							<label style="display: inline-block;width: 71%; border-bottom: 1px solid;"><?=$paciente->domicilio?></label>
						</div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:25%; height:25px;">
							<label style="display: inline-block; width: 35%">Teléfono:</label>
							<label style="display: inline-block;width: 60%; border-bottom: 1px solid;"><?=$paciente->telefono?></label>
						</div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:34%; height:25px;">
							<label style="display: inline-block; width: 42%">Lugar de Proc.:</label>
							<label style="display: inline-block;width: 58%; border-bottom: 1px solid;"><?=$paciente->lugarproc?></label>
						</div>
					</div>
				</div>
				<div style="clear: both"></div>
				<div style="width: 100%">
					<h4>2. ANTECEDENTES</h4>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:50%; height:25px;">
							<label style="display: inline-block; width: 17%">Médicos:</label>
							<label style="display: inline-block;width: 78%;  height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:50%; height:25px;">
							<label style="display: inline-block; width: 23%">Quirúrgicos:</label>
							<label style="display: inline-block;width: 77%;  height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<br>
					<br>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:25%; height:25px;">
							<label>Ginecologos:</label>
						</div>
					</div>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:23%; height:25px;">
							<label style="display: inline-block; width: 21%">FUR:</label>
							<label style="display: inline-block;width: 74%;  height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:27%; height:25px;">
							<label style="display: inline-block; width: 52%">MENARQUIA:</label>
							<label style="display: inline-block;width: 43%; height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:25%; height:25px;">
							<label style="display: inline-block; width: 16%">R.S:</label>
							<label style="display: inline-block;width: 84%; height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<br/>
					<br/>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:25%; height:25px;"></div>
					</div>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:25%; height:25px;">
							<label style="display: inline-block; width: 16%">R.C:</label>
							<label style="display: inline-block;width: 79%; height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:18%; height:25px;">
							<div class="posicion1" style="float: left;">
								<div style="float:left; width:50px; height:25px;">
									<label style="display: inline-block; width: 16%">G</label>
									<label style="display: inline-block;width: 77%; height: 20px; border-bottom: 1px solid;"><center></center></label>
								</div>
								<div style="float:left; width:50px; height:25px;margin-left: 51px;">
									<label style="display: inline-block; width: 16%">P</label>
									<label style="display: inline-block;width: 77%; height: 20px;border-bottom: 1px solid;"><center></center></label>
								</div>
							</div>
						</div>
					</div>
					<div class="posicion1" style="float: left">
						<div style="float:left; width:25%; height:25px;">
							<label style="display: inline-block; width: 18%">M.A:</label>
							<label style="display: inline-block;width: 82%; height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<br>
					<br>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:50%; height:25px;">
							<label style="display: inline-block; width: 29%">Hospitalización:</label>
							<label style="display: inline-block;width: 66%; height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
					<div class="posicion1" style="float: left;" >
						<div style="float:left; width:50%; height:25px;">
							<label style="display: inline-block; width: 32%">Hábitos Nocivos:</label>
							<label style="display: inline-block;width: 68%; height: 20px; border-bottom: 1px solid;"></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>