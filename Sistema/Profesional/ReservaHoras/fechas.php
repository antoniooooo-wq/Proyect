<?php


include("../../../functions/setup.php");

if($_POST['op']==1)
{
  $sql="select * from atencion where fecha_atencion='".$_POST['fecha']."'";
  $result=mysqli_query(conexion(),$sql);
  $contusu=mysqli_num_rows($result);
  
  if($contusu!=0)
  {
    ?>
    <option value="0">Seleccionar</option>
    <?php
          $sqlhora = "SELECT id, horadeinicio, horafinal FROM horas WHERE Id NOT IN (SELECT horas_id from atencion where fecha_atencion='".$_POST['fecha']."')";
          $resulthora = mysqli_query(conexion(), $sqlhora);
          while ($datoshora = mysqli_fetch_array($resulthora)) 
          {
          ?>
              <option value="<?php echo $datoshora['id']; ?>"><?php echo $datoshora['horadeinicio']; ?>-<?php echo $datoshora['horafinal']; ?></option>
          <?php
          }
          ?>
  <?php
  }else{
    ?>
    <option value="0">Seleccionar</option>
    <?php
          $sqlhora = "SELECT * from horas";
          $resulthora = mysqli_query(conexion(), $sqlhora);
          while ($datoshora = mysqli_fetch_array($resulthora)) 
          {
          ?>
              <option value="<?php echo $datoshora['Id']; ?>"><?php echo $datoshora['horadeinicio']; ?>-<?php echo $datoshora['horafinal']; ?></option>
          <?php
          }
  }
}
 
?>