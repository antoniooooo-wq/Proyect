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
    case "PreIngreso":
        preingresar();
        break;
    case "PreModificar":
        premodificar();
        break;
    case "PreCancelar":
        precancelar();
        break;
}

function ingresar()
{
    $sql = " UPDATE usuario SET diabetes='" . $_POST['diabetes'] . "',hta='" . $_POST['hta'] . "',otros='" . $_POST['otros'] . "' WHERE Id= " . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);
    header("Location:ficha.php?idusu=$_POST[idoculto]");
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

function preingresar()
{
    $sql = "INSERT INTO pre_ingreso SET
    pre_ingreso.frec_card = '" . $_POST['frec_card'] . "',
    pre_ingreso.frec_resp = '" . $_POST['frec_resp'] . "',
    pre_ingreso.sist = '" . $_POST['sist'] . "',
    pre_ingreso.diast = '" . $_POST['diast'] . "',
    pre_ingreso.temp = '" . $_POST['temp'] . "',
    pre_ingreso.porc_satu = '" . $_POST['porc_satu'] . "',
    pre_ingreso.glu = '" . $_POST['glu'] . "',
    pre_ingreso.rotu = '" . $_POST['rotu'] . "',
    pre_ingreso.pulso_pe = '" . $_POST['pulso_pe'] . "',
    pre_ingreso.mono = '" . $_POST['mono'] . "',
    pre_ingreso.punsion = '" . $_POST['punsion'] . "',
    pre_ingreso.foc = '" . $_POST['foc'] . "',
    pre_ingreso.diapa = '" . $_POST['diapa'] . "',
    pre_ingreso.obs = '" . $_POST['obs'] . "',
    pre_ingreso.obss = '" . $_POST['obss'] . "',
    pre_ingreso.diag = '" . $_POST['diag'] . "',
    pre_ingreso.tto = '" . $_POST['tto'] . "',
    pre_ingreso.indic = '" . $_POST['indic'] . "',
    pre_ingreso.id_usuario  = " . $_POST['idoculto'];
    
    mysqli_query(conexion(), $sql);

    header("Location:ficha.php?idusu=$_POST[idoculto]");
}

function premodificar()
{
    $sql = " UPDATE usuario SET diabetes='" . $_POST['diabetes'] . "',hta='" . $_POST['hta'] . "',otros='" . $_POST['otros'] . "'" . "' WHERE Id= " . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);

    header("Location:../Profesional/administrarpacientes.php");
}


function precancelar()
{

    header("Location:../Profesional/administrarpacientes.php");
}
