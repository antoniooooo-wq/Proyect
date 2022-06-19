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
    $sql = " INSERT INTO tratamiento SET frec_card='" . $_POST['frec_card'] . "',frec_resp='" . $_POST['frec_resp'] . "',sist='" . $_POST['sist'] . "',diast='" . $_POST['diast'] . "',temp='" . $_POST['temp'] . "',porc_satu='" . $_POST['porc_satu'] . "',glu='" . $_POST['glu'] . "',rotu='" . $_POST['rotu'] . "',pulso_pe='" . $_POST['pulso_pe'] . "',mono='" . $_POST['mono'] . "',punsion='" . $_POST['punsion'] . "',foc='" . $_POST['foc'] . "',diapa='" . $_POST['diapa'] . "',obs='" . $_POST['obs'] . "',obss='" . $_POST['obss'] . "',diag='" . $_POST['diag'] . "',tto='" . $_POST['tto'] . "',indic='" . $_POST['indic'] . "'" . "'   WHERE id_usuario='" . $_POST['idoculto'];

    mysqli_query(conexion(), $sql);
    header("Location:ficha.php?idusu=$_POST[idoculto]");
    //OJitoooooo
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