<?php
include("conexion.php");

	$sentencia = $conexion -> prepare("SELECT * FROM `galeria_imagenes`");
	$sentencia->execute();
	$lista_galeria = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- <?php include("../../templates/header.php") ?> -->
<br>
<h4 class="btn btn-success">GALERIA</h4>
<div class="card">
	<div class="card-body">
		<div class="table-responsive-sm">
			<table class="table table-primary">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Descripción</th>
						<th scope="col">Nombre Archico PDF</th>
						<th scope="col">Nombre Archivo Imagen</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($lista_galeria as $registro) { ?>

					<tr class="">
						<td scope="row"><?php echo $registro['id']; ?> </td>
						<td><?php echo $registro['descripcion']; ?> </td>
						<td><?php echo $registro['nombre_achivo_pdf']; ?></td>
						<td scope="row"><?php echo $registro['nombre_achivo_imagen']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
							