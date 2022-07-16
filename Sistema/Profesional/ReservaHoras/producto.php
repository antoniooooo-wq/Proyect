<?php


include("../../../functions/setup.php");

  $sql = "INSERT INTO atencion SET fecha_atencion='" . $_POST['fecha'] . "',horas_id='" . $_POST['hora'] ."',id_paciente='".$_POST['id_paciente']. "', estado='0'";
  mysqli_query(conexion(), $sql);

  
$consulta           = "SELECT
`horas`.`horadeinicio`,
`usuario`.`nombre`,
`usuario`.`apellido`,
`usuario`.`email`,
`atencion`.`id_paciente`,
`atencion`.`fecha_atencion`
FROM
`usuario`
INNER JOIN `atencion` ON `usuario`.`Id` = `atencion`.`id_paciente`
INNER JOIN `horas` ON `atencion`.`horas_id` = `horas`.`Id`
WHERE
`atencion`.`id_paciente` =".$_POST['id_paciente']." AND `atencion`.`fecha_atencion` = '".$_POST['fecha']."'";

$queryconsulta      = mysqli_query(conexion(), $consulta);
$cantidadConsulta   = mysqli_num_rows($queryconsulta);
$dataConsulta       = mysqli_fetch_array($queryconsulta);



$cuerpo = '
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    -
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
        <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        <tr>
            <td style="padding: 0">
                <img style="padding: 0; display: block" src="https://rpino.cl/Proyect/recuperacion/images/banner2.png" width="100%">
            </td>
        </tr>
        <tr>
            <td style="background-color: #ffffff;">
                <div class="misection">
                    <h2 style="color: red; margin: 0 0 7px">Hola,'.$dataConsulta['nombre'].'  '.$dataConsulta['apellido'].'</h2>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                     <h1>Su Hora ha sido agendada el : '. $_POST['fecha'].' a las '.$dataConsulta['horadeinicio'].', Si desea re-agendar, pongase en contacto con el profesional mediante WhatsApp</h1>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <img style="padding: 0; display: block" src="https://rpino.cl/Proyect/recuperacion/images/work.png" width="100%">
                    <p>&nbsp;</p>
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding: 0;">
                <img style="padding: 0; display: block" src="https://rpino.cl/Proyect/recuperacion/images/footer.jpg" width="100%">
            </td>
        </tr>
    </table>'; 
$cuerpo .= '
      </div>
    </body>
  </html>';

    
    
    
    $destinatario = $dataConsulta['email']; 
    $asunto       = "Confirmación de Hora - Podología Marticorena";
   // $cuerpo="nombre:".$dataConsulta['nombre']." ".$dataConsulta['apellido'];
    //$cuerpo.="<h6>Su Hora ha sido agendada el : ". $_POST['fecha']." a las ".$dataConsulta['horadeinicio'].", Si desea re-agendar, pongase en contacto con el profesional mediante WhatsApp</h6>";
    $headers  = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; ; 
    $headers .= "From: ricardo@rpino.cl"; //Cambiar por nombre de dominio -.-

    if(mail($destinatario,$asunto,$cuerpo,$headers))
    {
        echo "1";
    }

?>