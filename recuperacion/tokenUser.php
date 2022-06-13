<?php
include('../functions/setup.php');
$correo             = trim($_REQUEST['email']); //Quitamos algun espacion en blanco
$consulta           = ("SELECT * FROM usuario WHERE email ='".$correo."'");
$queryconsulta      = mysqli_query($con, $consulta);
$cantidadConsulta   = mysqli_num_rows($queryconsulta);
$dataConsulta       = mysqli_fetch_array($queryconsulta);

if($cantidadConsulta ==0){ 
    header("Location:index.php?errorEmail=1");
    exit();
}else{
    
function generandoTokenClave($length = 20) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklymopkz', ceil($length/strlen($x)) )),1,$length);
}
$miTokenClave     = generandoTokenClave();


//Agregando Token en la tabla BD
$updateClave    = ("UPDATE login SET tokenUser='$miTokenClave' WHERE email='".$correo."' ");
$queryResult    = mysqli_query($con,$updateClave); 


$linkRecuperar      = "https://rpino.cl/recupacion/nuevaClave.php?id=".$dataConsulta['id']."&tokenUser=".$miTokenClave; // id llega nulo  ?id=(¿?)&tokenUser= sjhdjashdjasd

$destinatario = $correo; 
$asunto       = "Recuperando Clave - Podología Marticorena";
$cuerpo = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <title>Recuperar Clave de Usuario</title>';
$cuerpo .= ' 
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .btnlink{
        padding:15px 30px;
        text-align:center;
        background-color:#cecece;
        color: crimson !important;
        font-weight: 600;
        text-decoration: blue;
    }
    .btnlink:hover{
        color: #fff !important;
    }
    .imgBanner{
        width:100%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px;
    }
    .misection{
        color: #34495e;
        margin: 4% 10% 2%;
        text-align: center;
        font-family: sans-serif;
    }
    .mt-5{
        margin-top:50px;
    }
    .mb-5{
        margin-bottom:50px;
    }
    </style>
';

$cuerpo .= '
</head>
<body>
    <div class="contenedor">
    <img class="imgBanner" src=".png">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
            <img style="padding: 0; display: block" src="#.jpg" width="100%">
        </td>
    </tr>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div class="misection">
                <h2 style="color: red; margin: 0 0 7px">Hola, '.$dataConsulta['fullName'].'</h2>
                <p style="margin: 2px; font-size: 18px">entra en el link para que puedas recuperar tu clave </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <a href='.$linkRecuperar.' class="btnlink">Recuperar mi clave</a>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <img style="padding: 0; display: block" src="#" width="100%">
                <p>&nbsp;</p>
            </div>
        </td>
    </tr>
    <tr>
        <td style="padding: 0;">
            <img style="padding: 0; display: block" src="#" width="100%">
        </td>
    </tr>
</table>'; 

$cuerpo .= '
      </div>
    </body>
  </html>';
    
    $headers  = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $headers .= "From: Podología Marticorena \r\n"; 
    $headers .= "Reply-To: "; 
    $headers .= "Return-path:"; 
    $headers .= "Cc:"; 
    $headers .= "Bcc:";
    $headers .= "From: ricardo@rpino.cl"; //Cambiar por nombre de dominio -.-
    
    mail($destinatario,$asunto,$cuerpo,$headers);

    header("Location:../login/index.php");
    
}
?>