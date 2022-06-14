<?php

include("../../functions/setup.php");

switch($_POST['op'])
{
    case 1: todos();
      break;
    case 2:like($_POST['txt']);
      break;
}


function todos()
{
    $sql="select * from usuario";
    $result=mysqli_query(conexion(),$sql);
?>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>run</th>
        <th>Apellido</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while ($datos=mysqli_fetch_array($result))
            {
        ?>
      <tr>
        <td><?php echo $datos['nombre'];?></td>
        <td><?php echo $datos['run'];?></td>
        <td><?php echo $datos['apellido'];?></td>
      </tr>
    <?php
            }
        ?>
    </tbody>
  </table>
<?php
}

function like($txt)
{
    $sql="select * from usuario where run like '%".$txt."%'";
    $result=mysqli_query(conexion(),$sql);
?>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while ($datos=mysqli_fetch_array($result))
            {
        ?>
      <tr>
        <td><?php echo $datos['nombre'];?></td>
        <td><?php echo $datos['apellido'];?></td>
        <td><?php echo $datos['run'];?></td>
      </tr>
    <?php
            }
        ?>
    </tbody>
  </table>
<?php
}

?>