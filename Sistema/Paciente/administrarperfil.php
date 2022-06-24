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

    </head>

    <body id="bodyprinci" style="background-image: url(images/);height: 1080px; overflow-x: hidden; overflow-y: hidden; ">
        <main>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </symbol>
                <symbol id="ing" viewBox="0 0 16 16">
                    <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
                    <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                </symbol>
                <symbol id="Plus" viewBox="0 0 16 16">
                     <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </symbol>
                <symbol id="cancel" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </symbol>
            </svg>
            <?php
            if ($_SESSION['tipo'] == "3") //Paciente
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
                            <a href="./Proyect/Sistema/Ingresodefecha.php?idusu=<?php echo $datosusu['Id']; ?>" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#Plus" />
                                </svg>
                                Agendar Hora
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#book" />
                                </svg>
                                Consultar Observaciones
                            </a>
                        </li>
                        <li>
                            <a href="href=./Proyect/Sistema/Pago/Portaldepago.php?idusu=<?php echo $datosusu['Id']; ?>" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#ing" />
                                </svg>
                                Portal de Pagos
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-red">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#cancel" />
                                </svg>
                                Cancelar Hora
                            </a>
                        </li>                      
                    </ul>
                    <!--Fin Slidebar-->
                    <footer class="container">
                        <p>Copyright 2022 Podología Marticorena</p>
                    </footer>
                    <hr>
                    <?php $sql = "SELECT
                            usuario.Id,
                            usuario.run,          
                            images_tabla.imagen AS imagen1            
                            FROM
                            usuario
                            INNER JOIN images_tabla ON images_tabla.id_paciente = usuario.Id
                            WHERE Id =" . $_SESSION['usuarioid']; 
                            $result = mysqli_query(conexion(), $sql);
                            $datos = mysqli_fetch_array($result);
                    ?>
                               
                    <div class="dropdown">                      
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">                      
                             <!-- <img src="../assets/images/profiles/<?php echo $datos['imagen1']; ?>" width="32" height="32" class="rounded-circle me-2">     -->
                              <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">           
                            <strong><?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="administrarperfil.php">Editar Perfil</a></li>
                            <li><a class="dropdown-item" href="../cerrarsesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Fin SlideBar-->

                <!--Inicio Body-->
                <div class="container px-0 py-5" id="featured-3">
                    <h2 class="pb-2 border-bottom">Perfil Paciente</h2>
                    <br>
                    <!--ojitooo-->
                    <div id="formulario_usuario">
                        <div class="container p-3 my-1 border">
                            <br>
                            <form action="perfilpaciente.php" method="post" name="form1" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col">
                                        <input type="text" class="form-control" id="Rut" name="Rut" aria-label="Run" placeholder="Run" value="<?php echo $_SESSION['usuariorun'] ?>" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="row g-3">
                                    <div class="col">
                                        <input type="text" class="form-control" id="name" name="name" aria-label="Nombre" placeholder="Nombre" value="<?php echo $_SESSION['usuario'] ?>" disabled>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="app" name="app" aria-label="Apellido" placeholder="Apellido" value="<?php echo $_SESSION['usuarioap'] ?>" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="row g-3">
                                    <div class="col">
                                        <input type="email" class="form-control" id="correo" name="correo" aria-label="Correo" placeholder="Correo" value="<?php echo  $_SESSION['usuarioemail'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="row g-3">
                                    <div class="col">
                                        <input type="text" class="form-control" id="direccion" name="direccion" aria-label="Direccion" placeholder="Direccion" value="<?php echo $_SESSION['usuariodire'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="row g-3">
                                    <div class="col">
                                        <br>
                                        <input type="number" class="form-control" id="telefono" name="telefono" aria-label="Telefono" placeholder="Telefono" value="<?php echo $_SESSION['usuariotel'] ?>">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                        <center>
                                            <input id="btnModificar" type="button" value="Modificar" class="btn btn-warning" onclick="validarpaciente(this.value);">
                                            <input id="btnCancelar" type="button" value="Cancelar" class="btn btn-danger" onclick="validarpaciente(this.value);">
                                            <input type="hidden" id="accion" name="accion">
                                            <input type="hidden" id="idoculto" name="idoculto" value="<?php echo $_GET['idusu']; ?>">
                                        </center>
                                    </div>
                                </div>
                        </div>

                        </form>
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