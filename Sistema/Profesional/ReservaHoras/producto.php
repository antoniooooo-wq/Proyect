<?php


include("../../../functions/setup.php");



  $sql = "INSERT INTO atencion SET fecha_atencion='" . $_POST['fecha'] . "',horas_id='" . $_POST['hora'] ."',id_paciente='".$_POST['idusu']. "', estado='0'";



if(mysqli_query(conexion(), $sql))
{
   echo $sql;
}
?>