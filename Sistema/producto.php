<?php


include("../functions/setup.php");
session_start();

$sql = "INSERT INTO atencion SET fecha_atencion='" . $_POST['fecha'] . "',horas_id='" . $_POST['hora'] ."',id_paciente='" . $_SESSION['usuarioid'] 
."',estado='0'";

if(mysqli_query(conexion(), $sql))
{
    echo true;
}





?>