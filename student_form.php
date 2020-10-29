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
		<h2 class="text-center">Gestion de contactos</h2>
        <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="nombre">Nombre*</label>
                <input type="text" class="form-control" id="nombre" placeholder="Introducir nombre..." required>
                <div class="invalid-feedback">
                  Introducir un nombre valido
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="apellido">Apellido*</label>
                <input type="text" class="form-control" id="apellido" placeholder="Introducir apellido..." required>
                <div class="invalid-feedback">
                  Introducir un apellido valido.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="telefono">Telefono*</label>
                <input type="number" class="form-control" id="telefono" placeholder="8095798556" required>
                <div class="invalid-feedback">
                  Introducir un apellido valido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="tipo">Tipo*</label>
                <select class="custom-select" id="tipo" required>
                  <option selected disabled value="">Elegir...</option>
                  <option>Laboral</option>
                  <option>Personal</option>
                  <option>Academico</option>
                </select>
                <div class="invalid-feedback">
                  Introduce un apellido valido.
                </div>
              </div>
            </div>
            <div> <button class="btn btn-block btn-primary" type="submit">Guardar</button> <button id="cancelar" name="btnCancelar" class="btn btn-block btn-danger" type="button">Cancelar</button></div>
          </form>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>