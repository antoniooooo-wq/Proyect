<?php
include("../functions/setup.php");

session_start();

$sql="
SELECT
  usuario.*,
  tipo_usuario.Id AS Id1,
  tipo_usuario.nombre_tipo_usuario
FROM
  usuario
  INNER JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.Id
WHERE
  usuario.pass = '".md5($_POST['frmclave'])."' AND usuario.run = '".$_POST['frmusuario']."'AND usuario.estado=1";



$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);


if($cont!=0)
{
    $_SESSION['usuario']=$datos['nombre'];

    $_SESSION['usuarioap']=$datos['apellido'];

    $_SESSION['usuarioid']=$datos['Id'];

    $_SESSION['tipo']=$datos['id_tipo_usuario'];

    $_SESSION['usuariorun']=$datos['run'];

    $_SESSION['usuarioemail']=$datos['email'];

    $_SESSION['usuariodire']=$datos['direccion'];

    $_SESSION['usuariotel']=$datos['telefono'];

    $_SESSION['usuariopass']=$datos['pass'];

    
    header('Location:../Sistema/principaal.php');

}else{
    header ('Location:penka.php');
}

?>