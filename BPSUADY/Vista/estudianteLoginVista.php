<?php

if(isset($_REQUEST["estado"])){
	switch ($_REQUEST["estado"]) {
		case 1:
			$cadena = "Debe proporcionar tu nombre de usuario.";
			break;
		case 2:
			$cadena = "Debe proporcionar su contrase&ntilde;a.";
			break;
		case 3:
			$cadena = "El nombre de usuario o la contrase&ntilde;a son incorrectos.";
			break;
		case 4:
			$cadena = "Debes iniciar sesi&oacute;n para utilizar el sistema.";
			break;
		default:
			$cadena = "";
	}
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo $aplicacion ?></title>
    <link rel="StyleSheet" href="../estilos/estiloformAnimaciones.css" type="text/css">
    <script src="../scripts/animacionesForm.js"></script>
    <!-- <link rel="StyleSheet" href="../estilos/estiloEncabezado.css" type="text/css"> -->
    
</head>
<script>
  	<?php echo "var estado = '" . $cadena . "';"; ?>

  let button = document.getElementById("button");

function alertHandler() {
   let alerts = document.getElementById("alert-container");
   
   if (alerts.childElementCount < 2) {
      // Create alert box
      let alertBox = document.createElement("div");
      alertBox.classList.add("alert-msg", "slide-in");

      // Add message to alert box
      let alertMsg = document.createTextNode(estado);
      alertBox.appendChild(alertMsg);

      // Add alert box to parent
      alerts.insertBefore(alertBox, alerts.childNodes[0]);

      // Remove last alert box
      alerts.childNodes[1].classList.add("slide-out");
      setTimeout(function() {
         alerts.removeChild(alerts.lastChild);
      }, 600);
   }
}

button.addEventListener("click", alertHandler);

</script>

<body>
<div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
      </ul>
      <div id="alert-container"></div>
      <form class="form-wrapper" action="<?php $url_base?>estudiante/validar" method="POST">
        <fieldset class="section is-active">
          <h3>Bienvenido<br>Registrate!</h3>
          
          <input type="text" name="matricula" id="nombre" placeholder="Matricula">
          <input type="text" name="contrasena" id="contrasena" placeholder="Contraseña">
          <input type="submit" value="Ingresar" class="button" id="button">
          <!-- <div class="button">Siguiente</div> -->
        <!-- </fieldset>
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
        </fieldset> -->
      </form>
    </div>
  </div>
</body>

</html>