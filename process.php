<?php

require("classes/estudiante.Class.php");
$Estudiante + new Estudiante();

$resultado = $Estudiante->obtenerEstudiantes();

header("Content-Type: Application/json");
echo(json_encode($resultado));

?>