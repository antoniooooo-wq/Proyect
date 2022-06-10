<?php

include("../../functions/setup.php");
session_start();

switch ($_POST['accion']) {
    case "Modificar":
        modificar();
        break;
    case "Cancelar":
        cancelar();
        break;
}

function modificar()
{
    $sql = " UPDATE usuario SET email='" . $_POST['correo']  . "',direccion='" . $_POST['direccion'] . "',telefono='" . $_POST['telefono'] . "',
    estado=1,id_tipo_usuario= 3  WHERE Id= " . $_SESSION['usuarioid'];

    mysqli_query(conexion(), $sql);

    
    header("Location:../principaal.php");
}

function cancelar()
{
    header("Location:../principaal.php");
}
