<?php

include("../../functions/setup.php");


switch ($_GET['op']) {
   
    
    case 3:eliminar();
    break;
    
}

function eliminar()
{
    $sql="DELETE FROM atencion  WHERE Idatencion=".$_GET['id'];
    mysqli_query(conexion(),$sql);
    header("Location:cancelarhora.php");
}

?>