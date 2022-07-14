function verfecha($vfecha)
{
  $fch = explode("-", $vfecha);
  $tfecha = $fch[2] . ' - ' . $fch[1] . '-' . $fch[0];
  return $tfecha;
}


function calcular_edad($fecha)
{
  $dias = explode("-", $fecha, 3);
  $dias = mktime(0, 0, 0, $dias[1], $dias[0], $dias[2]);
  $edad = (int)((time() - $dias) / 31556926);
  return $edad;
}