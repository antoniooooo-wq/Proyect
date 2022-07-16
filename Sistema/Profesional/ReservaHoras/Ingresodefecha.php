<?php
include("../../../functions/setup.php");

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
    <title>Agenda hora</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon-16x16.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/.bundlbootstrape.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>

  <body id="bodyprinci" style="background-color: blueviolet ;">
    <div id="javascript_header"></div>
    <form class="form-inline" method="post" action="fechas.php" name="formFechas" id="formFechas">
      <div class="form__header">
        <h1>Agenda Hora </h1>
        <p>Podologia Marticorena</p>
      </div>
      <h2>Agende su hora en dos simple pasos</h2>
      <h2>Paso 1:</h2>
      <p>Elija el dia</p>
      <h2>Paso 2:</h2>
      <p>Seleccione la hora deseada</p>
      <div class="form-date-group">
        <div class="form-group">
          <label for="job-1__start">Seleccione el dia</label>
          <input type="date" name="fecha" id="fecha" required>
        </div>
      </div>
      <!--
                        <h6>id paciente datos: <?php echo $datos['Id']; ?></h6>
                        <h6>id paciente datosusu: <?php echo $datosusu['Id']; ?></h6>
                        <h6>id paciente GET idusu: <?php echo $_GET['idusu']; ?></h6>
                        <h6>id paciente GET Id: <?php echo $_GET['Id']; ?></h6>
    -->
      <div class="form-date-group">
        <div class="modal-body">
          <label>Seleccione la hora de su cita: </label><label id="info" name="info" class="ml-14"></label><br>
          <select class="form-control" name="hora" id="hora" required>
          </select><br>
        </div>
      </div>

      <div class="line-break"></div>
      <input class="button" type="button" value="Guardar" id="guardar" name="Guardar">


      <a href="../../principaal.php" type="button">Volver
      </a>
    </form>
    <input type="hidden" id="idusu" name="idusu" value="<?php echo $_GET['idusu']; ?>">
  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery-3.0.0.min.js"></script>
  <script src="../assets/js/javascripta.js"></script>
  

  </html>
<?php

} else {
  header('Location:../../login/penka.php');
}
?>