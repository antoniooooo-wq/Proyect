<?php
include("../functions/setup.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>Registro-Podologia Marticorena</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body id="fondo-body">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registro</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<form action="la_wea_de_registrar.php" class="signin-form" method="post">
							<div class="form-group">
								<input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)" placeholder="Ingrese RUT" minlength="9" maxlength="10">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="nombre" placeholder="Nombre " required>
								<span class="focus-input100"></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="apellido" placeholder="Apellido " required>
								<span class="focus-input100"></span>
							</div>
							<div class="form-group">
								<input type="date" class="form-control" id="fecha_nac" name="fecha_nac" aria-label="Fecha Nacimiento" placeholder="Fecha Nacimiento">
								<span class="focus-input100"></span>
							</div>
							<div class="form-group" validate-input="Correo Inválido falta @">
								<input class="form-control" type="text" name="correo" placeholder="Correo Electrónico" required />
								<span class="focus-input100"></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="direccion" placeholder="Direccion" required>
								<span class="focus-input100"></span>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="pass" required minlength="5" maxlength="15">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>

							<div class="form-group" data-validate="Elija una" aligh="text-center">
								<input type="radio" name="sexo" value="Masculino" /> Hombre
								<input type="radio" name="sexo" value="Femenino" /> Mujer
							</div>
							<div class="form-group">
								<input class="form-control" name="telefono" type="number" required placeholder="Teléfono" minlength="1" maxlength="9" />
								<span class="focus-input100"></span>
							</div>
							<br>
					</div>
					<div class="form-group" location="text-center">
						<button type="submit" class="form-control btn btn-primary submit px-3">Registrar</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/validarRUT.js"></script>
	<script src="js/validarTelefono.js"></script>



</body>

</html>