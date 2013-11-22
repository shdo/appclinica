<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?= CSS . 'table.css' ?>">
	</head>
	<body>
		<div class="legend"style="width: 100%; height: 2em; background-color: #666666;">
			<h2 style="font-size: 16px; font-family: Verdana; color: white; padding-bottom: 15px; padding-left: 10px;">Usuario: Lista de Usuario</h2>
		</div>
		<br>
		<table id="gradient-style" style="width:100%;">
			<thead>
				<tr>
					<th style="width: 40%;">Nombre</th>
					<th style="width: 30%;">Usuario</th>
					<th style="width: 30%;">Tipo de Usuario</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $usuario): ?>
					<tr>
						<td><?= $usuario->nombcompleto; ?></td>
                        <td><?= $usuario->usuario; ?></td>
                        <td><?= $usuario->tipousuario; ?></td>
                    </tr>
                <?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>