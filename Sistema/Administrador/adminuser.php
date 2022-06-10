<?php

include("../../functions/setup.php");


switch ($_POST['accion']) {
    case "Ingresar":
        ingresar();
        break;
    case "Modificar":
        modificar();
        break;
    case "Eliminar":
        eliminar();
        break;
    case "Cancelar":
        cancelar();
        break;
}

if ($_GET['idelim']){

    $sql = "DELETE FROM usuario WHERE Id=" . $_GET['idelim'];
    mysqli_query(conexion(), $sql);

    header("Location:adminprincipal.php");

}


function ingresar()
{

    $sql = "INSERT INTO usuario SET run='" . $_POST['Rut'] . "',nombre='" . $_POST['name'] . "',apellido='" . $_POST['app'] . "',
    fecha_nac='" . $_POST['fechanacimiento'] . "',email='" . $_POST['correo'] . "',sexo='" . $_POST['sexo'] . "',
    telefono='" . $_POST['telefono'] . "',estado='" . $_POST['frmestado'] . "',id_tipo_usuario='" . $_POST['Tipouser'] . "',
    pass='" . md5($_POST['pass']) . "'";


    mysqli_query(conexion(), $sql);

    header("Location:adminprincipal.php");
}

function modificar()
{
    $sql = " UPDATE usuario SET run='" . $_POST['Rut'] . "',nombre='" . $_POST['name'] . "',apellido='" . $_POST['app'] . "',
    fecha_nac='" . $_POST['fechanacimiento'] . "',email='" . $_POST['correo'] . "',sexo='" . $_POST['sexo'] . "',
    telefono='" . $_POST['telefono'] . "',estado='" . $_POST['frmestado'] . "',id_tipo_usuario='" . $_POST['Tipouser'] . "' WHERE Id= " . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);

    header("Location:adminprincipal.php");
}

function eliminar()
{

    $sql = "DELETE FROM usuarios WHERE Id=" . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);

    header("Location:adminprincipal.php");
}

function cancelar()
{

    header("Location:adminprincipal.php");
}
?>
