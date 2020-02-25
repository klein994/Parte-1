<?php

    $id  = $_POST['id'];


		// 1. Me conecto a la BD
        include("conexion.php");
       
		// 2. Genero la query (SELECT)
		$ver = "SELECT * FROM `registro` WHERE id = $id ";

		// 3. Ejecutamos la query
		$ej = mysqli_query($conexion, $ver);

		// 4. Pregunto si NO funcionó
		if ($ej === false) {
			echo "error, ver SQL";
		} else {
            

        ?>
        <?php while ($reg = mysqli_fetch_array($ej)) {
				?>



					<tr id="idtb">

                    <td><strong>Especialidad: </strong><?php echo $reg['especialidad'] ?><br></td>
                    <td><strong>Nombre: </strong><?php echo $reg['nombre'] ?><br></td>
	                <td><strong>Apellido</strong>: <?php echo $reg['apellido'] ?><br></td>
	                <td><strong>Ciudad: </strong><?php echo $reg['ciudad'] ?><br></td>
	                <td><strong>Latitud: </strong><?php echo $reg['latitude'] ?><br></td>
	                <td><strong>Longitud: </strong><?php echo $reg['longitude'] ?><br></td>
	                <td><strong>Telefono: </strong><?php echo $reg['telefono'] ?><br></td>
	                <td><strong>Mail: </strong><?php echo $reg['mail'] ?></td>
                        
					</tr>






<?php 
    } // Cierra while
} // Cierra else de todo ok
?>

