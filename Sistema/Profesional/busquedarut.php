<?php

include("../../functions/setup.php");

switch ($_POST['op']) {
  case 1:
    todos();
    break;
  case 2:
    like($_POST['txt']);
    break;
}

function todos()
{
  $sql = "SELECT
  usuario.run,
  usuario.nombre,
  usuario.apellido,
  usuario.id_tipo_usuario,
  usuario.estado,
  usuario.Id
FROM
  usuario
  INNER JOIN tipo_usuario ON tipo_usuario.Id = usuario.id_tipo_usuario
WHERE
  usuario.id_tipo_usuario = 3";
  $result = mysqli_query(conexion(), $sql);
?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Estado</th>
        <th>Reservar Hora</th>
        <th>Editar</th>
        <th>Ficha</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($datos = mysqli_fetch_array($result)) {
      ?>
        <tr>

          <td><?php echo $datos['run']; ?></td>
          <td><?php echo $datos['nombre']; ?></td>
          <td><?php echo $datos['apellido']; ?></td>
          <td>
            <?php
            if ($datos['estado'] == 0) {
            ?>
              <img src="assets/images/inactivo.png"> Dado de Alta
            <?php
            } else {
            ?>
              <img src="assets/images/activo.png"> En TTO
            <?php
            }

            ?>
          </td>

          <td>
          <a href="ReservaHoras/Ingresodefecha.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/reloj.png"></a>
          </td>
          <td>
            <a href="profesionalprincipal.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/updated.png"></a>
          </td>
          <td>
            <a href="../FichaClinica/ficha.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/revision.png"></a>
          </td>
        </tr>
      <?php
      }
      ?>
  </table>
<?php
}


function like($txt)
{
  $sql = "SELECT*FROM
usuario
WHERE
 nombre like '%" . $txt . "%'  OR run like '%" . $txt . "%' OR apellido like '%" . $txt . "%'";
  $result = mysqli_query(conexion(), $sql);
?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Estado</th>
        <th>Reservar Hora</th>
        <th>Editar</th>
        <th>Ficha</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($datos = mysqli_fetch_array($result)) {
        if ($datos['id_tipo_usuario'] == 3) {
      ?>
          <tr>

            <td><?php echo $datos['run']; ?></td>
            <td><?php echo $datos['nombre']; ?></td>
            <td><?php echo $datos['apellido']; ?></td>
            <td>
              <?php
              if ($datos['estado'] == 0) {
              ?>
                <img src="assets/images/inactivo.png"> Dado de Alta
              <?php
              } else {
              ?>
                <img src="assets/images/activo.png"> En TTO
              <?php
              }

              ?>
            </td>
            <td>
              <a href="ReservaHoras/Ingresodefecha.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/reloj.png"></a>
            </td>
            <td>
              <a href="profesionalprincipal.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/updated.png"></a>
            </td>
            <td>
              <a href="../FichaClinica/ficha.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/revision.png"></a>
            </td>
          </tr>
      <?php

        }
      }
      ?>
  </table>
<?php
}
?>