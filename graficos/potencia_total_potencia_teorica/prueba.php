<?php //Ejemplo curso PHP aprenderaprogramar.com
date_default_timezone_set('America/Santiago');	

$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$min = date('i');
$seg = date('s');
$hora = ($hora - 1) * -1;
if($hora < 0 ){
	$hora = $hora * -1;
}
//$min = ($min - 60) * -1;
//$seg = ($seg - 60) * -1;

	$horario = $anio.'/'.$mes.'/'.$dia.' '.$hora.':'.$min.':'.$seg;
	echo $horario;
	

?>