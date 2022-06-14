<?php

include("../../functions/setup.php");


switch ($_POST['accion']) {
    case "Ingresar":
        ingresar();
        break;
    case "Modificar":
        modificar();
        break;
    case "Cancelar":
        cancelar();
        break;
}

function ingresar()
{
    $checkbox1 = $_POST['enfermedades'];
    for ($i=0;$i<sizeof ($checkbox1);$i++){
        $sql = "INSERT INTO usuario SET ('".$checkbox1[$i]."')";
        mysqli_query(conexion(), $sql);
    }
    header("Location:../Profesional/administrarpacientes.php");
    
}

function modificar()
{
    $sql = " UPDATE usuario SET diabetes='" . $_POST['diabetes'] . "',hta='" . $_POST['hta'] . "',otros='" . $_POST['otros'] . "'" . "' WHERE Id= " . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);

    header("Location:../Profesional/administrarpacientes.php");
}


function cancelar()
{

    header("Location:../Profesional/administrarpacientes.php");
}
?>
