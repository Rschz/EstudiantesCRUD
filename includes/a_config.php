<?php
	switch (basename($_SERVER["SCRIPT_NAME"])) {
		case "student_form.php":
			$CURRENT_PAGE = "student_form"; 
			$PAGE_TITLE = "Agregar estudiante";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Estudiantes";
	}
?>