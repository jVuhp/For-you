<?php
/*
===========================================================================

	Powered by: DevByBit
	Site: devbybit.com
	Date: 2/18/2024 22:31 PM
	Author: Vuhp
	Documentation: docs.devbybit.com

===========================================================================
*/

session_start();
require_once('config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title><?php echo $page_title; ?></title>
	<script>
	var site_domain = '<?php echo URI; ?>';
	</script>
    <link href="https://devbybit.com/demos/tablerio/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="https://devbybit.com/demos/tablerio/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="https://devbybit.com/demos/tablerio/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="https://devbybit.com/demos/tablerio/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="https://devbybit.com/demos/tablerio/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <div class="page">
      <div class="page page-center">
        <div class="container-tight py-4">
          <div class="empty" id="verdadQueSis">
            <div class="empty-img"><img src="./img/<?php echo $start_gif; ?>" height="128" alt=""></div>
            <p class="empty-title"><?php echo $response_start; ?></p> 
            <div class="empty-action">
              <a href="#" class="btn btn-success" id="button_yes" onclick="verdadQueSi(); event.preventDefault();">
                <?php echo $button_yes; ?>
              </a>
              <a href="#" class="btn btn-danger" id="button_no" onclick="cambiarTexto(); event.preventDefault();">
                <?php echo $button_no; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="page-wrapper">
      </div>
    </div>
    <script src="https://devbybit.com/demos/tablerio/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
    <script src="https://devbybit.com/demos/tablerio/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
    <script src="https://devbybit.com/demos/tablerio/dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
    <script src="https://devbybit.com/demos/tablerio/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
    <script src="https://devbybit.com/demos/tablerio/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="https://devbybit.com/demos/tablerio/dist/js/demo.min.js?1684106062" defer></script>
<script>
var contadorClicks = 0;
function cambiarTexto() {
    // Array de textos
    var textos = [<?php echo $response_clicks; ?>];

    // Obtener el elemento <h1> por su id
    var elementoTexto = document.getElementById("button_no");

    // Obtener un número aleatorio entre 0 y la longitud del array de textos
    var indice = Math.floor(Math.random() * textos.length);

    var elementoBotonSi = document.getElementById("button_yes");

    // Obtener el tamaño actual del botón
    var alturaActual = elementoBotonSi.clientHeight;
    var anchuraActual = elementoBotonSi.clientWidth;

    // Aumentar el tamaño del botón en 100px en altura y anchura
    var nuevaAltura = alturaActual + 100;
    var nuevaAnchura = anchuraActual + 100;

    // Establecer el nuevo tamaño del botón
    elementoBotonSi.style.height = nuevaAltura + "px";
    elementoBotonSi.style.width = nuevaAnchura + "px";
    // Cambiar el texto del elemento por uno aleatorio del array
    elementoTexto.textContent = textos[indice];
    contadorClicks++;
	
}

function guardarContador(contador) {
    // Enviar la cantidad de clicks al servidor usando AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Counter saved");
        }
    };
    xhttp.open("GET", "save_counter.php?contador=" + contador, true);
    xhttp.send();
}

function verdadQueSi() {
	
    var elementoVerdadQueSis = document.getElementById("verdadQueSis");

    // Actualizar el contenido HTML del elemento
    elementoVerdadQueSis.innerHTML = '<div class="empty-img"><img src="./img/<?php echo $yes_gif; ?>" height="128" alt=""></div>' +
        '<p class="empty-title"><?php echo $response_yes; ?> <3</p>' +
        '<div class="empty-action">' +
        '</div>';
	
    guardarContador(contadorClicks);
}
</script>
  </body>
</html>

