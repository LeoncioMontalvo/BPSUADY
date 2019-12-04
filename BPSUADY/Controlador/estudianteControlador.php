<?php

    function accion_registrar(){
        


        
    }

    function accion_iniciar(){

    }

    function accion_ingresar(){
        
        global $aplicacion, $url_base, $variables_ruta, $controlador, $accion;
        
        include('Vista/estudianteLoginVista.php');

        
    }

    function accion_validar(){
        global $aplicacion, $url_base, $variables_ruta, $controlador, $accion, $servidor, $usuario, $contrasena, $basedatos;

        if ($_REQUEST["matricula"] == "") {
            header("location: ".$url_base."estudiante/ingresar?estado=1");
            exit();
            }
       if (empty($_REQUEST["contrasena"])) {
           header("location: ".$url_base."estudiante/ingresar?estado=2");
           exit();
       }
       
      include('../Modelo/estudianteModelo.php');
       
       if (mysqli_num_rows($resultado) > 0) {
           //Si hay registro reenviar a la página menu.php
           header("location: ".$url_base."estudiante/");
           
           session_start();
           $_SESSION["valido"] = true;	
           
       } else {
           //Sino redirigir a la página index.html 
           header("location: index.php?estado=3");
       }
    }






?>