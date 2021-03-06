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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/.bundlbootstrape.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

    <!--Probando :v-->
  </head>

  <body id="bodyprinci" style="background-image: url(images/);height: 1080px; overflow-x: hidden; overflow-y: hidden; ">
    <main>
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="users" viewBox="0 0 16 16">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
        </symbol>
        <symbol id="add" viewBox="0 0 16 16">
          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
        </symbol>
        <symbol id="ing" viewBox="0 0 16 16">
          <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
          <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
        </symbol>
        <symbol id="homes" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
        </symbol>
      </svg>
      <?php
      if ($_SESSION['tipo'] == "2") //Profesional
      {
      ?>

        <!-- Inicio SlideBar-->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: auto; height: auto;">
          <span class="fs-4">Podolog??a Marticorena</span>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <a href="../principaal.php" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#homes" />
              </svg>
              Panel Principal
            </a>
            <li class="nav-item">
              <a href="profesionalprincipal.php" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#add" />
                </svg>
                Ingresar Paciente
              </a>
            </li>
            <li class="nav-item">
              <a href="administrarpacientes.php" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#users" />
                </svg>
                Administrar Pacientes
              </a>
            </li>
            <!--
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#ing" />
                </svg>
                Ingresos
              </a>
            </li>
            -->
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
        <div class="container" id="global">
          <br>
          <h4>Pacientes</h4>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <label for="lname" class="fontforusuario">Buscar</label> <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#search" />
                  </svg>:
                  <br>
                  <input type="text" class="form-control" id="txt" name="txt">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div id="grilla"></div>
        </div>
        <!--Fin Body-->
      <?php
      }
      ?>
    </main>
    <script>
      $(document).ready(function() {
        muestratodos();

        $("#txt").keyup(function() {
          like($("#txt").val());
        });


      });

      function muestratodos() {
        $.ajax({
          type: "POST",
          url: 'busquedarut.php',
          data: 'op=1',
          success: function(response) {
            $("#grilla").html(response);
          }
        });
      }

      function like(txt) {
        $.ajax({
          type: "POST",
          url: 'busquedarut.php',
          data: 'op=2&txt=' + txt,
          success: function(response) {
            $("#grilla").html(response);
          }
        });
      }
    </script>



  </body>


  </html>

<?php
} else {
  header('Location:../../login/Login.php');
}
?>