<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $aplicacion ?></title>
</head>

<body>
    <div class="inicioSesion">
        
    <!-- <div id="estado">Mensaje</div>
 -->
        <form action="post" action="<?php $url_base ?>usuario/validar">
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usuario" size="20"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" name="contrasena" size="20"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" name="boton" value="Iniciar"></td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>