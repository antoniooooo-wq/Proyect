<?php


include("../functions/setup.php");


$sql = "INSERT INTO atencion SET fecha_atencion='" . $_POST['fecha'] . "',horas_id='" . $_POST['hora'] . "'";
mysqli_query(conexion(), $sql);

if(mysqli_query(conexion(), $sql))
{
    echo true;
}





?>