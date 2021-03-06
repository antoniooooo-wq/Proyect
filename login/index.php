<!DOCTYPE html>
<html lang="en">

<head>
	<title>P.Marticorena - Inicio Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/validarRUT.js"></script>
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="procesalogin.php" method="post">
					<span class="login100-form-title">
						Inicio de Sesi??n
					</span>

					<div class="wrap-input100 validate-input" data-validate="Rut Requerido">
						<input class="input100" type="text" id="frmusuario" name="frmusuario" oninput="checkRut(this)" minlength="9" maxlength="10"  placeholder="Rut">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-clock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contrase??a Requerida">
						<input class="input100" type="password" id="frmclave" name="frmclave" placeholder="Contrase??a">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidaste
						</span>
						<a class="txt2" href="../recuperacion/index.php">
							Tu contrase??a?
						</a>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							-
						</span>
						<a class="txt2" href="../index.html">
							Volver -
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="../registro/register.php">
							Registrarme
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<?php
        if(isset($_GET['error']))
        {
            ?>

        <div id="alert-validate">
        		error - Problemas con el Usuario y/o Contrase??a<br>
       			 o la cuenta se encuentra desactivada, favor comunicarse con el administrador
        </div>

        <?php
        }
        ?>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>


	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>

</html>