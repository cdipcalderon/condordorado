<title>CDI | Pruebas</title>
<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
<?php 
//<meta http-equiv="refresh" content="0.1">
echo getStamp();

function getStamp(){
  $now = (string)microtime();
  $now = explode(' ', $now);
  $mm = explode('.', $now[0]);
  $mm = $mm[1];
  $now = $now[1];
  $segundos = $now % 60;
  $segundos = $segundos < 10 ? "$segundos" : $segundos;
  return strval(date("Y/m/d H:i:",mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"))) . "$segundos $mm");
}

clearstatcache();
flush();

date_default_timezone_set('America/Santiago');
setlocale(LC_ALL,"es_ES");

$tabla = 'solo_medida_calculos';
$fecha = date('Y-m-j'); 
$hora = date('H:i:s');
$fecha_larga = date('Y/m/j H:i:s');

$servername = "localhost";
$username = "dba_cdiprueba";
$password = "(insert.DB.2017)";
$dbname = "dba_optimizado1";

$conn0 = new mysqli($servername, $username, $password, $dbname);
$conn_reset = new mysqli($servername, $username, $password, $dbname);


if(
isset($_GET['tp0']) or isset($_GET['v1']) or isset($_GET['c1']) or isset($_GET['v2']) or isset($_GET['c2']) or isset($_GET['v3']) or isset($_GET['c3']) or 
isset($_GET['vr']) or isset($_GET['cr']) or isset($_GET['vb']) or isset($_GET['cb']) or isset($_GET['Irms']) 
){
	{//Variables 
	$tiempo = 3/3600;
	$area_pan = 9.7416;
	$efi_pan = 0.16;
	$resultvalvinver = 220;
	}
	{//get variables
	$tp = $_GET['tp0'];
    $v1 = $_GET['v1'];
    $c1 = $_GET['c1'];
    $v2 = $_GET['v2'];
    $c2 = $_GET['c2'];
	$v3 = $_GET['v3'];
    $c3 = $_GET['c3'];
    $rs = $_GET['rs'];
    $vr = $_GET['vr'];
    $cr = $_GET['cr'];
    $vb = $_GET['vb'];
    $cb = $_GET['cb'];
    $irms = $_GET['Irms'];
	}
	{//temperatura
	$min_temp = -11;
	$max_temp = 51;
	if(is_numeric($tp)){
		if($tp > $min_temp and $tp < $max_temp){
			$resultvaltp = number_format($tp, 0, '.', '');
		}else{
			$resultvaltp = 0;
		}
    }else{
        $resultvaltp = 0;
    }
	}
	/**************************************************************/
	{//voltaje panel
	$min_vol_p = -0.1;
	$max_vol_p = 76;
	if(is_numeric($v1)){
		if($v1 > $min_vol_p and $v1 < $max_vol_p){
			$resultvalv1 = number_format($v1, 2, '.', '');
		}else{
			$resultvalv1 = 0;
		}
    }else{
        $resultvalv1 = 0;
	}
	if(is_numeric($v2)){
		if($v2 > $min_vol_p and $v2 < $max_vol_p){
			$resultvalv2 = number_format($v2, 2, '.', '');
		}else{
			$resultvalv2 = 0;
		}
    }else{
        $resultvalv2 = 0;
	}
	if(is_numeric($v3)){
		if($v3 > $min_vol_p and $v3 < $max_vol_p){
			$resultvalv3 = number_format($v3, 2, '.', '');
		}else{
			$resultvalv3 = 0;
		}
    }else{
        $resultvalv3 = 0;
	}
	}
	/**************************************************************/
	{//corriente panel
	$min_cor_p = -0.1;
	$max_cor_p = 10;
	if(is_numeric($c1)){
		if($c1 > $min_cor_p and $c1 < $max_cor_p){
			$resultvalc1 = number_format($c1, 2, '.', '');
		}else{
			$resultvalc1 = 0;
		}
    }else{
        $resultvalc1 = 0;
    }
	if(is_numeric($c2)){
		if($c2 > $min_cor_p and $c2 < $max_cor_p){
			$resultvalc2 = number_format($c2, 2, '.', '');
		}else{
			$resultvalc2 = 0;
		}
    }else{
        $resultvalc2 = 0;
    }
	if(is_numeric($c3)){
		if($c3 > $min_cor_p and $c3 < $max_cor_p){
			$resultvalc3 = number_format($c3, 2, '.', '');
		}else{
			$resultvalc3 = 0;
		}
    }else{
        $resultvalc3 = 0;
    }
	}
	/**************************************************************/
	{//radiacion solar
	$min_rs = 5;
	$max_rs = 1101;
	if(is_numeric($rs)){
		if($rs > $min_rs and $rs < $max_rs){
			$resultvalrs = number_format($rs, 0, '.', '');
		}else{
			$resultvalrs = 0;
		}
    }else{
        $resultvalrs = 0;
    }
	}
	/**************************************************************/
	{//Voltaje regulador
	$min_vr = -0.1;
	$max_vr = 33;
	if(is_numeric($vr)){
		if($vr > $min_vr and $vr < $max_vr){
			$resultvalvr = number_format($vr, 2, '.', '');
		}else{
			$resultvalvr = 0;
		}
    }else{
        $resultvalvr = 0;
    }
	}
	/**************************************************************/
	{//Corriente regulador
	$min_cr = -0.1;
	$max_cr = 51;
	if(is_numeric($cr)){
		if($cr > $min_cr and $cr < $max_cr){
			$resultvalcr = number_format($cr, 2, '.', '');
		}else{
			$resultvalcr = 0;
		}
    }else{
        $resultvalcr = 0;
    }
    }
	/**************************************************************/
	{//Voltaje Bateria
	$min_vb = 21;
	$max_vb = 31;
	if(is_numeric($vb)){
		if($vb > $min_vb and $vb < $max_vb){
			$resultvalvb = number_format($vb, 2, '.', '');
		}else{
			$resultvalvb = 0;
		}
    }else{
        $resultvalvb = 0;
    }
    }
	/**************************************************************/
	{//Corriente Bateria
	$min_cb = -0.1;
	$max_cb = 91;
	if(is_numeric($cb)){
		if($cb > $min_cb and $cb < $max_cb){
			$resultvalcb = number_format($cb, 2, '.', '');
		}else{
			$resultvalcb = 0;
		}
    }else{
        $resultvalcb = 0;
    }
    }
	/**************************************************************/
	{//Corriente Inversor
	$min_irms = -0.1;
	$max_irms = 10;
	if(is_numeric($irms)){
		if($irms > $min_irms and $irms < $max_irms){
			$resultvalirms = number_format($irms, 2, '.', '');
		}else{
			$resultvalirms = 0;
		}
    }else{
        $resultvalirms = 0;
    }
	}

	{// Calculos
	//potencias:
	$potp1 = $resultvalv1 * $resultvalc1;
	$potp2 = $resultvalv2 * $resultvalc2;
	$potp3 = $resultvalv3 * $resultvalc3;
	$potencia_bateria = $resultvalcb * $resultvalvb;
	$potreg = $resultvalcr * $resultvalvr;
	$potencia_inversor = $resultvalirms * $resultvalvinver;
	$potp1 = number_format($potp1, 2, '.', '');
	$potp2 = number_format($potp2, 2, '.', '');
	$potp3 = number_format($potp3, 2, '.', '');
	$potencia_bateria = number_format($potencia_bateria, 2, '.', '');
	$potreg = number_format($potreg, 2, '.', '');
	//totales:
	$cortot = $resultvalc1+$resultvalc2+$resultvalc3;
	$pottot = $potp1+$potp2+$potp3;
	$cortot = number_format($cortot, 2, '.', '');
	$pottot = number_format($pottot, 2, '.', '');
	//teorico:
	$valor = $resultvalrs * $efi_pan * $area_pan;
	$pottotteo = number_format($valor, 2, '.', '');
	
	{//Energias 
	$energia_parcial_bateria = $potencia_bateria * $tiempo; //wH
	$energia_parcial_irradiada = $rs * $tiempo * $area_pan; //Energia en wH	
	$energia_parcial_captada = ($potp1+$potp2+$potp3) * $tiempo;
	$energia_parcial_regulador = $potreg * $tiempo; //wH
	$energia_parcial_inversor = ($resultvalirms * $resultvalvinver) * $tiempo; //wH	
	$energia_parcial_bateria = number_format($energia_parcial_bateria, 2, '.', '');
	$energia_parcial_irradiada = number_format($energia_parcial_irradiada, 2, '.', '');
	$energia_parcial_captada = number_format($energia_parcial_captada, 2, '.', '');
	$energia_parcial_regulador = number_format($energia_parcial_regulador, 2, '.', '');
	$energia_parcial_inversor = number_format($energia_parcial_inversor, 2, '.', '');
	}	
		
	}
}else{
	{//variables null -> 0
    $resultvaltp = "0";
    $resultvalv1 = "0";
    $resultvalc1 = "0";
    $resultvalv2 = "0";
    $resultvalc2 = "0";
	$resultvalv3 = "0";
    $resultvalc3 = "0";
    $resultvalrs = "0";
    $resultvalta = "0";
    $resultvalhr = "0";
	$resultvalvr = "0";
    $resultvalcr = "0";
    $resultvalvb = "0";
    $resultvalcb = "0";
    $resultvalirms = "0";
	}
	{//alerta aviso
	$registro = date("Y/m/j H:i:s");
	//$to = "condor.dorado.informatico@gmail.com";
	$to2 = "pabl0koman13@gmail.com";
	$subject = "AlertaCDI";
	$txt = "Se ha detecctado <b>inactividad</b> desde las $registro. en direccion Post1.";
	$headers = "From: CDI Alertas" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to2,$subject,$txt,$headers);
	/*
	mail($to2,$subject,$txt,$headers);
	*/
	}
}

	
	if ($conn0->connect_error) {
		die("Connection failed: " . $conn0->connect_error);
	}
	$sql = "INSERT INTO $tabla (id_medida, fecha, hora, volp1, corp1, volp2, corp2, volp3, corp3,  
	tempp0, radiacion_solar, vol_regulador, cor_regulador, 
	vol_bateria, cor_bateria, cor_inversor, fecha_larga,
	potp1, potp2, potp3, corriente_total, potencia_total, potencia_total_teorica,
	potencia_bateria, energia_parcial_bateria, energia_parcial_irradiada, energia_parcial_captada,
	potencia_parcial_regulador, potencia_inversor)
	VALUES (null,'$fecha','$hora','$resultvalv1','$resultvalc1','$resultvalv2','$resultvalc2','$resultvalv3','$resultvalc3',
	'$resultvaltp','$resultvalrs','$resultvalvr','$resultvalcr',
	'$resultvalvb','$resultvalcb','$resultvalirms','$fecha_larga',
	'$potp1','$potp2','$potp3','$cortot','$pottot','$pottotteo',
	'$potencia_bateria','$energia_parcial_bateria','$energia_parcial_irradiada','$energia_parcial_captada',
	'$energia_parcial_regulador','$potencia_inversor')";
	
	if ($conn0->query($sql) === TRUE) {
		echo "\r\n Nuevo registro creado a las ".date('j/m/Y H:i:s')." en ". $tabla." \r\n <br>";
		echo "Variables:\r\n <br>";
		echo "$fecha|$hora|$resultvalv1|
		$resultvalc1|$resultvalv2|$resultvalc2|$resultvalv3|$resultvalc3|
	$resultvaltp|$resultvalrs|$resultvalvr|$resultvalcr|
	$resultvalvb|$resultvalcb|$resultvalirms|$fecha_larga|\r\n <br>
	$potp1|$potp2|$potp3|$cortot|$pottot|$pottotteo|
	$potencia_bateria|$energia_parcial_bateria|$energia_parcial_irradiada|
	$energia_parcial_captada|
	$energia_parcial_regulador|$potencia_inversor \r\n <br>";
	echo "user: $username \r\n  <br>dbname: $dbname \r\n";
	
		//echo "<script> proceso(); </script>";
		
		//echo insert_acumulados();
		
	} else {
		echo "Error: " . $sql . "\r\n<br>" . $conn0->error;
	}	
	$conn0->close();
	clearstatcache();
	flush();
	//echo date('Y/m/j H:i:s');
	echo getStamp();
?>