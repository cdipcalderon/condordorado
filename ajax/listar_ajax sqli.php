<?php
//error_reporting(0);
include "conn2.php";

include "conexion_solar.php";
$tabla = 'post1';

error_reporting(E_ALL);
date_default_timezone_set('America/Santiago');
setlocale(LC_ALL,"es_ES");

	
	//Tiempo segundos
	{
	$numero_unico = 120;
	//milisegs
	$tiempo_refresh = $numero_unico."000";
	//segs
	$numero_actualizar = $numero_unico;
	}
	//Numeros Aleatorios
	{
	$in1 = -76;
	$fn1 = 152;
	function n_rand1($in1,$fn1){$result1 = rand($in1,$fn1);return $result1;}
	$vars1 = n_rand1($in1,$fn1);
	
	$in2 = -76;
	$fn2 = 152;
	function n_rand2($in2,$fn2){$result2 = rand($in2,$fn2);return $result2;}
	$vars2 = n_rand2($in2,$fn2);
	
	$in3 = -76;
	$fn3 = 152;
	function n_rand3($in3,$fn3){$result3 = rand($in3,$fn3);return $result3;}
	$vars3 = n_rand3($in3,$fn3);

	$in4 = -76;
	$fn4 = 152;
	function n_rand4($in4,$fn4){$result4 = rand($in4,$fn4);return $result4;}
	$vars4 = n_rand4($in4,$fn4);
	
	$in5 = -76;
	$fn5 = 152;
	function n_rand5($in5,$fn5){$result5 = rand($in5,$fn5);return $result5;}
	$vars5 = n_rand5($in5,$fn5);

	$in6 = -76;
	$fn6 = 152;
	function n_rand6($in6,$fn6){$result6 = rand($in6,$fn6);return $result6;}
	$vars6 = n_rand6($in6,$fn6);
	
	$in7 = -76;
	$fn7 = 152;
	function n_rand7($in7,$fn7){$result7 = rand($in7,$fn7);return $result7;}
	$vars7 = n_rand7($in7,$fn7);

	$in8 = -76;
	$fn8 = 152;
	function n_rand8($in8,$fn8){$result8 = rand($in8,$fn8);return $result8;}
	$vars8 = n_rand8($in8,$fn8);
	
	$in9 = -76;
	$fn9 = 152;
	function n_rand9($in9,$fn9){$result9 = rand($in9,$fn9);return $result9;}
	$vars9 = n_rand9($in9,$fn9);

	$in10 = -76;
	$fn10 = 152;
	function n_rand10($in10,$fn10){$result10 = rand($in10,$fn10);return $result10;}
	$vars10 = n_rand10($in10,$fn10);
	
	$in11 = -76;
	$fn11 = 152;
	function n_rand11($in11,$fn11){$result11 = rand($in11,$fn11);return $result11;}
	$vars11 = n_rand11($in11,$fn11);

	$in12 = -76;
	$fn12 = 152;
	function n_rand12($in12,$fn12){$result12 = rand($in12,$fn12);return $result12;}
	$vars12 = n_rand12($in12,$fn12);
	
	$in13 = -76;
	$fn13 = 152;
	function n_rand13($in13,$fn13){$result13 = rand($in13,$fn13);return $result13;}
	$vars13 = n_rand13($in13,$fn13);

	$in14 = -76;
	$fn14 = 152;
	function n_rand14($in14,$fn14){$result14 = rand($in14,$fn14);return $result14;}
	$vars14 = n_rand14($in14,$fn14);
	
	$in15 = -76;
	$fn15 = 152;
	function n_rand15($in15,$fn15){$result15 = rand($in15,$fn15);return $result15;}
	$vars15 = n_rand15($in15,$fn15);

	$in16 = -76;
	$fn16 = 152;
	function n_rand16($in16,$fn16){$result16 = rand($in16,$fn16);return $result16;}
	$vars16 = n_rand16($in16,$fn16);
	
	$in17 = -76;
	$fn17 = 152;
	function n_rand17($in17,$fn17){$result17 = rand($in17,$fn17);return $result17;}
	$vars17 = n_rand17($in17,$fn17);

	$in18 = -76;
	$fn18 = 152;
	function n_rand18($in18,$fn18){$result18 = rand($in18,$fn18);return $result18;}
	$vars18 = n_rand18($in18,$fn18);
	
	$in19 = -76;
	$fn19 = 152;
	function n_rand19($in19,$fn19){$result19 = rand($in19,$fn19);return $result19;}
	$vars19 = n_rand19($in19,$fn19);

	$in20 = -76;
	$fn20 = 152;
	function n_rand20($in20,$fn20){$result20 = rand($in20,$fn20);return $result20;}
	$vars20 = n_rand20($in20,$fn20);
	
	$in21 = -76;
	$fn21 = 152;
	function n_rand21($in21,$fn21){$result21 = rand($in21,$fn21);return $result21;}
	$vars21 = n_rand21($in21,$fn21);
	
	$in22 = -76;
	$fn22 = 152;
	function n_rand22($in22,$fn22){$result22 = rand($in22,$fn22);return $result22;}
	$vars22 = n_rand22($in22,$fn22);
	
	
	
	$p1 = $vars1 * $vars2;
	$p2 = $vars4 * $vars5;
	$p3 = $vars7 * $vars8;
	
	}
	//rangos de valores
	
	//redirecciones
	$url_index = "http://cdisolar.hopto.org:8888/post1/";	
	//Obtener url + host
	$url= $_SERVER["REQUEST_URI"];
	$host= $_SERVER["HTTP_HOST"];
	
	//Obtener url + host
	$url= $_SERVER["REQUEST_URI"];
	$host= $_SERVER["HTTP_HOST"];
	
	$limitI = 0;
	$limitF = 1;
	
$tmp="";

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
	echo consulta_final();
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
		"tp0","v1","c1","v2","c2","v3","c3","rs","ta","hr","vr","cr","vb","cb");
		
		$sql="select * from post1 order by id_dato desc limit 0,1";
		/*
		$servername = "localhost";
		$username = "solar";
		$password = "solar";
		$dbname = "solar";		
		$listar_detalle_0 = new mysqli($servername, $username, $password, $dbname);		
		$sql_ld_1 = "SELECT * FROM importados ORDER BY id_importados ASC";
		$result_ld_1 = $listar_detalle_0->query($sql_ld_1);
			
		while($resultados = $result_ld_1->fetch_array(MYSQLI_ASSOC)){
		
		}
		*/
		
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
		$ndatos = $resultados['id_dato'];
		}
		echo "<table class='table' style='color:#333;margin-bottom:0;'>
		<thead> 
		<tr>
		<b>Numero de Registros: $ndatos</b>
		</tr>
		<tr> 
			<th class='inicial1' style='width:70px;'>ID Dato</th>
			<th class='inicial2'>Fecha</th>
			<th class='inicial3'>Horario</th>
			<th class='inicial4' style='display: table-cell;'>Datos</th>
		</tr>	
		</thead>
		<tbody>
		";
		
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
		?>
		<tr style="overflow-x:scroll;border: #ddd solid 1px;border-radius: 14px;color:#333;">
			<td class="inicial1 display_table_cell" >
				<span class="inicial1 ocultar_iddatoTDS" >
				<?php echo $resultados['id_dato'];?>
				</span>
			</td>
			<td class="inicial2 display_table_cell" >
				<span class="inicial2 ocultar_iddatoTDS" >
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
						<td class="width_100" style="align-content: center;text-align: -webkit-center;margin: 0;padding: 0;">
								<b>Voltaje</b><br>
								<hr style="margin:0;">
								<b>Corriente</b><br>
								<hr style="margin:0;">
								<b>Potencia</b><br>
						</td>
						<td class="width_100">
							<?php
							//voltaje 1
							$num_volp1 = $resultados['volp1'];
							$v1M = str_replace($arreglo_simbolos, "",$num_volp1);
							
							if($v1M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>$v1M</i>";
							}else if($v1M > 76 ){
								echo "<i class='btn-danger ajuste_txt' style='border: #ddd solid 1px;' >$v1M</i>";
							}else if($v1M > 0 || $v1M < 76 ){
								echo "<i class='btn-info ajuste_txt'>$v1M</i>";
								
							}
							?>
							<hr style="margin:0;">
							<?php
							$num_corp1 = $resultados['corp1'];
							$c1M = str_replace($arreglo_simbolos, "",$num_corp1);
							//corriente 1
							//$c1M = $resultados['corp1'];
							if($c1M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $c1M;
								echo "</i>";
							}else if($c1M > 10 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $c1M;
								echo "</i>";
							}else if($c1M > 0 || $c1M < 10 ){
								echo "<i class='btn-info ajuste_txt'>";
								echo $c1M;
								echo "</i>";
							}
							?>
							<hr style="margin:0;">
							<?php
							//Potencia 1
							$num_potp1 = $resultados['potp1'];
							$set_pt1 = str_replace($arreglo_simbolos, "",$num_potp1);
							$p1M = number_format($set_pt1, 2, '.', '');
							if($p1M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $p1M;
								echo "</i>";
							}else if($p1M > 520 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $p1M;
								//echo utf8_decode($resultados['potp1']);
								echo "</i>";
							}else if($p1M > 0 || $p1M < 520 ){
								echo "<i class='btn-info ajuste_txt'>";
								echo $p1M;
								//echo utf8_decode($resultados['potp1']);
								echo "</i>";
							}
							?>
						</td>
						<td class="width_100">
							<?php
							//Voltaje 2
							$num_volp2 = $resultados['volp2'];
							$v2M = str_replace($arreglo_simbolos, "",$num_volp2);
							if($v2M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $v2M;
								echo "</i>";
							}else if($v2M > 76 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $v2M;
								echo "</i>";							
							}else if($v2M > 0 || $v2M < 76 ){							
								echo "<i class='btn-info ajuste_txt'>";
								echo $v2M;
								echo "</i>";
							}
							?>
							<hr style="margin:0;">
							<?php
							//Corriente 2
							$num_corp2 = $resultados['corp2'];
							$c2M = str_replace($arreglo_simbolos, "",$num_corp2);
							if($c2M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $c2M;
								echo "</i>";
							}else if($c2M > 10 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $c2M;
								echo "</i>";							
							}else if($c2M > 0 || $c2M < 10 ){							
								echo "<i class='btn-info ajuste_txt'>";
								echo $c2M;
								echo "</i>";
							}
							?>
							<hr style="margin:0;">
							<?php
							//Potencia 2
							$num_potp2 = $resultados['potp2'];
							$set_pt2 = str_replace($arreglo_simbolos, "",$num_potp2);
							$p2M = number_format($set_pt2, 2, '.', '');
							if($p2M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $p2M;
								echo "</i>";
							}else if($p2M > 520 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $p2M;
								echo "</i>";							
							}else if($p2M > 0 || $p2M < 520 ){							
								echo "<i class='btn-info ajuste_txt'>";
								echo $p2M;
								echo "</i>";
							}
							?>
						</td>
						<td class="width_100">
							<?php
							//voltaje 3
							$num_volp3 = $resultados['volp3'];
							$v3M = str_replace($arreglo_simbolos, "",$num_volp3);
							if($v3M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $v3M;
								echo "</i>";
							}else if($v3M > 76 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $v3M;
								echo "</i>";							
							}else if($v3M > 0 || $v3M < 76 ){							
								echo "<i class='btn-info ajuste_txt'>";
								echo $v3M;
								echo "</i>";
							}
							?> 
							<hr style="margin:0;">
							<?php
							//Corriente 3
							$num_corp3 = $resultados['corp3'];
							$c3M = str_replace($arreglo_simbolos, "",$num_corp3);
							if($c3M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $c3M;
								echo "</i>";
							}else if($c3M > 10 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $c3M;
								echo "</i>";							
							}else if($c3M > 0 || $c3M < 10 ){							
								echo "<i class='btn-info ajuste_txt'>";
								echo $c3M;
								echo "</i>";
							}
							?> 
							<hr style="margin:0;">
							<?php
							//Potencia 3
							$num_potp3 = $resultados['potp3'];
							$set_pt3 = str_replace($arreglo_simbolos, "",$num_potp3);
							$p3M = number_format($set_pt3, 2, '.', '');
							if($p3M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>";
								echo $p3M;
								echo "</i>";
							}else if($p3M > 520 ){
								echo "<i class='btn-danger ajuste_txt'>";
								echo $p3M;
								echo "</i>";							
							}else if($p3M > 0 || $p2M < 520 ){							
								echo "<i class='btn-info ajuste_txt'>";
								echo $p3M;
								echo "</i>";
							}
							?>
						</td>
						<td class="width_100 ">							
							<i><?php printf ("(0 |76)");?></i>
							<hr style="margin:0;">
							<i><?php echo "(0 | 10)";?></i>
							<hr style="margin:0;">
							<i><?php echo "(0 | 520)";?></i>
						</td>
						<td class="width_100 ">					
							<i>[V]</i>
							<hr style="margin:0;">
							<i>[A]</i>
							<hr style="margin:0;">
							<i>[W]</i>
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
						if($taMP < -10 ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $taMP;
							echo "</i>";
						}else if($taMP > 50 ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $taMP;
							echo "</i>";							
						}else if($taMP > -10 || $taMP < 50 ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $taMP;
							echo "</i>";
						}
						?>
					</td>
					<td class="txt_center">
						<?php echo "(-10 | 50)";?>
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
						if($rsM < 0 ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $rsM;
							echo "</i>";
						}else if($rsM > 1500 ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $rsM;
							echo "</i>";							
						}else if($rsM > 0 || $rsM < 1500 ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $rsM;
							echo "</i>";
						}
						?>					
					</td>
					<td class="txt_center">
						<?php echo "(0 | 1500)";?>
					</td>
					<td class="txt_center">
						[W/m2]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>T.A.(Gabinete) </b>
					</td>
					<td class="txt_center">
					<?php
					$num_tamg = $resultados['temp_ambiente'];
					$taMG = str_replace($arreglo_simbolos, "",$num_tamg);
					if($taMG < -10 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $taMG;
						echo "</i>";
					}else if($taMG > 50 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $taMG;
						echo "</i>";
					}else if($taMG > -10 || $taMG < 50 ){
						echo "<i class='btn-info ajuste_txt'>";
						echo $taMG;
						echo "</i>";
					}
					?>				
					</td>
					<td class="txt_center">
						 <?php echo "(-10 | 50)";?>
					</td>
					<td class="txt_center">
						[&#176;C]
					</td>
				</tr>
				<tr class="borde_bot">
					<td class="">
						<b>Humedad Relativa </b>
					</td>
					<td class="txt_center">
					<?php
					$num_hr = $resultados['humedad_relativa'];
					$hrM = str_replace($arreglo_simbolos, "",$num_hr);
					if($hrM < 0 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $hrM;
						echo "</i>";
					}else if($hrM > 100 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $hrM;
						echo "</i>";
					}else if($hrM > 0 || $hrM < 100 ){
						echo "<i class='btn-info ajuste_txt'>";
						echo $hrM;
						echo "</i>";
					}
					?>				
					</td>
					<td class="txt_center">
						 <?php echo "(0 | 100)";?>
					</td>
					<td class="txt_center">
						[%]
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
					if($vrM < 0 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $vrM;
						echo "</i>";
					}else if($vrM > 30 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $vrM;
						echo "</i>";
					}else if($vrM > 0 || $vrM < 30 ){
						echo "<i class='btn-info ajuste_txt'>";
						echo $vrM;
						echo "</i>";
					}
					?> 				
					</td>
					<td class="txt_center">
						<?php echo "(0 | 30)";?>
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
					if($crM < 0 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $crM;
						echo "</i>";
					}else if($crM > 70 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $crM;
						echo "</i>";							
					}else if($crM > 0 || $crM < 70 ){							
						echo "<i class='btn-info ajuste_txt'>";
						echo $crM;
						echo "</i>";
					}
					?>				
					</td>
					<td class="txt_center">
						<?php echo "(0 | 70)";?>
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
					$num_vb = $resultados['vol_bateria'];
					$vbM = str_replace($arreglo_simbolos, "",$num_vb);
					if($vbM < 20 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $vbM;
						echo "</i>";
					}else if($vbM > 30 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $vbM;
						echo "</i>";							
					}else if($vbM > 0 || $vbM < 30 ){							
						echo "<i class='btn-info ajuste_txt'>";
						echo $vbM;
						echo "</i>";
					}
					?>				
					</td>
					<td class="txt_center">
						<?php echo "(22 | 30)";?>
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
					if($cbM < 0 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $cbM;
						echo "</i>";
					}else if($cbM > 90 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $cbM;
						echo "</i>";							
					}else if($cbM > 0 || $cbM < 90 ){							
						echo "<i class='btn-info ajuste_txt'>";
						echo $cbM;
						echo "</i>";
					}
					?>			
					</td>
					<td class="txt_center">
						<?php echo "(0 |90)";?>
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
		clearstatcache();
		flush();
	}
	function corriente_total(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
		$corp1 = $resultados['corp1'];
		$potp1 = $resultados['potp1'];
		$corp2 = $resultados['corp2'];
		$potp2 = $resultados['potp2'];
		$corp3 = $resultados['corp3'];
		$potp3 = $resultados['potp3'];
		$corTot = $corp1+$corp2+$corp3;
		/*
		echo $corTot = number_format($corTot, 2, '.', '');
		echo " <span style='font-size:14px;'>[A]</span>";		
		*/
		}
		clearstatcache();
		flush();
	}
	function potencia_total(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
			$potp1 = $resultados['potp1'];
			$potp2 = $resultados['potp2'];
			$potp3 = $resultados['potp3'];
			$potTot = $potp1+$potp2+$potp3;
			echo $potTot = number_format($potTot, 2, '.', '');
			echo " <span style='font-size:14px;'>[W]</span>";
		}
	}
	function potencia_bateria(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
			$potencia_bateria = $resultados['potencia_bateria'];
			echo $potencia_bateria = number_format($potencia_bateria, 2, '.', '');
			echo " <span style='font-size:14px;'>[W]</span>";
		}
	}
	function EnergiaDiaria_Irradiadia(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
		
		$EnergiaDiaria_Irr = $resultados['EnergiaDiaria_Irr'];
		//echo "<br>Energia Diaria Irr BD:";
		$EnergiaDiaria_IrrF = $EnergiaDiaria_Irr;
		echo $EnergiaDiaria_IrrF = number_format($EnergiaDiaria_IrrF, 0, '.', '');
		echo " <span style='font-size:14px;'>[wH]</span>";
		}
		clearstatcache();
		flush();
	}
	function EnergiaDiaria_Captada(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){		
			$EnergiaDiaria_Cap = $resultados['EnergiaDiaria_Cap'];
			//echo "<br>Energia Diaria Cap BD:";
			$EnergiaDiaria_CapF = $EnergiaDiaria_Cap;
			echo $EnergiaDiaria_CapF = number_format($EnergiaDiaria_CapF, 0, ',','');
			echo " <i style='font-size:14px;'>[wH]</i>";
		}
		clearstatcache();
		flush();
	}
	function EnergiaDiaria_Regulador(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
			$EnergiaDiaria_Reg = $resultados['EnergiaDiaria_Reg'];
			//echo "<br>Energia Diaria Reg BD:";
			$EnergiaDiaria_RegF = $EnergiaDiaria_Reg;
			echo $EnergiaDiaria_RegF = number_format($EnergiaDiaria_RegF, 0, ',','');
			echo " <span style='font-size:14px;'>[wH]</span>";
		}
		clearstatcache();
		flush();
	}
	function utilizacion_energia(){
		date_default_timezone_set('America/Santiago');
		$sql="select * from post1 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){		
			$utilizacion_energia = $resultados['utilizacion_energia'];
			//echo "<br>Utilización Energia BD:";
			$utilizacion_energiaF = $utilizacion_energia;
			echo $utilizacion_energiaF = number_format($utilizacion_energiaF, 2, ',','');
			echo " <span style='font-size:14px;'>[%]</span>";
		}
		clearstatcache();
		flush();
	}
	function chart_rs(){
		date_default_timezone_set('America/Santiago');
		$fechaI = date('d/m/Y');		
		$fdia = date('d');
		$fmes = date('m');
		$fano = date('Y');		
		$fhora = date('H');
		$fmin = date('i');
		$fseg = date('s');		
		$horario = $fhora.":".$fmin.":".$fseg;		
		$data[] = array('Employee','Valor');
		$sql = "select * from post1 where fecha = '$fechaI' and hora > '08:00:00' order by hora ASC";
		$query = mysql_query($sql);
		while($result = mysql_fetch_array($query)){
			$data[] = array($result['hora'],(int)$result['radiacion_solar']);		
		}

		//$data = array($data);
		echo json_encode($data);
		
		/*
		$fechaI = date('d/m/Y');
		
		$fdia = date('d');
		$fmes = date('m');
		$fano = date('Y');
		
		$fhora = date('h');
		$fmin = date('i');
		$fseg = date('s');
		
		$fhora = $fhora - 0.5;
		//$fhoraI = '00:00:00';
		$fhoraI = $fhora.":".$fmin.":".$fseg;
				
		
		$data[] = array('Employee','Radiacion Solar');
		$sql = "select * from $tabla where fecha = '".$fechaI."' and hora > '".$fhoraI."' order by hora ASC";
		$query = mysql_query($sql);
		while($result = mysql_fetch_array($query)){
		$data[] = array($result['hora'],(int)$result['radiacion_solar']);
		  
		}

		//	$data = array($data);			
		echo json_encode($data);
		*/
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
		date_default_timezone_set('America/Santiago');
	
		$fechaI = date('d/m/Y');
		$fechaI2 = date('j/m/Y');
		
		$sql = "select * from post1 where fecha = '$fechaI' or fecha = '$fechaI2' and radiacion_solar <> '' order by hora DESC limit 1";
		
		$query = mysql_query($sql);
		while($result = mysql_fetch_array($query)){
			$data_rs = $result['radiacion_solar'];
			if($data_rs > -0.99){
				$val_efi_pan = 0.16;
				$val_area_pan = 9.7416;
				//8.7609;
				$valor = $data_rs * $val_efi_pan * $val_area_pan;
				$valor = number_format($valor, 2, '.', '');
				echo $valor;
				echo " <span style='font-size:14px;'>[W]</span>";
			}
		}
		clearstatcache();
		flush();
	}
	function mostrar_errores(){
		$array_errores = array();		
		$sql_errores = "select * from errores order by id_errores DESC limit 2";
		
		$query_errores = mysql_query($sql_errores);
		while($result_errores = mysql_fetch_array($query_errores)){
			
			$id_error = $result_errores['id_errores'];
			$fecha_registro_errores = $result_errores['fecha_registro_errores'];
			array_push($array_errores,$fecha_registro_errores);
		}
	
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
			print $dteDiff1->format("%d/%m/%Y %H:%i:%S"); 
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
		$sqlA = "SELECT * FROM post1 order by id_dato DESC limit 1";
		$rA = mysql_query($sqlA);
		$resultadoA = mysql_fetch_array($rA);
		$id_dato = $resultadoA['id_dato'];
		$hora = $resultadoA['hora'];
		echo "$id_dato $hora";
		clearstatcache();
		flush();
	}
	function indicador_eficiencia(){
		include("conexion_solar.php");
		
		date_default_timezone_set('America/Santiago');
		//variables globales
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
		$Getfloat1 = "";		
		$area_pan = 9.7416;
		$cien = 100;
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql_pot_rs = "SELECT id_dato,fecha, hora, potencia_total, radiacion_solar FROM post1 where fecha = '".$fechaI2."' and radiacion_solar > -1 ORDER by id_dato DESC LIMIT 1";
		$result_solar_1 = $conn->query($sql_pot_rs);
		while($resultado_pot_rs = $result_solar_1->fetch_array(MYSQLI_ASSOC)){
			$pot_tot = $resultado_pot_rs['potencia_total'];
			//$pot_tot1 = str_replace("",null,$pot_tot);
					
			if($pot_tot > -0.99 and $pot_tot < 1601 ){
				$pot_tot1 = Getfloat($pot_tot);
			}else{
				$pot_tot1 = 1;
			}
			
			$rs = $resultado_pot_rs['radiacion_solar'];		
			if($rs > 0 and $rs < 1601){
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
				$Getfloat0 = 16;
			}else{
				$Getfloat0 = number_format($valor, 2, '.', '');	
			}
		}
		$conn->close();
		echo $Getfloat0;
		echo " <span style='font-size:14px;'>[%]</span>";
		clearstatcache();
		flush();
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