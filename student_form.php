<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
	<?php include("includes/design-top.php"); ?>

	<div class="container mb-5">
		<div class="d-block mb-3">
			<a class="btn btn-primary" href="index.php" role="button">Volver</a>
		</div>
		<h2 class="text-center"><?= $PAGE_TITLE;?></h2>
		<form>
			<div class="form-group">
				<label for="Nombre">Nombre *</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fa fa-user"></i>
						</div>
					</div>
					<input id="Nombre" name="Nombre" placeholder="Escribir aquí..." type="text" required="required" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="apellido">Apellido *</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fa fa-user-o"></i>
						</div>
					</div>
					<input id="apellido" name="apellido" placeholder="Escribir aquí..." type="text" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="carrera">Carrera *</label>
				<div>
					<select id="carrera" name="carrera" class="custom-select" required="required">
						<option value="0" readonly>Seleccione una carrera...</option>
						<option value="1">Redes</option>
						<option value="2">Software</option>
						<option value="3">Multimedia</option>
						<option value="4">Mecatronica</option>
						<option value="5">Seguridad informática</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input name="isActive" id="isActive_0" type="checkbox" class="custom-control-input" value="si">
						<label for="isActive_0" class="custom-control-label">Esta activo</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-primary">Agregar</button>
			</div>
		</form>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>