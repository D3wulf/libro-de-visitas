<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
    .formulario {
        border: 3px solid black;
        border-radius: 7px;
        background-color: #eeeeee;
        width: 600px;
        margin: 0 auto;
        text-align: center;
        padding: 20px;
        margin-top: 100px;
    }
    
    
    </style>
</head>
<body>
    
    <div class="formulario" >
    <h1>Introduzca sus datos</h1>
    <form action="datos.php" method="post">
    <h5>Nombre:</h5>
    <input type="text" name="nombre" >
    <h5>Apellidos:</h5>
    <input type="text" name="apellidos" >
    <h5>Localidad:</h5>
    <input type="text" name="localidad" >
    <h5>Email:</h5>
    <input type="email" name="email" ><br><br>

    <input type="submit" value="Enviar" name="submit">
    <input type="reset" value="Borrar">
    
    </form>
    </div>



</body>
</html>