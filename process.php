<?php
require("classes/estudiante.class.php");
$Estudiante = new Estudiante();

$resultado = [];

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $tipo_peticion = ( (issue($_GET["t"])) ? ($_GET["t"]) : null );

    if($tipo_peticion=="selectAll"){
        $resultado = $Estudiante->obtenerEstudiante();
    }else{
        $resultado = [];
    }
    
}elseif($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["fnac"]) and isset($_POST["idg"])){
        $resultado = $Estudiante->nuevoEstudiante($_POST["fnac"],$_POST["idg"]);
    }else{
        header('HTTO/1.1 400 Bad Request');
        $resultado = array("mensaje"=>"Parametros no enviados");
    }
}

header("Content-Type:Application/json");
echo(json_encode($resultado));

?>