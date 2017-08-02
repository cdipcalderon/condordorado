<?php
//error_reporting(0);
include "../includes/conexion.php";
$tabla_principal = 'last_day';

error_reporting(E_ALL);
date_default_timezone_set('America/Santiago');
setlocale(LC_ALL,"es_ES");


if(isset ($_GET["cache"])){

$cache = $_GET["cache"];

if($cache == 1){
	echo cache();
}else{
	echo "";
}
}

if(isset ($_POST["plistar"])){

$plistar = $_POST["plistar"];

if($plistar == "pruebas_varias"){
	echo pruebas_varias();
}else{
	echo "";
}
if($plistar == "listado"){
	echo listar_detalle();
}else{
	echo "";
}
if($plistar == "corriente_total"){
	echo corriente_total();
}else{
	echo "";
}
if($plistar == "potencia_total"){
	echo potencia_total();
}else{
	echo "";
}
if($plistar == "EnergiaDiaria_Irradiadia"){
	echo EnergiaDiaria_Irradiadia();
}else{
	echo "";
}
if($plistar == "EnergiaDiaria_Captada"){
	echo EnergiaDiaria_Captada();
}else{
	echo "";
}
if($plistar == "EnergiaDiaria_Regulador"){
	echo EnergiaDiaria_Regulador();
}else{
	echo "";
}
if($plistar == "utilizacion_energia"){
	echo utilizacion_energia();
}else{
	echo "";
}if($plistar == "potencia_bateria"){
	echo potencia_bateria();
}else{
	echo "";
}
if($plistar == "estado_servicio"){
	echo estado_servicio();
}else{
	echo "";
}
if($plistar == "potencia_total_teorica"){
	echo potencia_total_teorica();
}else{
	echo "";
}
if($plistar == "enviado"){
	echo btnGeneraExcel();
}else{
	echo "";
}
if($plistar == "consulta_inicial"){
	echo consulta_inicial();
}else{
	echo "";
}

if($plistar == "consulta_final"){
	echo consulta_final($consulta_final);
}else{
	echo "";
}
}

if(!empty($_GET['indicador_eficiencia'])){
	$indicador_eficiencia = $_GET['indicador_eficiencia'];
	//echo $indicador_eficiencia;
	echo indicador_eficiencia();
}

	function pruebas_varias(){
		$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U",
		"¿",":",";","*","!","#","$","%","&","/","(",")","=","?","¡","´","","@","´´",
		"tp0","v1","c1","v2","c2","v3","c3","rs","ta","hr","vr","cr","vb","cb","null");
		$variable = "";
		$onlyconsonants = str_replace($vowels, "",$variable);
		if($onlyconsonants == ""){
			echo "";
		}else{
			echo $onlyconsonants;
		}			
	}
	function listar_detalle(){
		date_default_timezone_set('America/Santiago');
		$arreglo_simbolos = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U",
		"¿",":",";","*","!","#","$","%","&","/","(",")","=","?","¡","´","","@","´´",
		"tp0","v1","c1","v2","c2","v3","c3","rs","ta","hr","vr","cr","vb","cb",
		"b","c","d","f","g","h","i","j","k","l","m","n","ñ","p","q","r","s","t",
		"v","w","x","y","z","B","C","D","F","G","H","J","K","L","M","N","Ñ","P",
		"Q","R","S","T","V","W","X","Y","Z","|","°","¬","!","#","$","%","&","/",
		"(",")","=","?","'","\'","¿","¡","´´","´","+","*","~","{","[","^","^^",
		"}","]","``","`",";",":","_","@","<",">","¡","¢","£","¤","¥", "¦","§","¨",
		"©", "ª","«","®","¯","°","±","²","³", "´","µ","¶","·","¸","¹","º","»","¼","½","¾");
				
		{//rangos de valores
		$cero = 0;
		$min_vb = 22;
		$max_vp =76;
		$max_ap = 10;
		$max_potp = 520;
		$max_efip = 30;
		$max_temp = 50;
		$min_temp = -10;
		$max_rs = 1500;
		$max_hr = 100;
		$max_vr = 32;
		$max_ar = 70;
		$max_vb = 30;
		$max_ab = 90;
		$cien = 100;
		$area_pan = 9.7416;
		$efi_1="";
		$efi_2="";
		$efi_3="";
		
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		}
		
		{//conexion
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by id_last_day DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$ndatos = $resultado['id_last_day'];
		}
		}
		
		echo "<table class='table' style='color:#333;margin-bottom:0;'>
		<thead> 
		<tr>
		<b>Numero de Registros: $ndatos</b>
		</tr>
		<tr> 
			<th class='inicial2'>Fecha</th>
			<th class='inicial3'>Horario</th>
			<th class='inicial4' style='display: table-cell;'>Datos</th>
		</tr>	
		</thead>
		<tbody>
		";
		$result->free();
		$conn->close();
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultados = $result->fetch_array(MYSQLI_ASSOC)){
		?>
		<tr style="overflow-x:scroll;border: #ddd solid 1px;border-radius: 14px;color:#333;">
			<td class="inicial2 display_table_cell" style="width:90px;">
				<span class="inicial2 ocultar_iddatoTDS">
				<?php echo utf8_decode($resultados['fecha']);?>
				</span>
			</td>
			<td class="inicial3 display_table_cell" >
				<span class="inicial3 ocultar_iddatoTDS" >
				<?php echo utf8_decode($resultados['hora']);?>
				</span>
			</td>
			<td class="inicial4" style="overflow-x:scroll;">				
				<table class="panel panel-default borde_bot" style="color:#333;width:100%;text-align:center;">
					<thead class="panel-heading" style="vertical-align: text-top">
						<tr>
						<td>
							<b>	Medidas	</b>
						</td>
						<td>
							<b> Panel:1	</b>
						</td>
						<td>
							<b> Panel:2	</b>
						</td>
						<td>
							<b> Panel:3	</b>
						</td>
						<td>
							<b>Rangos</b>
						</td>
						<td>
							<b>Un. Medida</b>
						</td>
					</tr>	
					</thead>
					<tbody class="panel-body" style="border: #ddd solid 1px;">
						<tr>
						<td class="width_100" style="align-content: center;text-align: center;margin: 0;padding: 0;">
							<table>
								<thead>
									<tr><th><b class="ajuste_txt">Voltaje </b><hr style="margin:0;"></th></tr>
									<tr><th><b class="ajuste_txt">Corriente <hr style="margin:0;"></b></th></tr>
									<tr><th><b class="ajuste_txt">Potencia <hr style="margin:0;"></b></th></tr>
									<tr><th><b class="ajuste_txt">Eficiencia <hr style="margin:0;"></b></th></tr>
								</thead>
							</table>
						</td>
						<td class="width_100" style="align-content: center;text-align: center;margin: 0;padding: 0;">
							<table style="color:#333;width:100%;text-align:center;">
								<tbody style="color:#333;width:100%;text-align:center;">
									<tr><th>
									<?php
									//voltaje 1
									$num_volp1 = $resultados['volp1'];
									$v1M = str_replace($arreglo_simbolos, "",$num_volp1);
									
									if($v1M < $cero ){
										echo "<i class='btn-warning ajuste_txt txt_center'>".$v1M."</i>";
									}else if($v1M > 76 ){
										echo "<i class='btn-danger ajuste_txt txt_center' style='border: #ddd solid 1px;' >".$v1M."</i>";
									}else if($v1M > $cero || $v1M < 76 ){
										echo "<i class='btn-info ajuste_txt txt_center'>".$v1M."</i>";
										
									}
									?>
									<hr style="margin:0;">
									</th></tr>
									<tr><th>
									<?php
									$num_corp1 = $resultados['corp1'];
									$c1M = str_replace($arreglo_simbolos, "",$num_corp1);
									//corriente 1
									//$c1M = $resultados['corp1'];
									if($c1M < $cero ){
										echo "<i class='btn-warning ajuste_txt'>".$c1M."</i>";
									}else if($c1M > 10 ){
										echo "<i class='btn-danger ajuste_txt'>".$c1M."</i>";
									}else if($c1M > $cero || $c1M < 10 ){
										echo "<i class='btn-info ajuste_txt'>".$c1M."</i>";
									}
									?>
									<hr style="margin:0;"></th></tr>
									<tr><th>
									<?php
									//Potencia 1
									$num_potp1 = $resultados['potp1'];
									$set_pt1 = str_replace($arreglo_simbolos, "",$num_potp1);
									$p1M = number_format($set_pt1, 2, '.', '');
									if($p1M < $cero ){
										echo "<i class='btn-warning ajuste_txt'>".$p1M."</i>";
									}else if($p1M > $max_potp ){
										echo "<i class='btn-danger ajuste_txt'>".$p1M."</i>";
									}else if($p1M > $cero || $p1M < $max_potp ){
										echo "<i class='btn-info ajuste_txt'>".$p1M."</i>";
									}
									?>
									<hr style="margin:0;"></th></tr>
									<tr><th>
									<?php
									//eficiencia p1
									$potp1 = $resultados['potp1'];
									$rs = $resultados['radiacion_solar'];
									if($potp1 > $cero and $potp1 < 1040 ){
										//$potp1A = Getfloat($potp1);
										$potp1A = str_replace($arreglo_simbolos, "",$potp1);
									}else{
										$potp1A = $cero;
									}									
									if($rs < 6 ){
										$rs = 0;
									}else if($rs > 1001){
										$rs = 1000;
									}else if($rs > 6 and $rs < 1000){
										$valor_potp1 = $potp1A / ($rs * ($area_pan/3));
										$valor_potp1A = $valor_potp1 * $cien;										
										if($valor_potp1A < 1 and $valor_potp1A > 20 ){
											$efi_1 = $cero;
										}else{
											$efi_1 = number_format($valor_potp1A, 2, '.', '');	
										}
									}
									//echo "<i class='btn-info ajuste_txt'> 0 </i>";
									
									
									if($efi_1 < 1 ){
										echo "<i class='btn-warning ajuste_txt'>".$cero."</i>";
									}else if($efi_1 > 30 ){
										echo "<i class='btn-danger ajuste_txt'> 31 </i>";
									}else if($efi_1 > $cero and $efi_1 < 17 ){					
										echo "<i class='btn-info ajuste_txt'>".$efi_1."</i>";
									}else{
										echo "<i class='btn-info ajuste_txt'>".$efi_1."</i>";										
									}
									
									?>
									<hr style="margin:0;"></th></tr>
								</tbody>
							</table>
						</td>
						<td class="width_100">
						<table style="color:#333;width:100%;text-align:center;">
							<tbody style="color:#333;width:100%;text-align:center;">
							<tr><th>							
							<?php
							//Voltaje 2
							$num_volp2 = $resultados['volp2'];
							$v2M = str_replace($arreglo_simbolos, "",$num_volp2);
							if($v2M < $cero ){
								echo "<i class='btn-warning ajuste_txt'>".$v2M."</i>";
							}else if($v2M > $max_vp ){
								echo "<i class='btn-danger ajuste_txt'>".$v2M."</i>";							
							}else if($v2M > $cero || $v2M < $max_vp ){							
								echo "<i class='btn-info ajuste_txt'>".$v2M."</i>";
							}
							?>
							<hr style="margin:0;"></th></tr>
							<tr><th>
							<?php
							//Corriente 2
							$num_corp2 = $resultados['corp2'];
							$c2M = str_replace($arreglo_simbolos, "",$num_corp2);
							if($c2M < $cero ){
								echo "<i class='btn-warning ajuste_txt'>".$c2M."</i>";
							}else if($c2M > $max_ap ){
								echo "<i class='btn-danger ajuste_txt'>".$c2M."</i>";							
							}else if($c2M > $cero || $c2M < $max_ap ){							
								echo "<i class='btn-info ajuste_txt'>".$c2M."</i>";
							}
							?>
							<hr style="margin:0;"></th></tr>
							<tr><th>
							<?php
							//Potencia 2
							$num_potp2 = $resultados['potp2'];
							$set_pt2 = str_replace($arreglo_simbolos, "",$num_potp2);
							$p2M = number_format($set_pt2, 2, '.', '');
							if($p2M < $cero ){
								echo "<i class='btn-warning ajuste_txt'>".$p2M."</i>";
							}else if($p2M > $max_potp ){
								echo "<i class='btn-danger ajuste_txt'>".$p2M."</i>";							
							}else if($p2M > $cero || $p2M < $max_potp ){							
								echo "<i class='btn-info ajuste_txt'>".$p2M."</i>";
							}
							?>
							<hr style="margin:0;"></th></tr>
							<tr><th>
							<?php
							//eficiencia p2
									$potp2 = $resultados['potp2'];
									$rs = $resultados['radiacion_solar'];
									if($potp2 > $cero and $potp2 < 1040 ){
										$potp2A = Getfloat($potp2);
									}else{
										$potp2A = $cero;
									}									
									if($rs < 6 ){
										$rs = 0;
									}else if($rs > 1001){
										$rs = 1000;
									}else if($rs > 6 and $rs < 1000){
										$valor_potp2 = $potp2A / ($rs * ($area_pan/3));
										$valor_potp2A = $valor_potp2 * $cien;										
										if($valor_potp2A < 1 and $valor_potp2A > 20 ){
											$efi_2 = $cero;
										}else{
											$efi_2 = number_format($valor_potp2A, 2, '.', '');	
										}
									}
									//echo "<i class='btn-info ajuste_txt'> 0 </i>";
									
									
									if($efi_2 < 1 ){
										echo "<i class='btn-warning ajuste_txt'>".$cero."</i>";
									}else if($efi_2 > 30 ){
										echo "<i class='btn-danger ajuste_txt'> 31 </i>";
									}else if($efi_2 > $cero and $efi_2 < 17 ){					
										echo "<i class='btn-info ajuste_txt'>".$efi_2."</i>";
									}else{
										echo "<i class='btn-info ajuste_txt'>".$efi_2."</i>";										
									}
									
							?>
							</th></tr>
							</tbody>
						</table>
						</td>
						<td class="width_100">
						<table style="color:#333;width:100%;text-align:center;">
								<tbody style="color:#333;width:100%;text-align:center;">
							<tr><th>							
							<?php
							//Voltaje 3
							$num_volp3 = $resultados['volp3'];
							$v3M = str_replace($arreglo_simbolos, "",$num_volp3);
							if($v3M < $cero ){
								echo "<i class='btn-warning ajuste_txt'>".$v3M."</i>";
							}else if($v3M > $max_vp ){
								echo "<i class='btn-danger ajuste_txt'>".$v3M."</i>";							
							}else if($v3M > $cero || $v3M < $max_vp ){							
								echo "<i class='btn-info ajuste_txt'>".$v3M."</i>";
							}
							?>
							<hr style="margin:0;"></th></tr>
							<tr><th>
							<?php
							//Corriente 3
							$num_corp3 = $resultados['corp3'];
							$c3M = str_replace($arreglo_simbolos, "",$num_corp3);
							if($c3M < $cero ){
								echo "<i class='btn-warning ajuste_txt'>".$c3M."</i>";
							}else if($c3M > $max_ap ){
								echo "<i class='btn-danger ajuste_txt'>".$c3M."</i>";							
							}else if($c3M > $cero || $c3M < $max_ap ){							
								echo "<i class='btn-info ajuste_txt'>".$c3M."</i>";
							}
							?>
							<hr style="margin:0;"></th></tr>
							<tr><th>
							<?php
							//Potencia 3
							$num_potp3 = $resultados['potp3'];
							$set_pt3 = str_replace($arreglo_simbolos, "",$num_potp3);
							$p3M = number_format($set_pt3, 2, '.', '');
							if($p3M < $cero ){
								echo "<i class='btn-warning ajuste_txt'>".$p3M."</i>";
							}else if($p3M > $max_potp ){
								echo "<i class='btn-danger ajuste_txt'>".$p3M."</i>";							
							}else if($p3M > $cero || $p3M < $max_potp ){			
								echo "<i class='btn-info ajuste_txt'>".$p3M."</i>";
							}
							?>
							<hr style="margin:0;"></th></tr>
							<tr><th>
							<?php
							//eficiencia p3
									$potp3 = $resultados['potp3'];
									$rs = $resultados['radiacion_solar'];
									if($potp3 > $cero and $potp3 < 1040 ){
										//$potp3A = Getfloat($potp3);
										$potp3A = str_replace($arreglo_simbolos, "",$potp3);
										$potp3A = number_format($potp3A, 2, '.', '');
									}else{
										$potp3A = $cero;
									}									
									if($rs < 6 ){
										$rs = 0;
									}else if($rs > 1201){
										$rs = 1200;
									}else if($rs > 6 and $rs < 1200){
										$valor_potp3 = $potp3A / ($rs * ($area_pan/3));
										$valor_potp3A = $valor_potp3 * $cien;										
										if($valor_potp3A < 1 and $valor_potp3A > 20 ){
											$efi_3 = $cero;
										}else{
											$efi_3 = number_format($valor_potp3A, 2, '.', '');	
										}
									}
									//echo "<i class='btn-info ajuste_txt'> 0 </i>";
									
									
									if($efi_3 < 1 ){
										echo "<i class='btn-warning ajuste_txt'>".$cero."</i>";
									}else if($efi_3 > 30 ){
										echo "<i class='btn-danger ajuste_txt'> 31 </i>";
									}else if($efi_3 > $cero and $efi_3 < 17 ){					
										echo "<i class='btn-info ajuste_txt'>".$efi_3."</i>";
									}else{
										echo "<i class='btn-info ajuste_txt'>".$efi_3."</i>";										
									}
									
							?>
							</th></tr>
							</tbody>
						</table>
						</td>
						<td class="width_100">
							<table>
								<thead>
									<tr><th><i class="ajuste_txt">(0 | 76) <hr style="margin:0;"></i></th></tr>
									<tr><th><i class="ajuste_txt">(0 | 10) <hr style="margin:0;"></i></th></tr>
									<tr><th><i class="ajuste_txt">(0 | 520) <hr style="margin:0;"></i></th></tr>
									<tr><th><i class="ajuste_txt">(0 | 30) <hr style="margin:0;"></i></th></tr>
								</thead>
							</table>							
						</td>
						<td class="width_100">					
							<table class="txt_center">
								<thead>
									<tr><th><i class="ajuste_txt ">[V] <hr style="margin:0;"></i></th></tr>
									<tr><th><i class="ajuste_txt ">[A] <hr style="margin:0;"></i></th></tr>
									<tr><th><i class="ajuste_txt ">[W] <hr style="margin:0;"></i></th></tr>
									<tr><th><i class="ajuste_txt ">[%] <hr style="margin:0;"></i></th></tr>
								</thead>
							</table>
						</td>
					</tr>
					</tbody>
				</table>
				<table class="panel panel-default" style="color:#333;width: 100%;">
				<thead class="panel-heading">
					<th class="">
						Medidas
					</th>
					<th class="txt_center">
						Valores
					</th>
					<th class="txt_center">
						Rangos
					</th>
					<th class="txt_center">
						Un. Medidas
					</th>
				</thead>
				<tbody class="panel panel-body " style="">
				<tr class="borde_bot">
					<td class="">
						<b>Temp. Paneles</b>
					</td>
					<td class="txt_center">
						<?php
						$num_tempP = $resultados['tempp0'];
						$taMP = str_replace($arreglo_simbolos, "",$num_tempP);
						if($taMP < $min_temp ){
							echo "<i class='btn-warning ajuste_txt'>".$taMP."</i>";
						}else if($taMP > $max_temp ){
							echo "<i class='btn-danger ajuste_txt'>".$taMP."</i>";							
						}else if($taMP > $min_temp || $taMP < $max_temp ){							
							echo "<i class='btn-info ajuste_txt'>".$taMP."</i>";
						}
						?>
					</td>
					<td class="txt_center">
						<?php echo "($min_temp | $max_temp)";?>
					</td>
					<td class="txt_center">
						[&#176;C]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>Radiacion Solar</b>
					</td>
					<td class="txt_center">
						<?php
						$num_rs = $resultados['radiacion_solar'];
						$rsM = str_replace($arreglo_simbolos, "",$num_rs);
						if($rsM < 6 ){
							echo "<i class='btn-warning ajuste_txt'>".$rsM."</i>";
						}else if($rsM > $max_rs ){
							echo "<i class='btn-danger ajuste_txt'>".$rsM."</i>";							
						}else if($rsM > $cero || $rsM < $max_rs ){							
							echo "<i class='btn-info ajuste_txt'>".$rsM."</i>";
						}
						?>					
					</td>
					<td class="txt_center">
						<?php echo "(6 | $max_rs)";?>
					</td>
					<td class="txt_center">
						[W/m2]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>Voltaje Regulador </b>
					</td>
					<td class="txt_center">
					<?php
					$num_vr = $resultados['vol_regulador'];
					$vrM = str_replace($arreglo_simbolos, "",$num_vr);
					if($vrM < $cero ){
						echo "<i class='btn-warning ajuste_txt'>".$vrM."<i>";
					}else if($vrM > $max_vr ){
						echo "<i class='btn-danger ajuste_txt'>".$vrM."</i>";
					}else if($vrM > $cero || $vrM < $max_vr ){
						echo "<i class='btn-info ajuste_txt'>".$vrM."</i>";
					}
					?>
					</td>
					<td class="txt_center">
						<?php echo "($cero | $max_vr)";?>
					</td>
					<td class="txt_center">
						[V]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>Corriente Regulador </b>
					</td>
					<td class="txt_center">
					<?php
					$num_cr = $resultados['cor_regulador'];
					$crM = str_replace($arreglo_simbolos, "",$num_cr);
					if($crM < $cero ){
						echo "<i class='btn-warning ajuste_txt'>".$crM."</i>";
					}else if($crM > $max_ar ){
						echo "<i class='btn-danger ajuste_txt'>".$crM."</i>";							
					}else if($crM > $cero || $crM < $max_ar ){							
						echo "<i class='btn-info ajuste_txt'>".$crM."</i>";
					}
					?>				
					</td>
					<td class="txt_center">
						<?php echo "($cero | $max_ar)";?>
					</td>
					<td class="txt_center">
						[A]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>Voltaje Bateria </b>
					</td>
					<td class="txt_center">
					<?php
					//voltaje bateria
					$num_vb = $resultados['vol_bateria'];
					$vbM = str_replace($arreglo_simbolos, "",$num_vb);
					if($vbM > $min_vb and $vbM < 23.2 ){ //22
						echo "<i class='btn-warning ajuste_txt'>".$vbM."</i>";
					}else if($vbM < $min_vb ){ //30
						echo "<i class='btn-danger ajuste_txt'>".$vbM."</i>";							
					}else if($vbM >= 23.2 || $vbM <= $max_vb ){							
						echo "<i class='btn-info ajuste_txt'>".$vbM."</i>";
					}
					?>				
					</td>
					<td class="txt_center">
						<?php echo "($min_vb | $max_vb)";?>
					</td>
					<td class="txt_center">
						[V]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>Corriente Bateria </b>
					</td>
					<td class="txt_center">
					<?php
					$num_cb = $resultados['cor_bateria'];
					$cbM = str_replace($arreglo_simbolos, "",$num_cb);
					if($cbM < $cero ){
						echo "<i class='btn-warning ajuste_txt'>".$cbM."</i>";
					}else if($cbM > $max_ab ){
						echo "<i class='btn-danger ajuste_txt'>".$cbM."</i>";							
					}else if($cbM > $cero || $cbM < $max_ab ){							
						echo "<i class='btn-info ajuste_txt'>".$cbM."</i>";
					}
					?>			
					</td>
					<td class="txt_center">
						<?php echo "($cero |$max_ab)";?>
					</td>
					<td class="txt_center">
						[A]
					</td>
				</tr>	
				<tr class="borde_bot">
					<td class="">
						<b>Corriente inversor </b>
					</td>
					<td class="txt_center">
					<?php
					$num_cb = $resultados['cor_inversor'];
					$cbM = str_replace($arreglo_simbolos, "",$num_cb);
					if($cbM < $cero ){
						echo "<i class='btn-warning ajuste_txt'>".$cbM."</i>";
					}else if($cbM > 51 ){
						echo "<i class='btn-danger ajuste_txt'>".$cbM."</i>";							
					}else if($cbM > $cero || $cbM < 51 ){							
						echo "<i class='btn-info ajuste_txt'>".$cbM."</i>";
					}
					?>			
					</td>
					<td class="txt_center">
						<?php echo "($cero |51)";?>
					</td>
					<td class="txt_center">
						[A]
					</td>
				</tr>			
				</tbody>
				</table>
			</td>		
		</tr>
		<?php
		}
		echo "</tbody>";
		echo "</table>";
		$result->free();
		$conn->close();
		clearstatcache();
		flush();
	}
	function corriente_total(){
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		{//conexion
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			
			$corTot = $resultado['corriente_total'];
		/*
			echo $corTot = number_format($corTot, 2, '.', '');
			echo " <span style='font-size:14px;'>[A]</span>";		
		*/
		}
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
	}
	function potencia_total(){
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		{//conexion
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
					
			$pottot = $resultado['potencia_total'];
		}
			echo $potTotf = number_format($pottot, 2, '.', '');
			echo " <span style='font-size:14px;'>[W]</span>";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
		
	}
	function potencia_bateria(){
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		{//conexion
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
					
			$potencia_bateria = $resultado['potencia_bateria'];
		}
		echo $potencia_bateria = number_format($potencia_bateria, 2, '.', '');
		echo " <span style='font-size:14px;'>[W]</span>";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
			
	}
	function potencia_inversor(){
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		{//conexion
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal = "last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by id_last_day DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$potencia_inversor = $resultado['potencia_inversor'];
		}
			echo $potencia_inversorF = number_format($potencia_inversor, 2, '.', '');
			echo " <span style='font-size:14px;'>[W]</span>";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();			
	}
	function EnergiaDiaria_Irradiadia(){		
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$EnergiaDiaria_Irr = $resultado['energia_diaria_irradiada'];
			//echo "<br>Energia Diaria Irr BD:";
		}
			echo $EnergiaDiaria_IrrF = number_format($EnergiaDiaria_Irr, 0, '.', '');
			echo " <span style='font-size:14px;'>[wH]</span>";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
	}
	function EnergiaDiaria_Captada(){
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$EnergiaDiaria_Cap = $resultado['energia_diaria_captada'];
			//echo "<br>Energia Diaria Cap BD:";
		}
		echo $EnergiaDiaria_CapF = number_format($EnergiaDiaria_Cap, 0, ',','');
		echo " <i style='font-size:14px;'>[wH]</i>";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
	}
	function EnergiaDiaria_Regulador(){		
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$EnergiaDiaria_Reg = $resultado['energia_diaria_regulador'];
		}
			//echo "<br>Energia Diaria Reg BD:";
			echo $EnergiaDiaria_RegF = number_format($EnergiaDiaria_Reg, 0, ',','');
			echo " <span style='font-size:14px;'>[wH]</span>";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
		
	}
	function utilizacion_energia(){		
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$utilizacion_energia = $resultado['energia_utilizada'];
			//echo "<br>Utilización Energia BD:";
			$utilizacion_energiaF = $utilizacion_energia;
			echo $utilizacion_energiaF = number_format($utilizacion_energiaF, 2, ',','');
			echo " <span style='font-size:14px;'>[%]</span>";
		}
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
		
	}
	function cache(){
		date_default_timezone_set('America/Santiago');
				
		header("Expires: Mon, 03 Jun 2010 06:00:00 GTM");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		clearstatcache();
		flush();
	}	
	function estado_servicio(){		
		
		if("" == ""){
			echo "";
		}else{
			echo "";
		}			
	}
	function potencia_total_teorica(){	
		$fechaI2 = date('j/m/Y');		
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$data_rs = $resultado['radiacion_solar'];
			if($data_rs > -1){
				$val_efi_pan = 0.16;
				$val_area_pan = 9.7416;
				//8.7609;
				$valor = $data_rs * $val_efi_pan * $val_area_pan;
				$valor = number_format($valor, 2, '.', '');
				echo $valor;
				echo " <span style='font-size:14px;'>[W]</span>";
			}
		}
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
		
	}
	function mostrar_errores(){
		$array_errores = array();		
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_errores="errores";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_errores order by id_errores desc limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$id_error = $resultado['id_errores'];
			$fecha_registro_errores = $resultado['fecha_registro_errores'];
			array_push($array_errores,$fecha_registro_errores);
		}
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
		
		
	
	$fecha_1 = "Fecha_Creacion 13/04/17_10:39:44";
	$fecha_2 = "Fecha_Creacion 13/04/17_12:50:32";

	echo "<br>";
	echo $fecha_1;
	echo "<br>";
	echo $fecha_2;
	echo "<br>";

	$fecha_i = explode(" ",$fecha_1);
	$fecha_f = explode(" ",$fecha_2);

	$fecha_i1 = $fecha_i[1];
	$fecha_i1 = str_replace("_"," ",$fecha_i1);
	$fecha_i1 = str_replace("/","-",$fecha_i1);
	echo "Fecha 1: ";
	echo $fecha_i1;
	echo "<br>";

	$fecha_i2 = $fecha_f[1];
	$fecha_i2 = str_replace("_"," ",$fecha_i2);
	$fecha_i2 = str_replace("/","-",$fecha_i2);
	echo "Fecha 2: ";
	echo $fecha_i2;
	echo "<br>";



		if($fecha_1 == $fecha_2){
			echo "Las fechas son Iguales";
		}else{
			echo "Formato de fecha: ";
			echo "<b>d/m/y h:m:s</b>";
			echo "<br>";
			echo "Las fechas son Diferentes";
			echo "<br>";
			echo "La diferencia de fechas es:";
			
			$datetime1 = new DateTime($fecha_i1); 
			$datetime2 = new DateTime($fecha_i2);
			$dteDiff1 = $datetime1->diff($datetime2); 
			$dteDiff2 = $datetime2->diff($datetime1); 
			print $dteDiff1->format("%d/%m/%Y %H:%i:%s"); 
			echo "<br>";
		}
		clearstatcache();
		flush();
	}
	function btnGeneraExcel(){
		echo '	
		<div id="msg_alert_1" class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
		<strong id="export_por_fecha0">Se han exportado los datos correctamente.</strong>
		</div>
		';
	}
	function consulta_inicial(){
		{//conexion
		date_default_timezone_set('America/Santiago');
		setlocale(LC_ALL,"es_ES");
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$tabla_principal="last_day";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$id_last_day = $resultado['id_last_day'];
			$hora = $resultado['hora'];
		}
			echo "$id_last_day $hora";
		$result->free();
		$conn->close();
		}
		clearstatcache();
		flush();
	}
	function indicador_eficiencia(){
		date_default_timezone_set('America/Santiago');
		//variables globales
		$servername = "localhost";
		$username = "dba_cdiprueba";
		$password = "(insert.DB.2017)";
		$dbname = "dba_optimizado1";
		$fechaI = date('d/m/Y');
		$fechaI2 = date('j/m/Y');		
		$fdia = date('j');
		$fdia1 = $fdia -1;
		$fmes = date('m');
		$fano = date('Y');		
		$fechaI1 = $fdia1."/".$fmes."/".$fano;
		$fhora = date('H');
		$fmin = date('i');
		$fseg = date('s');
		$data = array();		
		$horario = $fhora.":".$fmin.":".$fseg;
		$Getfloat0 = "";
		$efi_1 = "";		
		$efi_2 = "";		
		$efi_3 = "";		
		$area_pan = 9.7416;
		$cien = 100;
		$tabla_principal="last_day";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM $tabla_principal order by fecha DESC limit 1";
		$result = $conn->query($sql);
		while($resultado = $result->fetch_array(MYSQLI_ASSOC)){
			$pot_tot = $resultado['potencia_total'];
			//$pot_tot1 = str_replace("",null,$pot_tot);
					
			if($pot_tot > -0.1 and $pot_tot < 1601 ){
				$pot_tot1 = Getfloat($pot_tot);
			}else{
				$pot_tot1 = 1;
			}
			
			$rs = $resultado['radiacion_solar'];		
			if($rs > 6 and $rs < 1501){
				$rs1 = Getfloat($rs);
			}else{
				$rs1 = 1;
			}
			$area = $rs1 * $area_pan;
			if($area > 0){
				$valor0 = $pot_tot1 / $area;
			}else{
				$valor0= 1;
			}
			$valor = $valor0 * $cien;
			if($valor > 30 ){
				$Getfloat0 = 31;
			}else{
				$Getfloat0 = number_format($valor, 2, '.', '');	
			}
		}
		$result->free();
		$conn->close();
		echo $Getfloat0;
		echo " <span style='font-size:14px;'>[%]</span>";
		clearstatcache();
		flush();
	}
	function consulta_final($consulta_final){
		{//alerta aviso
		$var_tiempo = $consulta_final;
		//$registro = date("Y/m/j H:i:s");
		//$to = "condor.dorado.informatico@gmail.com";
		$to2 = "pabl0koman13@gmail.com";
		$subject = "AlertaCDI";
		$txt = "Se ha detecctado <b>inactividad</b> desde las $var_tiempo.";
		$headers = "From: CDI Alertas" . "\r\n";
		
		//mail($to,$subject,$txt,$headers);
		mail($to2,$subject,$txt,$headers);
		echo '
			<div class="col-xs-12">
				<div class="alert alert-success fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div style="text-align: -webkit-center;"> <b><i>Alerta de aviso enviada.</i></b></div>
				</div>
			</div>
		';
		
		}
	}
	
	function Getfloat($str) {
	if(strstr($str, ".")) {
    $str = str_replace(",", "", $str);
    $str = str_replace(",", ".", $str);
	$str = str_replace("a", "", $str);
	$str = str_replace("e", "", $str);
	$str = str_replace("i", "", $str);
	$str = str_replace("o", "", $str);
	$str = str_replace("u", "", $str);
	$str = str_replace("A", "", $str);
	$str = str_replace("E", "", $str);
	$str = str_replace("I", "", $str);
	$str = str_replace("O", "", $str);
	$str = str_replace("U", "", $str);
	$str = str_replace("b", "", $str);
	$str = str_replace("c", "", $str);
	$str = str_replace("d", "", $str);
	$str = str_replace("f", "", $str);
	$str = str_replace("g", "", $str);
	$str = str_replace("h", "", $str);
	$str = str_replace("i", "", $str);
	$str = str_replace("j", "", $str);
	$str = str_replace("k", "", $str);
	$str = str_replace("l", "", $str);
	$str = str_replace("m", "", $str);
	$str = str_replace("n", "", $str);
	$str = str_replace("ñ", "", $str);
	$str = str_replace("p", "", $str);
	$str = str_replace("q", "", $str);
	$str = str_replace("r", "", $str);
	$str = str_replace("s", "", $str);
	$str = str_replace("t", "", $str);
	$str = str_replace("v", "", $str);
	$str = str_replace("w", "", $str);
	$str = str_replace("x", "", $str);
	$str = str_replace("y", "", $str);
	$str = str_replace("z", "", $str);
	$str = str_replace("B", "", $str);
	$str = str_replace("C", "", $str);
	$str = str_replace("D", "", $str);
	$str = str_replace("F", "", $str);
	$str = str_replace("G", "", $str);
	$str = str_replace("H", "", $str);
	$str = str_replace("J", "", $str);
	$str = str_replace("K", "", $str);
	$str = str_replace("L", "", $str);
	$str = str_replace("M", "", $str);
	$str = str_replace("N", "", $str);
	$str = str_replace("Ñ", "", $str);
	$str = str_replace("P", "", $str);
	$str = str_replace("Q", "", $str);
	$str = str_replace("R", "", $str);
	$str = str_replace("S", "", $str);
	$str = str_replace("T", "", $str);
	$str = str_replace("V", "", $str);
	$str = str_replace("W", "", $str);
	$str = str_replace("X", "", $str);
	$str = str_replace("Y", "", $str);
	$str = str_replace("Z", "", $str);
	$str = str_replace("|", "", $str);
	$str = str_replace("°", "", $str);
	$str = str_replace("¬", "", $str);
	$str = str_replace("!", "", $str);
	$str = str_replace("#", "", $str);
	$str = str_replace("$", "", $str);
	$str = str_replace("%", "", $str);
	$str = str_replace("&", "", $str);
	$str = str_replace("/", "", $str);
	$str = str_replace("(", "", $str);
	$str = str_replace(")", "", $str);
	$str = str_replace("=", "", $str);
	$str = str_replace("?", "", $str);
	$str = str_replace("'", "", $str);
	$str = str_replace("\'", "", $str);
	$str = str_replace("¿", "", $str);
	$str = str_replace("¡", "", $str);
	$str = str_replace("´´", "", $str);
	$str = str_replace("´", "", $str);
	$str = str_replace("+", "", $str);
	$str = str_replace("*", "", $str);
	$str = str_replace("~", "", $str);
	$str = str_replace("{", "", $str);
	$str = str_replace("[", "", $str);
	$str = str_replace("^", "", $str);
	$str = str_replace("^^", "", $str);
	$str = str_replace("}", "", $str);
	$str = str_replace("]", "", $str);
	$str = str_replace("``", "", $str);
	$str = str_replace("`", "", $str);
	$str = str_replace(";", "", $str);
	$str = str_replace(":", "", $str);
	$str = str_replace("_", "", $str);
	$str = str_replace("@", "", $str);
	$str = str_replace("<", "", $str);
	$str = str_replace(">", "", $str);
	$str = str_replace("¡", "", $str);
	$str = str_replace("¢", "", $str);
	$str = str_replace("£", "", $str);
	$str = str_replace("¤", "", $str);
	$str = str_replace("¥", "", $str);
	$str = str_replace("¦", "", $str);
	$str = str_replace("§", "", $str);
	$str = str_replace("¨", "", $str);
	$str = str_replace("©", "", $str);
	$str = str_replace("ª", "", $str);
	$str = str_replace("«", "", $str);
	$str = str_replace("®", "", $str);
	$str = str_replace("¯", "", $str);
	$str = str_replace("°", "", $str);
	$str = str_replace("±", "", $str);
	$str = str_replace("²", "", $str);
	$str = str_replace("³", "", $str);
	$str = str_replace("´", "", $str);
	$str = str_replace("µ", "", $str);
	$str = str_replace("¶", "", $str);
	$str = str_replace("·", "", $str);
	$str = str_replace("¸", "", $str);
	$str = str_replace("¹", "", $str);
	$str = str_replace("º", "", $str);
	$str = str_replace("»", "", $str);
	$str = str_replace("¼", "", $str);
	$str = str_replace("½", "", $str);
	$str = str_replace("¾", "", $str);
	}

	if(preg_match("#([0-9\.]+)#", $str, $match)){
		return floatval($match[0]);
	}else{
		return floatval($str);
	}
	}
?>		