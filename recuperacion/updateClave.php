<?php
include('../functions/setup.php');

$Id 		    = $_REQUEST['Id'];
$tokenUser 		= $_REQUEST['tokenUser'];
$pass           = $_REQUEST['pass'];

$updateClave    = ("UPDATE usuario SET  pass='" . md5($pass). "' WHERE Id='".$Id."' AND tokenUser='".$tokenUser."'");

$queryResult    = mysqli_query(conexion(),$updateClave); 

?>

<meta http-equiv="refresh" content="0;url=../login/index.php?email=1"/>