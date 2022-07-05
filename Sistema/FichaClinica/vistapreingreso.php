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
                <symbol id="back" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </symbol>
                <symbol id="ficha" viewBox="0 0 16 16">
                    <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1h-.5Z" />
                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                </symbol>
                <symbol id="preingreso" viewBox="0 0 16 16">
                    <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z" />
                    <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z" />
                </symbol>
                <symbol id="atenciones" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </symbol>
            </svg>
            <?php
            if ($_SESSION['tipo'] == "2") //Profesional
            {
            ?>

                <!-- Inicio SlideBar-->
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: auto; height: auto;">
                <span class="fs-4">Podología Marticorena</span>
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
                            <a href="ficha.php?idusu=<?php echo $_GET['idusu']; ?>" class="nav-link text-white">
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
                        <li>
                            <a href="../FichaClinica/preingreso.php?idusu=<?php echo $_GET['idusu']; ?>" class="nav-link active">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#preingreso" />
                                </svg>
                                Pre-Ingreso
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
                <div class="container" id="global">
                    <!--ojitooo-->
                    <div id="formulario_usuario">
                        <div class="container p-3 my-1 border">
                            <form action="registroficha.php" method="post" name="form_ficha">
                            <!--
                                <h6>id paciente datos: <?php echo $datos['Id']; ?></h6>
                                <h6>id paciente datosusu: <?php echo $datosusu['Id']; ?></h6>
                                <h6>id paciente GET idusu: <?php echo $_GET['idusu']; ?></h6>
                                <h6>id paciente GET Id: <?php echo $_GET['Id']; ?></h6>
                            -->
                                <?php
                                $sql = "SELECT
                                        usuario.nombre
                                    FROM
                                        usuario
                                        WHERE Id =" . $_GET['idusu'];
                                $result = mysqli_query(conexion(), $sql);
                                $datos = mysqli_fetch_array($result);
                                ?>
                                <h2>Pre-Ingreso</h2>
                                <br>
                                <h6>Paciente: <?php echo $datos['nombre']; ?></h6>

                                <!-- Consulta-->
                                <?php
                                $sql2 = "SELECT
                                        *
                                      FROM
                                      pre_ingreso
                                      WHERE
                                        Id=". $_GET['id'] ;     
                                $result = mysqli_query(conexion(), $sql2);
                                while ($datosusu = mysqli_fetch_array($result)) {
                                ?>
                                    <!--Fin Consulta-->
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="frec_card">Frecuencia Cardiaca</label>
                                            <input type="text" class="form-control" id="frec_card" name="frec_card" aria-label="Frecuencia Cardiaca" placeholder="Frecuencia Cardiaca" value="<?php echo $datosusu['frec_card'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="frec_resp">Frecuencia Respiratoria</label>
                                            <input type="text" class="form-control" id="frec_resp" name="frec_resp" aria-label="Frecuencia Respiratoria" placeholder="Frecuencia Respiratoria" value="<?php echo $datosusu['frec_resp'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="sist">Sistole</label>
                                            <input type="text" class="form-control" id="sist" name="sist" aria-label="Sistole" placeholder="Sistole" value="<?php echo $datosusu['sist'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="diast">Diastole</label>
                                            <input type="text" class="form-control" id="diast" name="diast" aria-label="Diastole" placeholder="Diastole" value="<?php echo $datosusu['diast'] ?>">
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="temp">T°</label>
                                            <input type="text" class="form-control" id="temp" name="temp" aria-label="T°" placeholder="T°" value="<?php echo $datosusu['temp'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="porc_satu">% de Saturación</label>
                                            <input type="text" class="form-control" id="porc_satu" name="porc_satu" aria-label="% de Saturación" placeholder="% de Saturación" value="<?php echo $datosusu['porc_satu'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="glu">Glucosa</label>
                                            <input type="text" class="form-control" id="glu" name="glu" aria-label="Glucosa" placeholder="Glucosa" value="<?php echo $datosusu['glu'] ?>">
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="rotu">Rotuliano</label>
                                            <input type="text" class="form-control" id="rotu" name="rotu" aria-label="Rotuliano" placeholder="Rotuliano" value="<?php echo $datosusu['rotu'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="pulso_pe">Pulso Pedio</label>
                                            <input type="text" class="form-control" id="pulso_pe" name="pulso_pe" aria-label="Pulso Pedio" placeholder="Pulso Pedio" value="<?php echo $datosusu['pulso_pe'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="mono">Monofila</label>
                                            <input type="text" class="form-control" id="mono" name="mono" aria-label="Monofila" placeholder="Monofila" value="<?php echo $datosusu['mono'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="punsion">Punsión</label>
                                            <input type="text" class="form-control" id="punsion" name="punsion" aria-label="Punsión" placeholder="Punsión" value="<?php echo $datosusu['punsion'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="foc">Frio/Calor</label>
                                            <input type="text" class="form-control" id="foc" name="foc" aria-label="Frio/Calor" placeholder="Frio/Calor" value="<?php echo $datosusu['foc'] ?>">
                                        </div>

                                        <div class="col">
                                            <label for="diapa">Diapason</label>
                                            <input type="text" class="form-control" id="diapa" name="diapa" aria-label="Diapason" placeholder="Diapason" value="<?php echo $datosusu['diapa'] ?>">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="row g-3">
                                            <label for="obs">Observaciones</label>
                                            <textarea name="obs"><?php echo $datosusu['obs'] ?></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <center>
                                        <h3>Tratamiento y Evolución</h3>
                                    </center>

                                    <div class="row g-3">
                                        <div class="row g-3">
                                            <label for="obss">Observaciones</label>
                                            <textarea name="obss"><?php echo $datosusu['obss'] ?></textarea>
                                        </div>
                                        <div class="row g-3">
                                            <label for="diag">Diagnostico</label>
                                            <textarea name="diag"><?php echo $datosusu['diag'] ?></textarea>
                                        </div>
                                        <div class="row g-3">
                                            <label for="tto">Tratamiento</label>
                                            <textarea name="tto"><?php echo $datosusu['tto'] ?></textarea>
                                        </div>
                                        <div class="row g-3">
                                            <label for="indic">Indicaciones</label>
                                            <textarea name="indic"><?php echo $datosusu['indic'] ?></textarea>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                        <center>
                                            <?php
                                            if (isset($_GET['Id'])) {
                                            ?>
                                                <input id="btnIngresar" type="button" value="PreIngreso" class="btn btn-success" onclick="validarpreingreso(this.value);">
                                            <?php
                                            } else {
                                            ?>
                                                <input id="btnModificar" type="button" value="PreModificar" class="btn btn-warning" onclick="validarpreingreso(this.value);">
                                            <?php
                                            }
                                            ?>
                                            <input id="btnCancelar" type="button" value="PreCancelar" class="btn btn-danger" onclick="validarpreingreso(this.value);">
                                            <input type="hidden" id="accion" name="accion">
                                            <input type="hidden" id="idoculto" name="idoculto" value="<?php echo $_GET['idusu']; ?>">
                                        </center>
                                    </div>
                                </div>
                            </form>
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