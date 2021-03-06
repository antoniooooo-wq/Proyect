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
        <script src="../assets/js/validarfotos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.zoom').hover(function() {
                    $(this).addClass('transition');
                }, function() {
                    $(this).removeClass('transition');
                });
            });
        </script>


        <!-- Bootstrap core CSS -->
        <link href="assets/css/features.css" rel="stylesheet">
        <link href="assets/css/sidebars.css" rel="stylesheet">
        <link href="assets/css/galeria.css" rel="stylesheet">


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
                height: 100%;
                width: 100%;
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

    <body id="bodyprinci" style="height: 1080px; overflow-x: hidden; overflow-y: hidden; ">
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
                <symbol id="foto" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                </symbol>
            </svg>
            <?php
            if ($_SESSION['tipo'] == "2") //Profesional
            {
            ?>

                <!-- Inicio SlideBar-->
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                    <span class="fs-4">Podolog??a Marticorena</span>
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
                            <a href="#" class="nav-link active">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#foto" />
                                </svg>
                                Fotos
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
                        <p>Copyright 2022 Podolog??a Marticorena</p>
                    </footer>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <!--<li><a class="dropdown-item" href="#">Profile</a></li>-->
                            <li><a class="dropdown-item" href="../cerrarsesion.php">Cerrar Sesi??n</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Fin SlideBar-->

                <!--Inicio Body-->
                <center>

                    <div class="container px-4 py-5" id="global">

                        <form action="funcionfotos.php?idusu=<?php echo $_GET['idusu']; ?>" method="POST" name="form1" enctype="multipart/form-data">
                            <h3>Fotos Paciente:</h3>
                            <div class="col">
                                <label for="imagen[]">Inserte Imagenes</label>
                                <input type="file" class="form-control" name="imagen[]" id="imagen[]" multiple="">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    <center>
                                        <input id="btnIngresar" type="submit" value="Ingresar" class="btn btn-success" onclick="validarfotos(this.value);">

                                        <input id="btnCancelar" type="button" value="Cancelar" class="btn btn-danger">

                                        <input type="hidden" id="accion" name="accion">
                                        <input type="hidden" id="idoculto" name="idoculto" value="<?php echo $_GET['idusu']; ?>">
                                    </center>
                                </div>
                            </div>
                        </form>

                        <br>
                        <div class="container p-3 my-1 border">
                            <div>
                                <section id="galeria">
                                    <?php
                                    $sql = "SELECT
                                        usuario.Id,
                                        foto.imagen AS imagen1
                                        FROM
                                        usuario
                                        INNER JOIN foto ON foto.id_paciente = usuario.Id
                                        WHERE id_paciente =" . $_GET['idusu'];
                                    $result = mysqli_query(conexion(), $sql);
                                    ?>
                                    <div class="text-center pt-5">
                                        <h1>Galeria de Imagenes</h1>
                                    </div>
                                    <div class="row">
                                        <?php
                                        while ($datosimg = mysqli_fetch_array($result)) {
                                        ?>
                                            <div class="col-lg-4 col-md-6 col-sm-12" <?php if ($datosimg['principal'] == 0) { ?> active <?php } ?>">
                                                <img src="../assets/images/profiles/<?php echo $datosimg['imagen1']; ?>" class="zoom">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <!--Fin Body-->
                <?php
            }
                ?>
        </main>
        </center>
    </body>

    </html>
<?php
} else {
    header('Location:../login/Login.php');
}
?>