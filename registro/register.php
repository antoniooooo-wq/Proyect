<?php
include("../functions/setup.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registro</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registrar</h2>
                    <form action="la_wea_de_registrar.php" class="signin-form" method="post">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
									
                                    <label class="label">Rut</label>
									<input type="text" class="input--style-4" id="rut" name="rut" required oninput="checkRut(this)" placeholder="Ingrese RUT" minlength="9" maxlength="10">
                                
                                </div>
                            </div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Nombre</label>
									<input type="text" class="input--style-4" name="nombre" placeholder="Nombre " required>
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Apellido</label>
									<input type="text" class="input--style-4" name="apellido" placeholder="Apellido " required>
									<span class="focus-input100"></span>
									

								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Fecha de nacimiento</label>
									
									<input type="date" class="form-control" id="fecha_nac" name="fecha_nac" aria-label="Fecha Nacimiento" placeholder="Fecha Nacimiento">
									<span class="focus-input100"></span>
									

								</div>
							</div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">sexo</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Hombre
                                            <input type="radio" checked="checked" name="sexo" value="Masculino">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Mujer
                                            <input type="radio" name="sexo" value="Femenino">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Direccion</label>
                                <input type="text" class="input--style-4" name="direccion" placeholder="Direccion" required>
								<span class="focus-input100"></span>
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Correo</label>
                                <input class="input--style-4" type="email" name="correo" placeholder="Correo Electrónico" required />
								<span class="focus-input100"></span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefono</label>
                                    <input class="input--style-4" name="telefono" type="number" required placeholder="Teléfono" minlength="1" maxlength="9" />
								<span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contraseña</label>
                                <input id="password-field" type="password" class="input--style-4" placeholder="Contraseña" name="pass" required minlength="5" maxlength="15">
								
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            
                            <button type="submit" class="btn btn--radius-2 btn--blue">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<script src="js/jquery.min.js"></script>
	<script src="js/validarRUT.js"></script>
	<script src="js/validarTelefono.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
	
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
