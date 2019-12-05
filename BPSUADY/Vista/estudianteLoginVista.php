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
    <title>Inicar Sesion</title>
    <link rel="StyleSheet" href="../estilos/estiloformAnimaciones.css" type="text/css">
    <link rel="StyleSheet" href="../estilos/estiloEncabezado.css" type="text/css">
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
<header>
  <div id="header">
  <a href="<?php $url_base?>"><img src="../imagenes/pagina/Logo.png" alt="" /></a>
  </div>
</header>
<div class="container" style="top:25%">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Bienvenido</li>
      </ul>
      <div id="alert-container"></div>
      <form class="form-wrapper" action="<?php $url_base?>estudiante/validar" method="POST">
        <fieldset class="section is-active">
          <h3>Inicia Sesión</h3>
          <input type="text" name="matricula" id="nombre" placeholder="Matricula">
          <input type="text" name="contrasena" id="contrasena" placeholder="Contraseña">
          <input type="submit" value="Ingresar" class="button" id="button">
      </form>
    </div>
  </div>
</body>

</html>