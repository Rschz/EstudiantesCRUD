<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
	<?php include("includes/design-top.php"); ?>

	<div class="container">
		<div class="d-block mb-3">
		<a class="btn btn-primary" href="student_form.php" role="button">Agregar Nuevo</a>
		</div>
		<table class="table table-borderless table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Carrera</th>
					<th scope="col">Estado</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody id="contactos">
				<tr class="border-bottom">
					<td>1</td>
					<td>Mark</td>
					<td>8095557546</td>
					<td>Personal</td>
					<td class="text-center"><button id="editar" name="btnEditar" class="btn btn-warning col-4">Editar</button> <button id="eliminar" name="btnEliminar" class="btn btn-danger col-4 elim">Eliminar</button></td>
				</tr>
				<tr class="border-bottom">
					<td>2</td>
					<td>Mark</td>
					<td>8095557546</td>
					<td>Personal</td>
					<td class="text-center"><button id="editar" name="btnEditar" class="btn btn-warning col-4">Editar</button> <button id="eliminar" name="btnEliminar" class="btn btn-danger col-4 elim">Eliminar</button></td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>