<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
	<section class="hero is-success">
		<div class="hero-body">
			<p class="title">
				Datos Alumno
			</p>
			<p class="subtitle">
				Registro
			</p>
		</div>
	</section>
	<h1 class="title is-1">Practica Registro de Datos</h1>
	<section class="section is-medium columns">
		<div class="column"></div>
		<div class="column is-two-fifths">
			<form action="tarea_2.php" method="post">
				<div>
					<label>Nombre(s):</label>
					<input class="input is-primary" type="text" name="nombres" required>
				</div>
				<div>
					<label>Apellido paterno:</label>
					<input class="input is-primary" type="text" name="apellidoP" required>
				</div>
				<div>
					<label>Apellido materno:</label>
					<input class="input is-primary" type="text" name="apellidoM" required>
				</div>
				<div>
					<label>Cargo:</label>
					<input class="input is-primary" type="text" name="cargo" required>
				</div>

				<div>
					<label>RFC:</label>
					<input class="input is-primary" type="text" name="rfc" required>
				</div>

				<div>
					<label>CURP:</label>
					<input class="input is-primary" type="text" name="curp" required>
				</div>
				<div>
					<label>Domicilio:</label>
					<input class="input is-primary" type="text" name="domicilio" required>
				</div>
				<div>
					<label>Teléfono</label>
					<input class="input is-primary" type="tel" name="telefono" required>
				</div>
				<div>
					<label>Correo Electronico:</label>
					<input class="input is-primary" type="email" name="correo" required>
				</div>
				<div>
					<label>Genero</label>
					<input class="input is-primary" type="text" name="genero" required>
				</div>
				<div>
					<label>Fecha de Nacimiento</label>
					<input class="input is-primary" type="date" name="fechaNacimiento" required>
				</div>
				<div>
					<label>Estado civil</label>
					<input class="input is-primary" type="text" name="estadoCivil" required>
				</div>
				<div>
					<label>Escolaridad</label>
					<input class="input is-primary" type="text" name="escolaridad" required>
				</div>
				<div>
					<label>Referencia Familiar</label>
					<input class="input is-primary" type="text" name="referenciaFa" required>
				</div>
				<div>
					<label>Observaciones</label>
					<input class="input is-primary" type="text" name="observaciones" required>
				</div>
				<div>

					<label>Edad:</label>
					<input class="input is-primary" type="number" name="edad" min="0" max="120" required>
				</div>
				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		</div>
		<div class="column"></div>
	</section>
</body>
</html>