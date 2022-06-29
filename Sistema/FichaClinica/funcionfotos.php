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

function ingresar()
{
    
    $sql2 = "SELECT Id as id2 FROM usuario WHERE Id= " . $_POST['idoculto'] ;

    $result=mysqli_query(conexion(),$sql2);
    $datos=mysqli_fetch_array($result);
    $cont=1;
    foreach ($_FILES['imagen']['tmp_name'] as $key =>$tmp_name){
    
        $filename=$datos['id2'].'_'.$cont.'.png';
        //$filename=$_FILES['imagen']['name'][$key];
        //$filename=$datos['id2'].'.png';
        $temporal=$_FILES['imagen']['tmp_name'][$key];
        $directorio ="../assets/images/profiles";
    
        if(!file_exists($directorio)){
            mkdir($directorio, 0777);
        }
        $ruta= $directorio.'/'.$filename;
        move_uploaded_file($temporal,$ruta);
    
        $sql2="INSERT INTO foto SET id_paciente=".$datos['id2'].",imagen='".$filename."',principal=0, estado=1";
        $result=mysqli_query(conexion(),$sql2);
        
        $cont++;
    }

    header("Location:ficha.php");
}

function modificar()
{
    $sql = " UPDATE usuario SET run='" . $_POST['Rut'] . "',nombre='" . $_POST['name'] . "',apellido='" . $_POST['app'] . "',
    fecha_nac='" . $_POST['fechanacimiento'] . "',email='" . $_POST['correo'] . "',sexo='" . $_POST['sexo'] . "',
    telefono='" . $_POST['telefono'] . "',estado='" . $_POST['frmestado'] . "',id_tipo_usuario= 3  WHERE Id= " . $_POST['idoculto'];
    

    mysqli_query(conexion(), $sql);

    $sql2 = "SELECT Id as id2 FROM usuario WHERE Id= " . $_POST['idoculto'] ;

    $sql3 = "SELECT COUNT(`images_tabla`.`id_paciente`)
        AS cuantos
        FROM
    `images_tabla` WHERE id_paciente=" . $_SESSION['usuarioid'];
    $resultf = mysqli_query(conexion(), $sql3);
    $datosf = mysqli_fetch_array($resultf);

    $result = mysqli_query(conexion(), $sql2);
    $cont = mysqli_num_rows($result);
    $datos = mysqli_fetch_array($result);

    $contf = $datosf['cuantos'];

    foreach ($_FILES['imagen']['tmp_name'] as $key => $tmp_name) {
        $contf++;
        $filename = $datos['id2'] . '.png';
        $temporal = $_FILES['imagen']['tmp_name'][$key];
        $directorio = "../assets/images/profiles";

        if (!file_exists($directorio)) {
            mkdir($directorio, 0777);
        }
        $ruta = $directorio . '/' . $filename;
        move_uploaded_file($temporal, $ruta);

        $sql4 = "DELETE FROM images_tabla WHERE id_paciente=" . $datos['id2'] . "";

        $result = mysqli_query(conexion(), $sql4);
        
        $sql2 = "INSERT INTO images_tabla SET id_paciente=" . $datos['id2'] . ",imagen='" . $filename . "',principal=1, estado=1";

        $result = mysqli_query(conexion(), $sql2);
    }

    header("Location:administrarpacientes.php");
}

function eliminar()
{

    $sql = "DELETE FROM usuario WHERE Id=" . $_POST['idoculto'];
    
    mysqli_query(conexion(), $sql);

    $sql4 = "DELETE FROM images_tabla WHERE id_paciente=" . $_POST['idoculto'];

    $result = mysqli_query(conexion(), $sql4);
    

    header("Location:administrarpacientes.php");
}

function cancelar()
{
    header("Location:profesionalprincipal.php");      
}

?>