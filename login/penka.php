<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/mystyle.css">
  <title>No tiene Permisos</title>
  <link rel="icon" type="image/png" href="images/icons/blue_home_house_12608.ico" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="fondo-boody" style="background-image: url(images/error.jpg);">

  <div class="ratio ratio-4x3">
    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" ></iframe>
  </div>
  


  <h1><p class="text-danger">SIN PERMISOS -ERROR-</p></h1>
  <div>
    <h4><p class="text-danger">ERROR CRÍTICO - Problemas con el usuario y/o Contraseña<br>
      o la cuenta se encuentra desactivada, favor comuniquese<br>
      con el administrador.
    </p></h4>
  </div>



  <?php
  if (isset($_GET['error'])) {
  ?>

  <?php
  }
  ?>
  <a href="index.php">Volver</a>


</body>

</html>