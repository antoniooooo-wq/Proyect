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
    $sql = " UPDATE usuario SET diabetes='" . $_POST['diabetes'] . "',hta='" . $_POST['hta'] . "',
    otros='" . $_POST['otros'] . "' WHERE Id= " . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);
    header("Location:ficha.php?idusu=$_POST[idoculto]");
}

function modificar()
{
    $sql = " UPDATE usuario SET diabetes='" . $_POST['diabetes'] . "',hta='" . $_POST['hta'] . "',
    otros='" . $_POST['otros'] . "'" . "' WHERE Id= " . $_POST['idoculto'];
    mysqli_query(conexion(), $sql);

    header("Location:../Profesional/administrarpacientes.php");
}


function cancelar()
{

    header("Location:../Profesional/administrarpacientes.php");
}

function preingresar()
{
    $sql2 = "SELECT
    `atencion`.`Idatencion`
  FROM
    `atencion`
    WHERE
    `atencion`.`Idatencion` = " . $_POST['idoculto'];

    $sql = "UPDATE atencion SET
    `atencion`.`frec_card`= '" . $_POST['frec_card'] . "',
    `atencion`.`frec_resp` = '" . $_POST['frec_resp'] . "',
    `atencion`.`sist` = '" . $_POST['sist'] . "',
    `atencion`.`diast` = '" . $_POST['diast'] . "',
    `atencion`.`temp` = '" . $_POST['temp'] . "',
    `atencion`.`porc_satu` = '" . $_POST['porc_satu'] . "',
    `atencion`.`glu` = '" . $_POST['glu'] . "',
    `atencion`.`rotu` = '" . $_POST['rotu'] . "',
    `atencion`.`pulso_pe` = '" . $_POST['pulso_pe'] . "',
    `atencion`.`mono` = '" . $_POST['mono'] . "',
    `atencion`.`punsion` = '" . $_POST['punsion'] . "',
    `atencion`.`foc` = '" . $_POST['foc'] . "',
    `atencion`.`diapa` = '" . $_POST['diapa'] . "',
    `atencion`.`obs` = '" . $_POST['obs'] . "',
    `atencion`.`obss` = '" . $_POST['obss'] . "',
    `atencion`.`diag` = '" . $_POST['diag'] . "',
    `atencion`.`tto` = '" . $_POST['tto'] . "',
    `atencion`.`valor` = '" . $_POST['valor'] . "',
    `atencion`.`indic` = '" . $_POST['indic'] . "',
    `atencion`.`estado` = '1'
    WHERE 
    Idatencion=" . $_POST['idatencion'];
    
    mysqli_query(conexion(), $sql);
    header("Location:vistaficha.php?idusu=$_POST[idoculto]");
}

function premodificar()
{
    $sql2 = "SELECT
    `atencion`.`Idatencion`
  FROM
    `atencion`
    WHERE
    `atencion`.`Idatencion` = " . $_POST['idoculto'];

    $sql = "UPDATE atencion SET
    `atencion`.`frec_card`= '" . $_POST['frec_card'] . "',
    `atencion`.`frec_resp` = '" . $_POST['frec_resp'] . "',
    `atencion`.`sist` = '" . $_POST['sist'] . "',
    `atencion`.`diast` = '" . $_POST['diast'] . "',
    `atencion`.`temp` = '" . $_POST['temp'] . "',
    `atencion`.`porc_satu` = '" . $_POST['porc_satu'] . "',
    `atencion`.`glu` = '" . $_POST['glu'] . "',
    `atencion`.`rotu` = '" . $_POST['rotu'] . "',
    `atencion`.`pulso_pe` = '" . $_POST['pulso_pe'] . "',
    `atencion`.`mono` = '" . $_POST['mono'] . "',
    `atencion`.`punsion` = '" . $_POST['punsion'] . "',
    `atencion`.`foc` = '" . $_POST['foc'] . "',
    `atencion`.`diapa` = '" . $_POST['diapa'] . "',
    `atencion`.`obs` = '" . $_POST['obs'] . "',
    `atencion`.`obss` = '" . $_POST['obss'] . "',
    `atencion`.`diag` = '" . $_POST['diag'] . "',
    `atencion`.`tto` = '" . $_POST['tto'] . "',
    `atencion`.`valor` = '" . $_POST['valor'] . "',
    `atencion`.`indic` = '" . $_POST['indic'] . "'
    WHERE 
    Idatencion=" . $_POST['idatencion'];
  
    mysqli_query(conexion(), $sql);
    header("Location:vistaficha.php?idusu=$_POST[idoculto]");
}


function precancelar()
{

    header("Location:vistaficha.php?idusu=$_POST[idoculto]");
}
