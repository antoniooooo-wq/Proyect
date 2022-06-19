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

    <body id="bodyprinci" style="background-image: url(images/); ">
        <main>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="users" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                </symbol>
                <symbol id="professional" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                </symbol>
                <symbol id="pay" viewBox="0 0 16 16">
                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                </symbol>
                <symbol id="book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </symbol>
                <symbol id="add" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </symbol>
                <symbol id="ing" viewBox="0 0 16 16">
                    <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
                    <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
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
                                    <use xlink:href="#users" />
                                </svg>
                                Volver
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link active">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#book" />
                                </svg>
                                Ficha Paciente
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
                            <h6>id paciente: <?php echo $_GET['idusu']; ?></h6>
                            <h6>id paciente datos : <?php echo $datosusu['Id']; ?></h6>
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
                                        <textarea name="otros" value="<?php echo $datosusu['otros'] ?>"></textarea>
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
                            <a href="preingreso.php?Id=<?php echo $datosusu['Id']; ?>">
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