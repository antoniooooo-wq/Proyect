
<?php
include("../Proyect/functions/setup.php");

session_start();

if (isset($_SESSION['usuario'])) {

  if (isset($_GET['idusu'])) {
      $sqlusu = "SELECT * FROM usuario WHERE Id=" . $_GET['idusu'];
      $resultusu = mysqli_query(conexion(), $sqlusu);
      $datosusu = mysqli_fetch_array($resultusu);
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../../assets/css/pagos.css" type="text/css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title> Portal de Pago </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">
  <link rel="icon" type="image/png" href="../assets/images/icons/favicon-16x16.png" />

  
</head>
<body>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-12 col-sm-10">
          <div class="col-sm-2"></div>
          <div class="col-sm-10 col-12">
            <h1>Portal de pagos</h1>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-10 col-12">
            <p class="">
              <a href="../principaal.php">Volver</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-12 col-sm-8 py-1">
            <h4 class="">Información</h4>
          </div>
          <div class="col-sm-2"></div>
        </div>
        <div class="row" id="app-info">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 col-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>rut </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?></td>
                  <td><?php echo $_SESSION['usuariorun']; ?></td>
                </tr>
                <tr></tr>
              </tbody>
            </table>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
    </div>
    <div class="py-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 col-12 py-1">
            <h4 class="">Detalles</h4>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 col-12">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-primary">Atencion</th>
                  <th class="text-primary">Fecha</th>
                  <th class="text-primary">Hora</th>
                  <th class="text-primary">Costo</th>
                  <th class="text-primary">Detalle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Matricectomía</td>
                  <td>20-10-2002</td>
                  <td>10:000</td>
                  <td>$10000</td>
                  <td><label><input type="checkbox" id="cbox1" value="first_checkbox"></label></td>
                </tr>
                <tr></tr>
                <tr></tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
    <div class="py-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
            <div class="col-sm-8 col-12 bg-primary py-1">
            <h4 class="">Total a Pagar </h4>
            <table class="table">
              <thead>
                <tr>
                  <th class="text-light"></th>
                  <th class="text-light"></th>
                  <th class="text-light"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-light"></td>
                  <td class="text-light"></td>
                  <td class="text-light"></td>
                </tr>
              </tbody>
            </table>
            <a href="https://www.bancoestado.cl/transa/login_pers.asp?negocio=MODPAGO">   <button  >Pagar
            
            </button>
              

            </a>
         
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<?php
} else {
  header('Location:../../login/penka.php');
}
?>