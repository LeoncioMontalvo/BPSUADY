<?php
function limpiar($valor){

	return preg_replace('/[^a-zA-Z0-9-_.@ ]/', '', $valor);
}

function getVariables($url){

	$url = preg_replace('/\/$/', '', $url);

	$variables = explode('/', $url);	
	$cantVariables = count($variables);
	
	for($c = 0; $c < $cantVariables; $c++){
		$variables[$c] = limpiar($variables[$c]);
	}
	
	return $variables;
}

$variables_ruta = getVariables($_GET['ruta']);
$controlador_id = 0;
$accion_id = 1;

?>