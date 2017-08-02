<?php
//Base de datos
include "../conect.php";
//servidor,DB,usuario,pasword
//$mysqli = new mysqli('localhost','solar','solar','solar';

//fecha de la exportación
$fecha = date("d/m/Y");

if(isset($_POST['fechainicio']) and isset($_POST['fechafin'])){
	
	$fecha_ini = $_POST['fechainicio'];
	$fecha_fin = $_POST['fechafin'];
	
	
	$fechaini_particiones = explode ("-",$fecha_ini);
	
	
	$fechaini_arreglada = $fechaini_particiones[2] . "/".$fechaini_particiones[1] . "/".$fechaini_particiones[0];
	
	$fechafin_particiones = explode ("-",$fecha_fin);
	$fechafin_arreglada = $fechafin_particiones[2] . "/".$fechafin_particiones[1] . "/".$fechafin_particiones[0];
	
	
	//$sql="SELECT * FROM full WHERE hora BETWEEN '$horainiF' AND '$horafinF'";
	$sql="SELECT * FROM post1 where fecha between '$fechaini_arreglada' and '$fechafin_arreglada'";
	$consult = mysql_query($sql);

//Inicio de la instancia para la exportación en Excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Listado_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

error_reporting(0);

?>
	<table style="text-align:center;">
		<tr>
			<td><b>ID Dato</b></td>
			<td><b>Fecha</b></td>
			<td><b>Hora</b></td>
			<td><b>Vol1</b></td>
			<td><b>Cor1</b></td>
			<td><b>Pot1</b></td>
			
			<td><b>Vol2</b></td>
			<td><b>Cor2</b></td>
			<td><b>Pot2</b></td>
			
			<td><b>Vol3</b></td>
			<td><b>Cor3</b></td>
			<td><b>Pot3</b></td>
			
			<td><b>Cor Tot</b></td>
			<td><b>Pot Tot</b></td>
			
			<td><b>Temp Ps</b></td>
			<td><b>RS</b></td>
			<td><b>TA(Gabinete)</b></td>
			<td><b>HR</b></td>
			<td><b>VR</b></td>
			<td><b>CR</b></td>
			<td><b>VB</b></td>
			<td><b>CB</b></td>
			<td><b>PB</b></td>
			
			<td><b>Energia Parcial Bateria</b></td>
			<td><b>Energia Acumulada Bateria</b></td>
			<td><b>Energia Irradiada Parcial</b></td>
			<td><b>Energia Irradiada Acumulada</b></td>
			<td><b>Energia Captada Parcial</b></td>
			<td><b>Energia Captada Acumulada</b></td>
			<td><b>Pot Parcial Regulador</b></td>
			<td><b>Pot Acumulada Regulador</b></td>
			<td><b>Fecha Completa</b></td>
			<td><b>EnergiaDiariaIrr</b></td>
			<td><b>EnergiaDiariaCap</b></td>
			<td><b>EnergiaDiariaReg</b></td>
			<td><b>UtilizaciónEnergia</b></td>
			
		</tr>
	<?php
	while($resultados = mysql_fetch_array($consult)){
	?>
	
	<tr>
		<td><?php echo utf8_decode($resultados['id_dato']);?></td>
		<td><?php echo utf8_decode($resultados['fecha']);?></td>
		<td><?php echo utf8_decode($resultados['hora']);?></td>	
		<td><?php echo utf8_decode($resultados['volp1']);?></td>		
		<td><?php echo utf8_decode($resultados['corp1']);?></td>		
		<td><?php echo utf8_decode($resultados['potp1']);?></td>
		<td><?php echo utf8_decode($resultados['volp2']);?></td>		
		<td><?php echo utf8_decode($resultados['corp2']);?></td>		
		<td><?php echo utf8_decode($resultados['potp2']);?></td>
		<td><?php echo utf8_decode($resultados['volp3']);?></td>
		<td><?php echo utf8_decode($resultados['corp3']);?></td>		
		<td><?php echo utf8_decode($resultados['potp3']);?></td>		
		<td><?php echo utf8_decode($resultados['corriente_total']);?></td>
		<td><?php echo utf8_decode($resultados['potencia_total']);?></td>
		<td><?php echo utf8_decode($resultados['tempp0']);?></td>
		<td><?php echo utf8_decode($resultados['radiacion_solar']);?></td>		
		<td><?php echo utf8_decode($resultados['temp_ambiente']);?></td>
		<td><?php echo utf8_decode($resultados['humedad_relativa']);?></td>		
		<td><?php echo utf8_decode($resultados['vol_regulador']);?></td>		
		<td><?php echo utf8_decode($resultados['cor_regulador']);?></td>		
		<td><?php echo utf8_decode($resultados['vol_bateria']);?></td>		
		<td><?php echo utf8_decode($resultados['cor_bateria']);?></td>
		<td><?php echo utf8_decode($resultados['potencia_bateria']);?></td>		
		<td><?php echo utf8_decode($resultados['energia_parcial_bateria']);?></td>
		<td><?php echo utf8_decode($resultados['energia_acumulada_bateria']);?></td>
		<td><?php echo utf8_decode($resultados['energia_irradiada_parcial']);?></td>
		<td><?php echo utf8_decode($resultados['energia_irradiada_acumulada']);?></td>
		<td><?php echo utf8_decode($resultados['energia_captada_parcial']);?></td>
		<td><?php echo utf8_decode($resultados['energia_captada_acumulada']);?></td>
		<td><?php echo utf8_decode($resultados['pot_parcial_regulador']);?></td>
		<td><?php echo utf8_decode($resultados['pot_acumulada_regulador']);?></td>
		<td><?php echo utf8_decode($resultados['fecha_larga']);?></td>
		<td><?php echo utf8_decode($resultados['EnergiaDiaria_Irr']);?></td>
		<td><?php echo utf8_decode($resultados['EnergiaDiaria_Cap']);?></td>
		<td><?php echo utf8_decode($resultados['EnergiaDiaria_Reg']);?></td>
		<td><?php echo utf8_decode($resultados['utilizacion_energia']);?></td>
	</tr>
	<?php 
	}
	}
	?>
</table>