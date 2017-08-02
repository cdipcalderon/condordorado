<?php

	date_default_timezone_set('America/Santiago');
	include "../conect.php";
	$tabla = "full3";
	
	$sql1="SELECT * FROM $tabla ORDER BY id_dato DESC";
	$consult1 = mysql_query($sql1);
	$numero_filas1 = mysql_fetch_array($consult1);
	
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
	{
	$min_vol = 0;
	$max_vol = 76;
	
	$min_cor = 0;
	$max_cor = 10;
	
	$min_temp = -10;
	$max_temp = 50;
	
	$min_pot = 0;
	$max_pot = 520;
	
	$min_rs = 0;
	$max_rs = 1500;
	
	$min_ta = -10;
	$max_ta = 50;	
	
	$min_rh = 0;
	$max_rh = 100;

	$min_vr = 0;
	$max_vr = 30;

	$min_cr = 0;
	$max_cr = 70;
	
	$min_vb = 0;
	$max_vb = 30;
	
	$min_cb = 0;
	$max_cb = 90;
	
	$min_vi = 0;
	$max_vi = 30;
	
	$min_ci = 0;
	$max_ci = 90;
	
	}
	
	//redirecciones
	$url_index = "http://cdisolar.hopto.org:8888/solar4d/";
	$url_agregar_dato = "http://cdisolar.hopto.org:8888/solar4d/script.php?v1=".$vars1."&c1=".$vars2."&t1=".$vars3."&v2=".$vars5."&c2=".$vars6."&t2=".$vars7."&v3=".$vars9."&c3=".$vars10."&t3=".$vars11."&rs=".$vars13."&ta=".$vars14."&hr=".$vars15."&vr=".$vars16."&cr=".$vars17."&vb=".$vars18."&cb=".$vars19."";
//http://cdisolar.hopto.org:8888/solar4/script.php?v1=11&c1=11&t1=11&p1=11&id1=1&v2=22&c2=22&t2=22&p2=22&id2=2&v3=33&c3=33&t3=33&p3=33&id3=3&rs=40&tr=50&th=51&vr=61&cr=62&vb=71&cb=72&vi=81&ci=82
	
	//Combinar formulario de ajax para envio por post Ajax -> 4
	$array = array();
	
	$url_agregar_dato_post = "http://cdisolar.hopto.org:8888/solar4d/script.php?v1=".$vars1."&c1=".$vars2."&t1=".$vars3."&v2=".$vars5."&c2=".$vars6."&t2=".$vars7."&v3=".$vars9."&c3=".$vars10."&t3=".$vars11."&rs=".$vars13."&ta=".$vars14."&hr=".$vars15."&vr=".$vars16."&cr=".$vars17."&vb=".$vars18."&cb=".$vars19."";
		
	//Obtener url + host
	$url= $_SERVER["REQUEST_URI"];
	$host= $_SERVER["HTTP_HOST"];
	
	//Obtener url + host
	$url= $_SERVER["REQUEST_URI"];
	$host= $_SERVER["HTTP_HOST"];
	
	$limitI = 0;
	$limitF = 1;
	?>

	
	<table class="table row"> <!--<table class="table" id="sampleOne"> -->
	<thead class="col-xs-12" > 
		<tr>
			<th class="inicial1">ID Dato</th>
			<th class="inicial2">Fecha</th>
			<th class="inicial3">Horario</th>
			<th class="inicial4" style="display: table-cell;">Datos</th>
		</tr>
	</thead>
	<tbody id="tbody_pincipal" class="col-xs-12">
	<?php
	
	echo "<b>Numero de Registros:".$num = $numero_filas1['id_dato']."</b>";
	
	error_reporting(0);
	
/*
Nombres de campos de la tabla full3	
id_dato,fecha, hora, 
volp1, corp1, tempp1, potp1, idpanel1, 
volp2, corp2, tempp2, potp2, idpanel2,
volp3, corp3, tempp3, potp3, idpanel3,
radiacion_solar, temperatura_relativa, vol_regulador, cor_regulador, vol_bateria, cor_bateria, vol_inversor, cor_inversor
*/ 	
	//30 min de datos => 0,122
	$sql="SELECT * FROM $tabla ORDER BY id_dato desc limit $limitF";
	$consult = mysql_query($sql);
	$numero_filas = mysql_num_rows($consult);
	if($numero_filas > 0){
	while($resultados = mysql_fetch_array($consult)){
	?>
	<tr style="overflow-x:scroll;border: #ddd solid 1px;border-radius: 10px;">
		<td class="inicial1 display_table_cell" >
			<span class="inicial1 ocultar_iddatoTDS" >
			<?php 
				echo $resultados['id_dato'];		
			?>
			</span>
		</td>
		<td class="inicial2 display_table_cell" >
			<span class="inicial2 ocultar_iddatoTDS" >
			<?php 
				echo utf8_decode($resultados['fecha']);		
			?>
			</span>
		</td>
		<td class="inicial3 display_table_cell" >
			<span class="inicial3 ocultar_iddatoTDS" >
			<?php 
				echo utf8_decode($resultados['hora']);
			?>
			</span>
		</td>
		<td class="inicial4 col-xs-12" style="overflow-x:scroll;">	
			<div class="bs-example lecturaDatos" data-example-id="panel-with-heading2"> 
			<div class="panel panel-default"> 
			<table class="borde_bot">
			<div class="panel-heading">
				<thead style="vertical-align: text-top">
					<tr>	
					<td>
						<b>
						Medidas
						</b>			
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
			</div> 	
			<div class="panel-body">
			<tbody>
				<tr>
					<td class="width_100">
						<b>Voltaje</b><br>
						<b>Corriente</b><br>
						<b>Potencia</b>						
					</td>
					<td class="width_100">
						<?php
						//voltaje 1
						$v1M = $resultados['volp1'];
						if($v1M < $min_vol ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $v1M;
							echo "</i>";
						}else if($v1M > $max_vol ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $v1M;
							echo "</i>";							
						}else if($v1M > $min_vol || $v1M < $max_vol ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $v1M;
							echo "</i>";
						}
						?>
						<br>
						<?php
						//corriente 1
						$c1M = $resultados['corp1'];
						if($c1M < $min_cor ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $c1M;
							echo "</i>";
						}else if($c1M > $max_cor ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $c1M;
							echo "</i>";							
						}else if($c1M > $min_cor || $c1M < $max_cor ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $c1M;
							echo "</i>";
						}
						?>
						<br>
						<?php
						//Potencia 1
						$set_pt1 = $resultados['potp1'];
						$p1M = number_format($set_pt1, 2, '.', '');
						if($p1M < $min_pot ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $p1M;
							echo "</i>";
						}else if($p1M > $max_pot ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $p1M;
							//echo utf8_decode($resultados['potp1']);
							echo "</i>";							
						}else if($p1M > $min_pot || $p1M < $max_pot ){							
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
						$v2M = $resultados['volp2'];
						if($v2M < $min_vol ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $v2M;
							echo "</i>";
						}else if($v2M > $max_vol ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $v2M;
							echo "</i>";							
						}else if($v2M > $min_vol || $v2M < $max_vol ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $v2M;
							echo "</i>";
						}
						?>
						<br>
						<?php
						//Corriente 2
						$c2M = $resultados['corp2'];
						if($c2M < $min_cor ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $c2M;
							echo "</i>";
						}else if($c2M > $max_cor ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $c2M;
							echo "</i>";							
						}else if($c2M > $min_cor || $c2M < $max_cor ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $c2M;
							echo "</i>";
						}
						?>
						<br>
						<?php
						//Potencia 2
						$set_pt2 = $resultados['potp2'];
						$p2M = number_format($set_pt2, 2, '.', '');
						if($p1M < $min_pot ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $p2M;
							echo "</i>";
						}else if($p2M > $max_pot ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $p2M;
							echo "</i>";							
						}else if($p2M > $min_pot || $p2M < $max_pot ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $p2M;
							echo "</i>";
						}
						?>
					</td>
					<td class="width_100">						
						<?php
						//voltaje 3
						$v3M = $resultados['volp3'];
						if($v3M < $min_vol ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $v3M;
							echo "</i>";
						}else if($v3M > $max_vol ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $v3M;
							echo "</i>";							
						}else if($v3M > $min_vol || $v3M < $max_vol ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $v3M;
							echo "</i>";
						}
						?> 
						<br>						
						<?php
						//Corriente 3
						$c3M = $resultados['corp3'];
						if($c3M < $min_cor ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $c3M;
							echo "</i>";
						}else if($c3M > $max_cor ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $c3M;
							echo "</i>";							
						}else if($c3M > $min_cor || $c3M < $max_cor ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $c3M;
							echo "</i>";
						}
						?> 
						<br>						
						<?php
						//Potencia 3
						$set_pt3 = $resultados['potp3'];
						$p3M = number_format($set_pt3, 2, '.', '');
						if($p1M < $min_pot ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $p3M;
							echo "</i>";
						}else if($p3M > $max_pot ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $p3M;
							echo "</i>";							
						}else if($p3M > $min_pot || $p2M < $max_pot ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $p3M;
							echo "</i>";
						}
						?>
					</td>
					<td class="width_100">					
						<i><?php echo "($min_vol | $max_vol)";?></i><br>
						<i><?php echo "($min_cor | $max_cor)";?></i><br>
						<i><?php echo "($min_pot | $max_pot)";?></i>
					</td>
					<td class="width_100">					
						<i>[V]</i><br>
						<i>[A]</i><br>
						<i>[W]</i>
					</td>
				</tr>
				</tbody>
			</div>
			</table>
			</div> 
			</div>
			
			<table class="display_none">
			<tr>
				<td>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
					Panel content
					</div>
				</div>
				</td>
			</tr>
			</table>
			
			<table class="">
			<tr>
				<td style="width: 500px;">
					<div class="bs-example" data-example-id="panel-with-heading"> 
						<div class="panel panel-default"> 
							<div class="panel-heading">
								<b>Corrientes, Potencias y Energias Totales:</b>
							</div> 
							<div class="panel-body"> 
								<?php 
								
								$corp1 = $resultados['corp1'];
								$potp1 = $resultados['potp1'];

								$corp2 = $resultados['corp2'];
								$potp2 = $resultados['potp2'];

								$corp3 = $resultados['corp3'];
								$potp3 = $resultados['potp3'];

								$corTot = $corp1+$corp2+$corp3;
								$potTot = $potp1+$potp2+$potp3;
								
								
								{
								//$fecha = "7/03/2017";
								$fecha = utf8_decode($resultados['fecha']);
								//valores array Energia Irradiada Acumulada
								$energia_irradiada_acumuladaF = array();
								$sql3 = "SELECT energia_irradiada_acumulada FROM `full3` WHERE `fecha` = '$fecha' and 
								hora > '00:00:00' and hora < '23:59:59'";
								$consult3 = mysql_query($sql3);
								while($resultado3 = mysql_fetch_array($consult3)){
									array_push($energia_irradiada_acumuladaF,$resultado3['energia_irradiada_acumulada']);
									//$ene_irr_acum_min = $resultado3['energia_irradiada_acumulada'];			
								}
								 $MAXEIRR = max($energia_irradiada_acumuladaF);
								 $MINEIRR = min($energia_irradiada_acumuladaF);
								 //$MAXEIRR = number_format($MAXEIRR, 4, '.',',');
								 //$MINEIRR = number_format($MINEIRR, 4, '.',',');
								//echo "<br>energia_irradiada_acumulada_max:	".$MAXEIRR."<br>";
								//echo "energia_irradiada_acumulada_min:	".$MINEIRR."<br>";
								}
								
								
								{
								//valores array Energia Captada Acumulada
								$energia_captada_acumuladaF = array();
								$sql4 = "
								SELECT energia_captada_acumulada FROM `full3` WHERE `fecha` = '$fecha' and 
								hora > '00:00:00' and hora < '23:59:59'";
								$consult4 = mysql_query($sql4);
								while($resultado4 = mysql_fetch_array($consult4)){
									array_push($energia_captada_acumuladaF,$resultado4['energia_captada_acumulada']);
									//$ene_irr_acum_min = $resultado3['energia_captada_acumulada'];
									/*
									foreach ($energia_captada_acumuladaF as $valor) {
										echo $valor."<br>";
									}*/	
								}
								 $MAXEcap = max($energia_captada_acumuladaF);
								 $MINEcap = min($energia_captada_acumuladaF);
								//echo "<br>energia_captada_acumulada max:	".$MAXEcap."<br>";
								//echo "energia_captada_acumulada min:	".$MINEcap."<br>";
								}
								
								{
								//valores array Energia regulador Acumulada
								$pot_acumulada_reguladorF = array();
								$sql5 = "
								SELECT pot_acumulada_regulador FROM `full3` WHERE `fecha` = '$fecha' and 
								hora > '00:00:00' and hora < '23:59:59'";
								$consult5 = mysql_query($sql5);
								while($resultado5 = mysql_fetch_array($consult5)){
									array_push($pot_acumulada_reguladorF,$resultado5['pot_acumulada_regulador']);
									//$ene_irr_acum_min = $resultado3['pot_acumulada_regulador'];			
								}
								 $MAXEreg = max($pot_acumulada_reguladorF);
								 $MINEreg = min($pot_acumulada_reguladorF);
								// $MAXEreg = number_format($MAXEreg, 4, '.',',');
								 //$MINEreg = number_format($MINEreg, 4, '.',',');
								//echo "<br>pot_acumulada_regulador max:	".$MAXEreg."<br>";
								//echo "pot_acumulada_regulador min:	".$MINEreg."<br>";
								}
								
								?>
								<b>
								Corriente Total: 
								</b>
								<?php echo $corTot."[A]";?>
								<br>
								<b>
								Potencia Total: 
								</b>
								<?php echo $potTot."[W]";?>
								<br>								
								<b>Energia Irradiada Acumulada Diaria:</b> 
								<?php
								//echo "max:".$MAXEIRR."<br>"; 
								//echo "min:".$MINEIRR."<br>";
								$EnergiaDiaria_Irr = $MAXEIRR - $MINEIRR;
								echo $EnergiaDiaria_Irr = number_format($EnergiaDiaria_Irr, 1, '.','');
								echo " wH<br>";
								?>							
								<b>Energia Captada Acumulada Diaria:</b> 
								<?php
								//echo "max:".$MAXEcap."<br>"; 
								//echo "min:".$MINEcap."<br>";
								$EnergiaDiaria_Cap = $MAXEcap - $MINEcap;
								echo $EnergiaDiaria_Cap = number_format($EnergiaDiaria_Cap, 1, '.','');
								echo " wH<br>";
								?>
								<b>Energia Regulador Acumulada Diaria:</b> 
								<?php
								//echo "max:".$MAXEreg."<br>"; 
								//echo "min:".$MINEreg."<br>";
								$EnergiaDiaria_Reg = $MAXEreg - $MINEreg;
								echo $EnergiaDiaria_Reg = number_format($EnergiaDiaria_Reg, 1, '.','');
								echo " wH<br>";
								
								
								$utilizacion_0 = $EnergiaDiaria_Cap / $EnergiaDiaria_Irr;
								$utilizacion_1 = $utilizacion_0 * 16/100;
								echo "<b>Utilización de Energia:</b>".$utilizacion_1 = number_format($utilizacion_1, 2, ',','');
								
								
								?>
							</div> 
						</div>
					</div>
				</td>
			</tr>
			</table>
			<table class="">
			<thead class="panel panel-default">
				<th class="panel-heading">
					Medidas
				</th>
				<th class="panel-heading">
					Valores
				</th>
				<th class="panel-heading">
					Rangos
				</th>
				<th class="panel-heading">
					Un. Medidas
				</th>
			</thead>
			<tbody class="panel panel-default">
			<tr class="">
				<td class="width_160">
					<b>Temp. Paneles</b>
				</td>
				<td class="txt_center">
					<?php
					$taM = $resultados['tempp0'];
					if($taM < $min_ta ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $taM;
						echo "</i>";
					}else if($taM > $max_ta ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $taM;
						echo "</i>";							
					}else if($taM > $min_ta || $taM < $max_ta ){							
						echo "<i class='btn-info ajuste_txt'>";
						echo $taM;
						echo "</i>";
					}
					?>
				</td>
				<td class="">
					<?php echo "($min_ta | $max_ta)";?>
				</td>
				<td class="">
					[&#176;C]
				</td>
			</tr>
			<tr class="">
				<td class="width_160">
					<b>Radiacion Solar</b>
				</td>
				<td class="txt_center">
					<?php
					$rsM = $resultados['radiacion_solar'];
					if($rsM < $min_rs ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $rsM;
						echo "</i>";
					}else if($rsM > $max_rs ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $rsM;
						echo "</i>";							
					}else if($rsM > $min_rs || $rsM < $max_rs ){							
						echo "<i class='btn-info ajuste_txt'>";
						echo $rsM;
						echo "</i>";
					}
					?>
					
				</td>
				<td class="">
					<?php echo "($min_rs | $max_rs)";?>
				</td>
				<td class="">
					[W/m2]
				</td>
			</tr>
			<tr>
				<td class="width_160">
					<b>T.A.(Gabinete) </b>
				</td>
				<td class="txt_center">
				<?php
				$taM = $resultados['temp_ambiente'];
				if($taM < $min_ta ){
					echo "<i class='btn-warning ajuste_txt'>";
					echo $taM;
					echo "</i>";
				}else if($taM > $max_ta ){
					echo "<i class='btn-danger ajuste_txt'>";
					echo $taM;
					echo "</i>";
				}else if($taM > $min_ta || $taM < $max_ta ){
					echo "<i class='btn-info ajuste_txt'>";
					echo $taM;
					echo "</i>";
				}
				?>
				
				</td>
				<td class="">
					 <?php echo "($min_ta | $max_ta)";?>
				</td>
				<td class="">
					[&#176;C]
				</td>
			</tr>
			<tr>
				<td class="width_160">
					<b>Humedad Relativa </b>
				</td>
				<td class="txt_center">
				<?php
				$hrM = $resultados['humedad_relativa'];
				if($hrM < $min_rh ){
					echo "<i class='btn-warning ajuste_txt'>";
					echo $hrM;
					echo "</i>";
				}else if($hrM > $max_rh ){
					echo "<i class='btn-danger ajuste_txt'>";
					echo $hrM;
					echo "</i>";
				}else if($hrM > $min_rh || $hrM < $max_rh ){
					echo "<i class='btn-info ajuste_txt'>";
					echo $hrM;
					echo "</i>";
				}
				?>
				
				</td>
				<td class="">
					 <?php echo "($min_rh | $max_rh)";?>
				</td>
				<td class="">
					[%]
				</td>
			</tr>
			<tr>
				<td class="width_160">
					<b>Voltaje Regulador </b>
				</td>
				<td class="txt_center">
				<?php
				$vrM = $resultados['vol_regulador'];
				if($vrM < $min_vr ){
					echo "<i class='btn-warning ajuste_txt'>";
					echo $vrM;
					echo "</i>";
				}else if($vrM > $max_vr ){
					echo "<i class='btn-danger ajuste_txt'>";
					echo $vrM;
					echo "</i>";
				}else if($vrM > $min_vr || $vrM < $max_vr ){
					echo "<i class='btn-info ajuste_txt'>";
					echo $vrM;
					echo "</i>";
				}
				?> 
				
				</td>
				<td class="">
					<?php echo "($min_vr | $max_vr)";?>
				</td>
				<td class="">
					[V]
				</td>
			</tr>
			<tr>
				<td class="width_160">
					<b>Corriente Regulador </b>
				</td>
				<td class="txt_center">
				<?php
				$crM = $resultados['cor_regulador'];
				if($crM < $min_cr ){
					echo "<i class='btn-warning ajuste_txt'>";
					echo $crM;
					echo "</i>";
				}else if($crM > $max_cr ){
					echo "<i class='btn-danger ajuste_txt'>";
					echo $crM;
					echo "</i>";							
				}else if($crM > $min_cr || $crM < $max_cr ){							
					echo "<i class='btn-info ajuste_txt'>";
					echo $crM;
					echo "</i>";
				}
				?>
				
				</td>
				<td class="">
					<?php echo "($min_cr | $max_cr)";?>
				</td>
				<td class="">
					[A]
				</td>
			</tr>
			<tr>
				<td class="width_160">
					<b>Voltaje Bateria </b>
				</td>
				<td class="txt_center">
				<?php
				$vbM = $resultados['vol_bateria'];
				if($vbM < $min_vb ){
					echo "<i class='btn-warning ajuste_txt'>";
					echo $vbM;
					echo "</i>";
				}else if($vbM > $max_vb ){
					echo "<i class='btn-danger ajuste_txt'>";
					echo $vbM;
					echo "</i>";							
				}else if($vbM > $min_vb || $vbM < $max_vb ){							
					echo "<i class='btn-info ajuste_txt'>";
					echo $vbM;
					echo "</i>";
				}
				?>
				
				</td>
				<td class="">
					<?php echo "($min_vb | $max_vb)";?>
				</td>
				<td class="">
					[V]
				</td>
			</tr>
			<tr>
				<td class="width_160">
					<b>Corriente Bateria </b>
				</td>
				<td class="txt_center">
				<?php
				$cbM = $resultados['cor_bateria'];
				if($cbM < $min_cb ){
					echo "<i class='btn-warning ajuste_txt'>";
					echo $cbM;
					echo "</i>";
				}else if($cbM > $max_cb ){
					echo "<i class='btn-danger ajuste_txt'>";
					echo $cbM;
					echo "</i>";							
				}else if($cbM > $min_cb || $cbM < $max_cb ){							
					echo "<i class='btn-info ajuste_txt'>";
					echo $cbM;
					echo "</i>";
				}
				?>
			
				</td>
				<td class="">
					<?php echo "($min_cb | $max_cb)";?>
				</td>
				<td class="">
					[A]
				</td>
			</tr>
			
			</tbody>
		</table>
		</td>
		
	</tr>
	<?php
	}
	}
	?>
	</tbody>	
	</table>