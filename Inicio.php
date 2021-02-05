<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .contenedor {

        padding: 20px;
        background-color: #eeeeee;
        margin: 0 auto;
        width: 800px;
        height: 400px;
        margin-top: 200px;
    }
    .menu {
        width: 350px;
        display: block;
        height: 200px;
        float: left;
        text-align: center;
        margin-top:100px;
        border-radius: 7px;
        padding:20px;
    }
    .menu:hover{
        border: 3px solid black;

    }
    .menu h1{

        padding: 40px;
    }
    
    
    
    </style>
</head>
<?php

$miArchivo = 'libro_visitas.csv';
?>
<body>
    <div class="contenedor">
    
    
    <div class="menu">
    <a href="formulario.php"><h1>Añadir al Libro de Visitas</h1></a>
    </div>


    <div class="menu">
    <a href="descarga.php" download="<?php echo $miArchivo; ?>" > <h1>Descargar Libro de Visitas</h1></a>
    </div>
    
    
    </div>
</body>
</html>