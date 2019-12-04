<?php
    
    error_reporting(E_ERROR | E_PARSE);

    include('config/variables.php');
    include('libs/funciones.php');

    $controlador = '';
    $accion = '';

    if (! empty ($variables_ruta[$controlador_id])){
	    $controlador = $variables_ruta[$controlador_id];
    
    }else{
	    $controlador = $controlador_predefinido;
    }

    if (! empty ($variables_ruta[$accion_id])){ 
        $accion = $variables_ruta[$accion_id];    
    }else{ 
        $accion = $accion_predefinida;
    }

    $controlador_archivo = 'Controlador/'.$controlador.$controlador_extension;
    
    if (file_exists ($controlador_archivo)){ 
        include ($controlador_archivo); 
    }
    else {
	    echo 'Controlador ' . $controlador . ' no existe.';
    }

    $accion_funcion = 'accion_' . $accion;
    if (is_callable ($accion_funcion)) {
	    $accion_funcion ();
    } else {
	    echo 'Controlador' . $controlador . '.' .  $accion . ' no existe.';
    }

    
?>