<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="StyleSheet" href="../estilos/estiloformAnimaciones.css" type="text/css">
    <link rel="StyleSheet" href="../estilos/estiloEncabezado.css" type="text/css">
    <script src="../scripts/animacionesForm.js"></script>
    <title>Registrate</title>
</head>
<body>
<header>
  <div id="header">
  <a href="<?= $url_base?>"><img src="../imagenes/pagina/Logo.png" alt="" /></a>
  </div>
</header>
<div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Paso 1</li>
        <li>Paso 2</li>
        <li>Paso 3</li>
      </ul>
      <form class="form-wrapper">
        <fieldset class="section is-active">
          <h3>¡Bienvenido<br>Registrate!</h3>
          
          <input type="text" name="nombre" id="nombre" placeholder="Nombre">
          <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
          <div class="button">Siguiente</div>
        </fieldset>
        <fieldset class="section">
          <h3>Selecciona tu tipo</h3>
          <div class="row cf">
            <div class="four col">
              <input type="radio" name="r1" id="r1" checked>
              <label for="r1">
                <h4>Estudiante</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r2"><label for="r2">
                <h4>Empresa</h4>
              </label>
            </div>
          </div>
          <div class="button">Siguiente</div>
        </fieldset>
        <fieldset class="section">
          <h3>Escribe tu Contraseña</h3>
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up">
        </fieldset>
        <fieldset class="section">
          <h3>Cuenta creada!</h3>
          <p>Tu cuenta ha sida creado conm exito.</p>
          <div class="button">Reset Form</div>
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>