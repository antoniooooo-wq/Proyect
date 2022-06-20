<?php

include("../../functions/setup.php");

session_start();

if (isset($_SESSION['usuario'])) {

    if (isset($_GET['idusu'])) {
        $sqlusu = "SELECT * FROM usuario WHERE Id=" . $_GET['idusu'];
        $resultusu = mysqli_query(conexion(), $sqlusu);
        $datosusu = mysqli_fetch_array($resultusu);
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title> Panel Principal </title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">
        <link rel="icon" type="image/png" href="assets/images/icons/favicon-16x16.png" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/sidebars.js"></script>
        <script src="assets/js/validardatos.js"></script>
        <script src="assets/js/validarRUT.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/features.css" rel="stylesheet">
        <link href="assets/css/sidebars.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <style type="text/css">
            #global {
                height: auto;
                width: auto;
                border: 1px solid #ddd;
                background: #f1f1f1;
                overflow-y: scroll;
            }

            #mensajes {
                height: auto;
            }

            .texto {
                padding: 4px;
                background: #fff;
            }
        </style>

    </head>

    <body id="bodyprinci" style="background-image: url(images/);height: 1080px; overflow-x: hidden; overflow-y: hidden; ">
        <main>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="atenciones" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </symbol>
                <symbol id="back" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </symbol>
                <symbol id="ficha" viewBox="0 0 16 16">
                    <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1h-.5Z" />
                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                </symbol>
            </svg>
            <?php
            if ($_SESSION['tipo'] == "2") //Profesional
            {
            ?>

                <!-- Inicio SlideBar-->
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: auto; height: auto;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="20" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-4">Podología Marticorena</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="../Profesional/administrarpacientes.php" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#back" />
                                </svg>
                                Volver
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link active">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#ficha" />
                                </svg>
                                Ficha Paciente
                            </a>
                        </li>
                        <li>
                            <a href="vistaficha.php?idusu=<?php echo $_GET['idusu']; ?>" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#atenciones" />
                                </svg>
                                Atenciones
                            </a>
                        </li>
                    </ul>
                    <footer class="container">
                        <p>Copyright 2022 Podología Marticorena</p>
                    </footer>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <!--<li><a class="dropdown-item" href="#">Profile</a></li>-->
                            <li><a class="dropdown-item" href="../cerrarsesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Fin SlideBar-->

                <!--Inicio Body-->
                <div class="container px-4 py-5" id="global">
                    <!--ojitooo-->
                    <div id="formulario_usuario">
                        <div class="container p-3 my-1 border">
                            <h4> Paciente:</h4>
                            <table>
                                <?php
                                $sql = "SELECT
                                        usuario.Id,
                                        usuario.run,
                                        usuario.estado,
                                        tipo_usuario.nombre_tipo_usuario,   
                                        images_tabla.imagen AS imagen1            
                                        FROM
                                        usuario
                                        INNER JOIN images_tabla ON images_tabla.id_paciente = usuario.Id
                                        INNER JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.Id
                                        WHERE id_paciente =" . $datosusu['Id'];
                                $result = mysqli_query(conexion(), $sql);
                                while ($datos = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                            if ($datos['imagen1'] == "") {
                                            ?>
                                                <img src="assets/images/sinfoto.png" width="100px">
                                            <?php
                                            } else {
                                            ?>
                                                <img src="../assets/images/profiles/<?php echo $datos['imagen1']; ?>" width="100px">
                                            <?php
                                            }

                                            ?>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </table>
                        <!--
                                <h6>id paciente datos: <?php echo $datos['Id']; ?></h6>
                                <h6>id paciente datosusu: <?php echo $datosusu['Id']; ?></h6>
                                <h6>id paciente GET idusu: <?php echo $_GET['idusu']; ?></h6>
                                <h6>id paciente GET Id: <?php echo $_GET['Id']; ?></h6>
                            -->   
                            <hr>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name">Nombres</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-label="Nombres" placeholder="Nombres" value="<?php echo $datosusu['nombre'] ?>" disabled>
                                </div>
                                <div class="col">
                                    <label for="app">Apellidos</label>
                                    <input type="text" class="form-control" id="app" name="app" aria-label="Apellidos" placeholder="Apellidos" value="<?php echo $datosusu['apellido'] ?>" disabled>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" aria-label="Direccion" placeholder="Direccion" value="<?php echo $datosusu['direccion'] ?>" disabled>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="fechanacimiento">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" aria-label="Fecha Nacimiento" onclick="verfecha(this.value)" placeholder="Fecha Nacimiento" value="<?php echo $datosusu['fecha_nac'] ?>" disabled>
                                </div>
                                <?php
                                function verfecha($vfecha)
                                {
                                    $fch = explode("-", $vfecha);
                                    $tfecha = $fch[2] . "-" . $fch[1] . "-" . $fch[0];
                                    return $tfecha;
                                }
                                $fnaci = verfecha($datosusu['fecha_nac']);
                                function calcular_edad($fecha)
                                {
                                    $dias = explode("-", $fecha, 3);
                                    $dias = mktime(0, 0, 0, $dias[1], $dias[0], $dias[2]);
                                    $edad = (int)((time() - $dias) / 31556926);
                                    return $edad;
                                }
                                ?>
                                <?php
                                if (isset($_GET['idusu'])) {
                                ?>
                                    <div class="col">
                                        <label for="edad">Edad</label>
                                        <input type="text" class="form-control" id="edad" name="edad" aria-label="Edad" placeholder="Edad" value="<?php echo calcular_edad($fnaci) ?>" disabled>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="col">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo" aria-label="Correo" placeholder="Correo" value="<?php echo $datosusu['email'] ?>" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div></div>
                                <div class="col">
                                    <label for="sexo">Sexo</label>
                                    <input type="radio" class="form-check-input" id="radio" name="sexo" value="Masculino" <?php if ($datosusu['sexo'] == "Masculino") { ?> checked <?php } ?>" disabled>
                                    <label class="form-check-label" for="radio">
                                        Masculino
                                    </label>
                                    <input type="radio" class="form-check-input" id="radio" name="sexo" value="Femenino" <?php if ($datosusu['sexo'] == "Femenino") { ?> checked <?php } ?>" disabled>
                                    <label class="form-check-label" for="radio">
                                        Femenino
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="telefono">Telefono</label>
                                    <input type="number" class="form-control" id="telefono" name="telefono" aria-label="Telefono" placeholder="Telefono" value="<?php echo $datosusu['telefono'] ?>" disabled>
                                </div>
                            </div>
                            <hr>
                            <form action="registroficha.php" method="post" name="form_ficha">
                                <h2>Enfermedades, Medicamentos e Intervenciones</h2>
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="enfermedades">Enfermedades</label>
                                        <input type="checkbox" class="form-check-input" id="checkbox" name="diabetes" value="diabetes" <?php if ($datosusu['diabetes'] == "diabetes") { ?> checked <?php } ?>">
                                        <label class="form-check-label" for="checkbox">
                                            Diabetes
                                        </label>
                                        <input type="checkbox" class="form-check-input" id="checkbox" name="hta" value="hta" <?php if ($datosusu['hta'] == "hta") { ?> checked <?php } ?>">
                                        <label class="form-check-label" for="checkbox">
                                            HTA
                                        </label>
                                    </div>
                                    <div class="row g-3">
                                        <label for="otros">Otros</label>
                                        <textarea name="otros" value="<?php echo $datosusu['otros'] ?>"><?php echo $datosusu['otros'] ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                        <center>
                                            <?php
                                            if (isset($_GET['idusu'])) {
                                            ?>
                                                <input id="btnIngresar" type="button" value="Ingresar" class="btn btn-success" onclick="validarficha(this.value);">
                                            <?php
                                            } else {
                                            ?>
                                                <input id="btnModificar" type="button" value="Modificar" class="btn btn-warning">
                                            <?php
                                            }
                                            ?>
                                            <input id="btnCancelar" type="button" value="Cancelar" class="btn btn-danger">

                                            <input type="hidden" id="accion" name="accion">
                                            <input type="hidden" id="idoculto" name="idoculto" value="<?php echo $_GET['idusu']; ?>">
                                        </center>
                                    </div>
                                </div>
                            </form>
                            <a href="preingreso.php?idusu=<?php echo $_GET['idusu']; ?>">
                                <button class="btn btn-success">Pre-Ingreso</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Fin Body-->
            <?php
            }
            ?>
        </main>
    </body>

    </html>
<?php
} else {
    header('Location:../login/Login.php');
}
?>