
<html>
    <head>
        <title><?php echo $aplicacion?></title>
        <link rel="StyleSheet" href="estilos/estiloEncabezado.css" type="text/css">
        <link rel="StyleSheet" href="estilos/estiloBody.css" type="text/css">
        <link rel="stylesheet" href="estilos/estilosPie.css" type="text/css">
    </head>

    <body style="margin: 0; display: block;">
        <?php include('C:/xampp/htdocs/BPSUADY/BPSUADY/plantillas/encabezado.php');?>
        <div class="Contenido">
            <div class="estudiantes">
                <br>
                <h2>¿Estudiante?</h2>
                <p> Si no tienes cuenta, registrate para comenzar a conocer las ofertas que las empresas tienen para ti.</p>
                <form action="<?php $url_base?>estudiante/registrar">
                <input id="btnRegistro" type="submit" value="Registrate">
                <form>
                
                
            </div>
            <div class="empresas">
                <h2>¿Empresa?</h2>
                <p> Ingresa como empresa y comienza a publicar tus ofertas. Contactanos si deseas registrar a tu empresa.</p>
                <form action="<?php $url_base?>empresa/registrar">
                
                <form>
            </div>
        </div>
        

        <?php include('C:/xampp/htdocs/BPSUADY/BPSUADY/plantillas/piePagina.php');?>
    </body>
    
</html>

