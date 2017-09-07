<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<form action="recibe.php" method="post" name="">
		<input type="text" name="nombre" placeholder="Nombre:" autocomplete="none">
		<br>
		<label for="hombre">Hombre - </label>
		<input type="radio" name="sexo" id="hombre" value="hombre">
		<br>
		<label for="mujer">Mujer - </label>
		<input type="radio" name="sexo" id="mujer" value="mujer">
		<br>
		<select name="year" id="year">
			<?php 
				for ($i=1900; $i < 2018 ; $i++) { 
					echo '<option value="'.$i.'">'. $i . '</option>';
				}
			 ?>
		</select>
		<br>
		<label for="terminos">Aceptas los terminos?</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<br>
		<input type="submit" name="" value="Enviar Datos">
	</form>

</body>
</html>