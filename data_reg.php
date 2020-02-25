<?php

		// 1. Me conecto a la BD
		include("conexion.php");

		// 2. Genero la query (SELECT)
		$ver = "SELECT * FROM registro";

		// 3. Ejecutamos la query
		$ej = mysqli_query($conexion, $ver);

		// 4. Pregunto si NO funcionó
		if ($ej === false) {
			echo "error, ver SQL";
		} else {
			// 5. Muestro datos

		?>

			<table id="tabla" class="tabla">
				<thead>
					<tr class="head">
						
						<th>ID</th>
						<th>ESPECIALIDAD</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>CIUDAD</th>
						<th>AMPLIAR</th>
						
						


					</tr>
				</thead>


				<?php while ($reg = mysqli_fetch_array($ej)) {
				?>



					<tr id="itd">

						<td> <form action="" method="post">
						<input type="hidden" name="id" value="<?php echo $reg['id'] ?>">
						<?php echo $reg['id'] ?></td>
                        <td> <?php echo $reg['especialidad'] ?></td>
						<td><?php echo $reg['nombre'] ?></td>
						<td><?php echo $reg['apellido'] ?></td>
						<td><?php echo $reg['ciudad'] ?></td>					

						<td><input type="submit" name="" id="" value="Ver Datos"></td></form>
						

					</tr>

				




			<?php

				} // Cierra while
			} // Cierra else de todo ok
			?>
			</table>
