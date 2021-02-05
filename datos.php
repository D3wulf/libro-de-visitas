<?php

    //Creación del archivo y actualización
    $miArchivo = "datos/libro_visitas.csv";
    $nuevo_archivo= fopen($miArchivo, "a")or die ("Error en la creación");

    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $localidad= $_POST['localidad'];

    $email=$_POST['email'];


    if(isset($_POST["submit"])){

        //Fecha día y hora

        $datos[] = date("m.d.y H:i;s");

        // Apellidos 
        if (!$apellidos){ 
            $datos[]= "En blanco";
            
        }else{
            $datos[]= $apellidos;
        }

        //Nombre
        if(empty($_POST["nombre"])){

            $errores[] = "El nombre es requerido";
            

        }else {
            $datos[]= $_POST['nombre'];

        }
        
        //Email del usuario

        if(empty($_POST["email"])){

            $errores[] = "No se ha indicado email o el formato no es correcto";
            
        }else{

            $datos[]=$_POST['email'];

        }
        
       //Localidad

        if (!$localidad){ 

            $datos[]= "En blanco";

        }else {
            $datos[]= $localidad;
        }

        // Errores recogidos en un array
        if(isset($errores)){

            foreach ($errores as $error){
                echo "<li> $error </li>";
            }
            return false;
        }

        

        //$head=["Nombre", "Apellido", "Email", "Localidad"];

        //fputcsv($nuevo_archivo,$head,";");
       
        fputcsv($nuevo_archivo,$datos,";");
            
        

    }
        

        


    



    

    header('Location: inicio.php');

    /*fclose($nuevo_archivo);

    if(file_exists($miArchivo)){

        echo " el archivo $miArchivo existe!";
    }else{

        echo "No existe ese archivo";
    }*/
    
   
    echo $mensaje;



?>