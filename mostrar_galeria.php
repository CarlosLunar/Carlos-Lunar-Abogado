<?php

include "conexion.php";

$sentencia = $conexion -> prepare("SELECT * FROM `galeria_imagenes`");
$sentencia->execute();
$lista_galeria = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

?>
<br>
<h1 class="btn btn-success">GALERIA DE IMAGENES</h1>
<div class="card">
	<div class="card-body">
		<div class="table-responsive-sm">
			<table class="table table-primary" border="2">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">NOMBRE DEL PDF</th>
						<th scope="col">NOMBRE DE LA IMAGEN</th>
						<th scope="col">DESCRIPCION</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($lista_galeria as $registro) { ?>
					<tr class="">
						<td scope="row"><?php echo $registro['id']; ?> </td>
						<td><?php echo $registro['nombre_archivo_pdf']; ?></td>
						<td><?php echo $registro['nombre_archivo_imagen']; ?></td>
						<td><?php echo $registro['descripcion']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
							