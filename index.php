<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paso 1</title>
  <link rel="stylesheet" href="style/style.css">
  

</head>
<body>

<div class="reg_med">
<div class="form_reg">
  <h2>Registro de Médico</h2>
<form method="post" class="register-form" action="registro.php">
          <div class="form">
              <label for="especialidad" class="label">Especialidad </label>	
              <select id="" name="especialidad" class="input" data-selectbox="true" ><option value="">Elegir</option><option value="Alergista">Alergista</option><option value="Analista clínico">Analista clínico</option><option value="Anestesista">Anestesista</option><option value="Bioquímico">Bioquímico</option><option value="Cardiólogo">Cardiólogo</option><option value="Cardiólogo infantil">Cardiólogo infantil</option><option value="Cirujano cardiovascular">Cirujano cardiovascular</option><option value="Cirujano digestivo">Cirujano digestivo</option><option value="Cirujano general">Cirujano general</option><option value="Cirujano oral y maxilofacial">Cirujano oral y maxilofacial</option><option value="Cirujano pediátrico">Cirujano pediátrico</option><option value="Cirujano plástico">Cirujano plástico</option><option value="Cirujano torácico">Cirujano torácico</option><option value="Cirujano vascular">Cirujano vascular</option><option value="Dermatólogo">Dermatólogo</option><option value="Endocrinólogo">Endocrinólogo</option><option value="Enfermero">Enfermero</option><option value="Especialista en Medicina Nuclear">Especialista en Medicina Nuclear</option><option value="Especialista en Terapia Intensiva">Especialista en Terapia Intensiva</option><option value="Especialista en Toxicología">Especialista en Toxicología</option><option value="Farmacólogo">Farmacólogo</option><option value="Flebólogo">Flebólogo</option><option value="Fonoaudiólogo">Fonoaudiólogo</option><option value="Gastroenterólogo">Gastroenterólogo</option><option value="Genetista">Genetista</option><option value="Geriatra">Geriatra</option><option value="Ginecólogo">Ginecólogo</option><option value="Hematólogo">Hematólogo</option><option value="Hepatólogo">Hepatólogo</option><option value="Homeópata">Homeópata</option><option value="Infectólogo">Infectólogo</option><option value="Kinesiólogo">Kinesiólogo</option><option value="Mastólogo">Mastólogo</option><option value="Médico clínico">Médico clínico</option><option value="Médico deportólogo">Médico deportólogo</option><option value="Médico estético">Médico estético</option><option value="Médico forense">Médico forense</option><option value="Médico general y familiar">Médico general y familiar</option><option value="Médico laboral">Médico laboral</option><option value="Médico naturista">Médico naturista</option><option value="Médico rehabilitador">Médico rehabilitador</option><option value="Nefrólogo">Nefrólogo</option><option value="Neumonólogo">Neumonólogo</option><option value="Neurocirujano">Neurocirujano</option><option value="Neurofisiólogo">Neurofisiólogo</option><option value="Neurólogo">Neurólogo</option><option value="Nutricionista">Nutricionista</option><option value="Obstetra">Obstetra</option><option value="Odontólogo">Odontólogo</option><option value="Oftalmólogo">Oftalmólogo</option><option value="Oncólogo">Oncólogo</option><option value="Óptico">Óptico</option><option value="Optometría">Optometría</option><option value="Osteópata">Osteópata</option><option value="Otorrino">Otorrino</option><option value="Patólogo">Patólogo</option><option value="Pediatra">Pediatra</option><option value="Podólogo">Podólogo</option><option               value="Protesista - Ortesista">Protesista - Ortesista</option><option value="Psicoanalista">Psicoanalista</option><option value="Psicólogo">Psicólogo</option><option value="Psicomotricista">Psicomotricista</option><option value="Psicopedagogo">Psicopedagogo</option><option value="Psiquiatra">Psiquiatra</option><option value="Quiropráctico">Quiropráctico</option><option value="Radiólogo">Radiólogo</option><option value="Reumatólogo">Reumatólogo</option><option value="Sexólogo">Sexólogo</option><option value="Terapeuta complementario">Terapeuta complementario</option><option value="Terapista ocupacional">Terapista ocupacional</option><option value="Traumatólogo">Traumatólogo</option><option value="Urólogo">Urólogo</option><option value="Psicoanalista">Psicoanalista</option><option value="Psicólogo">Psicólogo</option><option value="Psicomotricista">Psicomotricista</option><option value="Psicopedagogo">Psicopedagogo</option><option value="Psiquiatra">Psiquiatra</option><option value="Quiropráctico">Quiropráctico</option><option value="Radiólogo">Radiólogo</option><option value="Reumatólogo">Reumatólogo</option><option value="Sexólogo">Sexólogo</option><option value="Terapeuta">Terapeuta complementario</option><option value="Terapista ocupacional">Terapista ocupacional</option><option value="Traumatólogo">Traumatólogo</option><option value="Urólogo">Urólogo</option></select>
          </div>
          <div class="form">
              <label for="nombre" class="label">Nombre</label>
               <input type="text" id="" name="nombre" required="required" class="input" placeholder="Nombre" />
          </div>
          <div class="form">
              <label for="apellido" class="label">Apellidos</label>
              <input type="text" id="" name="apellido" required="required" class="input" placeholder="Apellidos" />
          </div>
          <div class="form">
         

               <label for="ciudad" class="control-label">Ciudad </label>
               <input type="text"  onblur="findMe(), findMe2()" name="ciudad" required="required" class="input" placeholder="Ciudad"  id="autocomplete " autocomplete="on" >
                <input id="latitude" type="hidden" value="1" name="latitude" >
                <input id="longitude" type="hidden" value="2"  name="longitude">
          
              </div>
          <div class="form">
              <label for="telefono" class="label">Número de celular</label>            
            <input type="text" id="" name="telefono" required="required" class="input" placeholder="Telefono">
          </div>
          <div class="form">
              <label for="mail" class="label">Correo electrónico</label>
						<input type="email"  name="mail" required="required" class="input" placeholder="Email">
          </div>
          

          <div class="form"> <br>       
            <button	type="submit"	class="btn">Crear mi perfil</button>
          </div>
</form>
</div>
<div class="data_reg">



<h2>Buscar por</h2>
<div class="buscar">
    <select class="op" type="text" id="op">
        <option value="1">Especialidad</option>
        <option value="2">Nombre</option>
        <option value="3">Apellido</option>
        <option value="4">Ciudad</option>
       
    </select>
    <input type="search" name="termino" placeholder="Buscar" name="buscar" id="buscar" onkeyup="buscar()">
</div>


<?php	include("data_reg.php");?>        
<div class="cont-ficha">
<div class="photo">Foto</div>

<div class="ficha">

  <?php	include("ficha.php");?>
        
</div>


</div>
</div>

</div>


  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDViZA-qecJc-OCicaZeyDGGCe7SQKhkf0&libraries=places">  -->
   </script>
  
  

   
  <script src="js/main.js"></script>
  <script src="js/ficha.js"></script>
  <script src="js/buscar.js"></script>
  <script src="js/localizacion.js"></script>
</body> 
</html>