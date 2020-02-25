<?php

// 0. Consigo los datos
    $especialidad = $_POST['especialidad'];
	$nombre = $_POST['nombre'];
	$apellido  = $_POST['apellido'];	
    $ciudad  = $_POST['ciudad'];	    
    $latitude  = $_POST['latitude'];	    
    $longitude  = $_POST['longitude'];	    
	$telefono  = $_POST['telefono'];	
	$mail  = $_POST['mail'];   
	  
	
	
	// 1. Conectarme a la BD
	include("conexion.php");
	
	// 2. Crear la query
	$insertar = "INSERT INTO registro
				 VALUES(
					NULL,
                    '$especialidad',
					'$nombre',
					'$apellido',					
					'$ciudad',
					'$latitude',
					'$longitude',
					'$telefono',
					'$mail'

				 )";
	
	// 3. Ejecutarla
	$ej = mysqli_query($conexion, $insertar);
	
	// 4. Preguntar si funcionó
	if($ej === true){
        
        header("location:index.php");
        echo '<script>alert("¡Registrado con exito!");</script>';		
	} else {
		echo "Error, ver SQL";
	}

        ?>