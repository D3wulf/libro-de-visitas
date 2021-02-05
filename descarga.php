<?php


header("Content-disposition: attachment; miArchivo=libro_visitas.csv");
header("Content-type: MIME");
readfile("datos/libro_visitas.csv");


$miArchivo = 'datos/libro_visitas.csv';

if (file_exists($miArchivo)) {
    $borrado = unlink($miArchivo);
    
    if (!$borrado) {
         throw new Exception("No se ha podido borrar $miArchivo");
    }
}



?>
