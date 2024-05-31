<?php
// Obtener la cantidad de clicks del parámetro GET
$contador = isset($_GET['contador']) ? intval($_GET['contador']) : 0;

// Guardar la cantidad de clicks en un archivo de texto
$archivo = __DIR__ . '/clicks/contador_' . time() . '.txt';
file_put_contents($archivo, $contador);

echo "Contador guardado correctamente en el archivo $archivo";
?>