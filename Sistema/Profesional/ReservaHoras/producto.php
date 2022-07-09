<?php


include("../../../functions/setup.php");


if (isset($_GET['idusu'])) {
    $sqlusu = "SELECT * FROM usuario WHERE Id=" . $_GET['idusu'];
    $resultusu = mysqli_query(conexion(), $sqlusu);
    $datosusu = mysqli_fetch_array($resultusu);



    
  }


  $sql = "INSERT INTO atencion SET fecha_atencion='" . $_POST['fecha'] . "',horas_id='" . $_POST['hora'] ."',id_paciente='".$datosusu['idusu']. "'";



if(mysqli_query(conexion(), $sql))
{
   echo $sql;
}
?>