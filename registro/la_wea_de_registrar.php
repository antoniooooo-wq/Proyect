<?php

   include("../functions/setup.php");

   $sql = "INSERT INTO usuario SET run='" . $_POST['rut'] . "',
    nombre='" . $_POST['nombre'] . "',
    apellido='" . $_POST['apellido'] . "',
    pass='" . md5($_POST['pass']) . "',
    sexo='" . $_POST['sexo'] . "',
    direccion='" . $_POST['direccion'] . "',
    fecha_nac='" . $_POST['fecha_nac'] . "',
    telefono='" . $_POST['telefono'] . "',
    email='" . $_POST['correo'] . "',
    estado=1,
    id_tipo_usuario='3'";

   mysqli_query(conexion(), $sql);

   header("Location:../../Proyect/login/index.php");

?>