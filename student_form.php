<?php include("includes/a_config.php");


session_start();

$student = array(
	'nombre' => "",
	'apellido' => "",
	'carrera' => "",
	'isActive' => "",
);

//Editando
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$PAGE_TITLE = "Edicion de Estudiante";

	$students =  isset($_SESSION['studentList']) ? $_SESSION['studentList'] : array();
	$student = $students[$id];

}

//Agrega el estudiante
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	# code...
	$students =  isset($_SESSION['studentList']) ? $_SESSION['studentList'] : array();

	$student = array(
		'nombre' => $_POST['nombre'],
		'apellido' => $_POST['apellido'],
		'carrera' => $_POST['carrera'],
		'isActive' => isset($_POST['isActive']) ? $_POST['isActive'] : "no",
	);

	if(isset($_POST['id']) && !empty($_POST['id'])){
		$students[$_POST['id']] = $student;
	}else{
		array_push($students, $student);
	}

	$_SESSION['studentList'] = $students;

	header("Location:index.php");
}



?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
	<?php include("includes/design-top.php"); ?>

	<div class="container mb-5">
		<h2 class="text-center"><?= $PAGE_TITLE; ?></h2>
		<form action="student_form.php" method="post">
			<input type="hidden" name="id" value="<?=isset($_GET['id'])? $_GET['id']: "";?>">
			<div class="form-group">
				<label for="nombre">Nombre *</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
							</svg>
						</div>
					</div>
					<input id="nombre" name="nombre" placeholder="Escribir aquí..." type="text" required="required" class="form-control" value="<?= $student['nombre'];?>" />
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
					<input id="apellido" name="apellido" placeholder="Escribir aquí..." type="text" class="form-control" required="required" value="<?= $student['apellido'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="carrera">Carrera *</label>
				<div>
					<select id="carrera" name="carrera" class="custom-select" required="required">
						<option value="" <?=empty($student['carrera']) ? "selected" : "";?> disabled>Seleccione una carrera...</option>
						<option value="Redes" <?=$student['carrera'] == 'Redes' ? ' selected': '';?>>Redes</option>
						<option value="Software" <?=$student['carrera'] == 'Software' ? ' selected': '';?>>Software</option>
						<option value="Multimedia" <?=$student['carrera'] == 'Multimedia' ? ' selected': '';?>>Multimedia</option>
						<option value="Mecatronica" <?=$student['carrera'] == 'Mecatronica' ? ' selected': '';?>>Mecatronica</option>
						<option value="Seguridad informática" <?=$student['carrera'] == 'Seguridad informática' ? ' selected': '';?>>Seguridad informática</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input name="isActive" id="isActive_0" type="checkbox" class="custom-control-input" value="si" <?=$student['isActive'] == 'si' ? ' checked': '';?>>
						<label for="isActive_0" class="custom-control-label">Esta activo</label>
					</div>
				</div>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary"><?= isset($_GET['id']) ? "Guardar cambios" : "Agregar"; ?></button>

					<a class="btn btn-danger" href="index.php" role="button"><?= isset($_GET['id']) ? "Cancelar" : "Volver"; ?></a>

			</div>
		</form>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>