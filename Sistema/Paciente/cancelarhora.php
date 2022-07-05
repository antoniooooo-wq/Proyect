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


    <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">
  </head>

  <body id="bodyprinci" style="height: 1080px; overflow-x: hidden; overflow-y: hidden;">
    <main>
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="back" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </symbol>
      </svg>
      <?php
      if ($_SESSION['tipo'] == "3") //Paciente
      {
      ?>
        <!-- Inicio SlideBar-->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: auto; height: auto;">
          <span class="fs-4">Podología Marticorena</span>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="../principaal.php" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#back" />
                </svg>
                Volver
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
        <div class="container px-0 py-5" id="featured-3">
          <h2 class="pb-2 border-bottom">Bienvenido(a): <?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?> <p style="color: blue;">(Cancelar Hora)</p>
          </h2>

          <div id="formulario_cancelar">
            <div class="container p-3 my-1 border">


              <div class="container p-5 my-5 border">
                <h4>Horas</h4>
                <div id="grilla" class="overflow-scroll">
                  <table class="table table-striped">
                    <tr>
                      <th>Fecha</th>
                      <th>Hora de inicio</th>
                      <th>Hora final</th>
                      <th>Cancelar Hora</th>

                    </tr>
                    <?php
                    $sql2 = "SELECT atencion.*
                , horas.horadeinicio, horas.horafinal, usuario.Id, usuario.run,
                 usuario.nombre, usuario.apellido 
                 FROM usuario 
                 INNER JOIN atencion ON atencion.id_paciente = usuario.Id 
                 INNER JOIN horas ON atencion.horas_id = horas.Id
                 WHERE atencion.id_paciente =" . $_SESSION['usuarioid'];

                    $resultt = mysqli_query(conexion(), $sql2);
                    while ($datospe = mysqli_fetch_array($resultt)) {
                    ?>
                      <tr>
                        <td><?php echo $datospe['fecha_atencion']; ?></td>
                        <td><?php echo $datospe['horadeinicio']; ?></td>
                        <td><?php echo $datospe['horafinal']; ?></td>
                        <td>

                          <a href="cancelar.php?id=<?php echo $datospe['Idatencion']; ?>&op=3"><img id="elim<?php echo $datospe['Idatencion']; ?>" src="assets/images/cerrar.png"></a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </table>
                </div>



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