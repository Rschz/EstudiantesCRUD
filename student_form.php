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
			<a class="btn btn-link" href="index.php" role="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
				</svg> Volver</a>
		</div>
		<h2 class="text-center"><?= $PAGE_TITLE; ?></h2>
		<form>
			<div class="form-group">
				<label for="Nombre">Nombre *</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
							</svg>
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
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
							</svg>
						</div>
					</div>
					<input id="apellido" name="apellido" placeholder="Escribir aquí..." type="text" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="carrera">Carrera *</label>
				<div>
					<select id="carrera" name="carrera" class="custom-select" required="required">
						<option value="" selected disabled>Seleccione una carrera...</option>
						<option value="0">Redes</option>
						<option value="1">Software</option>
						<option value="2">Multimedia</option>
						<option value="3">Mecatronica</option>
						<option value="4">Seguridad informática</option>
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