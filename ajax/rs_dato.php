<?php
//error_reporting(0);
include "conn2.php";
$tabla = 'full3';
	
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
	/*
	0 = 0;
	76 = 76;
	
	0 = 0;
	10 = 10;
	
	-10 = -10;
	50 = 50;
	
	0 = 0;
	520 = 520;
	
	0 = 0;
	1500 = 1500;
	
	-10 = -10;
	50 = 50;	
	
	0 = 0;
	100 = 100;

	0 = 0;
	30 = 30;

	0 = 0;
	70 = 70;
	
	0 = 0;
	30 = 30;
	
	0 = 0;
	90 = 90;
	
	0 = 0;
	30 = 30;
	*/
	
	}
	
	//redirecciones
	$url_index = "http://cdisolar.hopto.org:8888/full3/";
	$url_agregar_dato = "http://cdisolar.hopto.org:8888/full3/script.php?v1=".$vars1."&c1=".$vars2."&t1=".$vars3."&v2=".$vars5."&c2=".$vars6."&t2=".$vars7."&v3=".$vars9."&c3=".$vars10."&t3=".$vars11."&rs=".$vars13."&ta=".$vars14."&hr=".$vars15."&vr=".$vars16."&cr=".$vars17."&vb=".$vars18."&cb=".$vars19."";
//http://cdisolar.hopto.org:8888/solar4/script.php?v1=11&c1=11&t1=11&p1=11&id1=1&v2=22&c2=22&t2=22&p2=22&id2=2&v3=33&c3=33&t3=33&p3=33&id3=3&rs=40&tr=50&th=51&vr=61&cr=62&vb=71&cb=72&vi=81&ci=82
	
	//Combinar formulario de ajax para envio por post Ajax -> 4
	$array = array();
	
	$url_agregar_dato_post = "http://cdisolar.hopto.org:8888/full3/script.php?v1=".$vars1."&c1=".$vars2."&t1=".$vars3."&v2=".$vars5."&c2=".$vars6."&t2=".$vars7."&v3=".$vars9."&c3=".$vars10."&t3=".$vars11."&rs=".$vars13."&ta=".$vars14."&hr=".$vars15."&vr=".$vars16."&cr=".$vars17."&vb=".$vars18."&cb=".$vars19."";
		
	//Obtener url + host
	$url= $_SERVER["REQUEST_URI"];
	$host= $_SERVER["HTTP_HOST"];
	
	//Obtener url + host
	$url= $_SERVER["REQUEST_URI"];
	$host= $_SERVER["HTTP_HOST"];
	
	$limitI = 0;
	$limitF = 1;
	
$tmp="";

$plistar=$_POST["plistar"];

if($plistar == "listado"){
	echo listar_detalle();
}

function listar_detalle(){
	
	?>
	<table class="table" style="color:#333;">
	<thead> 
	<tr> 
		<th class='inicial1'>ID Dato</th>
		<th class='inicial2'>Fecha</th>
		<th class='inicial3'>Horario</th>
		<th class='inicial4' style='display: table-cell;'>Datos</th>
		</tr>	
		</thead>
	<tbody>		
		<?php
		$sql="select * from full3 order by id_dato desc limit 0,1";
		$r=mysql_query($sql);
		while($resultados=mysql_fetch_array($r)){
				
				/*
				$tmp.="<tr>";
				$tmp.="<td>".$res["id_dato"]."</td>";
				$tmp.="</tr>";
				*/	
		?>
		<tr style="overflow-x:scroll;border: #ddd solid 1px;border-radius: 10px;">
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
				
				<table class="panel panel-default borde_bot" >
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
					<tbody class="panel-body">
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
							if($v1M < 0 ){
								echo "<i class='btn-warning ajuste_txt'>$v1M</i>";
							}else if($v1M > 76 ){
								echo "<i class='btn-danger ajuste_txt'>$v1M</i>";							
							}else if($v1M > 0 || $v1M < 76 ){						
								echo "<i class='btn-info ajuste_txt'>$v1M</i>";
							}
							?>
							<br>
							<?php
							//corriente 1
							$c1M = $resultados['corp1'];
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
							<br>
							<?php
							//Potencia 1
							$set_pt1 = $resultados['potp1'];
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
							$v2M = $resultados['volp2'];
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
							<br>
							<?php
							//Corriente 2
							$c2M = $resultados['corp2'];
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
							<br>
							<?php
							//Potencia 2
							$set_pt2 = $resultados['potp2'];
							$p2M = number_format($set_pt2, 2, '.', '');
							if($p1M < 0 ){
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
							$v3M = $resultados['volp3'];
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
							<br>						
							<?php
							//Corriente 3
							$c3M = $resultados['corp3'];
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
							<br>						
							<?php
							//Potencia 3
							$set_pt3 = $resultados['potp3'];
							$p3M = number_format($set_pt3, 2, '.', '');
							if($p1M < 0 ){
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
						<td class="width_100">					
							
							<i><?php printf ("(0 |76)");?></i><br>						
							<i><?php echo "(0 | 10)";?></i><br>
							<i><?php echo "(0 | 520)";?></i>
						</td>
						<td class="width_100">					
							<i>[V]</i><br>
							<i>[A]</i><br>
							<i>[W]</i>
						</td>
					</tr>
					</tbody>
				
				</table>
				<table class="" style="color:#333;">
				<tr>
					<td style="width: 100%;">
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
									<b>Energia Irradiada Diaria Acumulada:</b> 
									<?php
									$EnergiaDiaria_Irr = $resultados['EnergiaDiaria_Irr'];
									//echo "<br>Energia Diaria Irr BD:";
									$EnergiaDiaria_IrrF = $EnergiaDiaria_Irr;
									$EnergiaDiaria_IrrF = number_format($EnergiaDiaria_IrrF, 2, ',','');
									echo $EnergiaDiaria_IrrF." [wH]";
									?>
									<br>
									<b>Energia Captada Diaria Acumulada:</b> 
									<?php
									$EnergiaDiaria_Cap = $resultados['EnergiaDiaria_Cap'];
									//echo "<br>Energia Diaria Cap BD:";
									$EnergiaDiaria_CapF = $EnergiaDiaria_Cap;
									$EnergiaDiaria_CapF = number_format($EnergiaDiaria_CapF, 2, ',','');
									echo $EnergiaDiaria_CapF." [wH]";
									?>
									<br>
									<b>Energia Regulador Diaria Acumulada:</b> 
									<?php
									$EnergiaDiaria_Reg = $resultados['EnergiaDiaria_Reg'];
									//echo "<br>Energia Diaria Reg BD:";
									$EnergiaDiaria_RegF = $EnergiaDiaria_Reg;
									$EnergiaDiaria_RegF = number_format($EnergiaDiaria_RegF, 2, ',','');
									echo $EnergiaDiaria_RegF." [wH]";								
									?>
									<br>
									<b>Utilización de Energía:</b> 
									<?php
									$utilizacion_energia = $resultados['utilizacion_energia'];
									//echo "<br>Utilización Energia BD:";
									$utilizacion_energiaF = $utilizacion_energia*100;
									$utilizacion_energiaF = number_format($utilizacion_energiaF, 2, ',','');
									echo $utilizacion_energiaF."%";
									
									
									?>
								</div> 
							</div>
						</div>
					</td>
				</tr>
				</table>
				<table class="panel panel-default" style="width: 100%;">
				<thead class="panel-heading">
					<th class="">
						Medidas
					</th>
					<th class="">
						Valores
					</th>
					<th class="">
						Rangos
					</th>
					<th class="">
						Un. Medidas
					</th>
				</thead>
				<tbody class="panel panel-body">
				<tr class="">
					<td class="">
						<b>Temp. Paneles</b>
					</td>
					<td class="txt_center">
						<?php
						$taM = $resultados['tempp0'];
						if($taM < -10 ){
							echo "<i class='btn-warning ajuste_txt'>";
							echo $taM;
							echo "</i>";
						}else if($taM > 50 ){
							echo "<i class='btn-danger ajuste_txt'>";
							echo $taM;
							echo "</i>";							
						}else if($taM > -10 || $taM < 50 ){							
							echo "<i class='btn-info ajuste_txt'>";
							echo $taM;
							echo "</i>";
						}
						?>
					</td>
					<td class="">
						<?php echo "(-10 | 50)";?>
					</td>
					<td class="">
						[&#176;C]
					</td>
				</tr>
				<tr class="">
					<td class="">
						<b>Radiacion Solar</b>
					</td>
					<td class="txt_center">
						<?php
						$rsM = $resultados['radiacion_solar'];
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
					<td class="">
						<?php echo "(0 | 1500)";?>
					</td>
					<td class="">
						[W/m2]
					</td>
				</tr>
				<tr>
					<td class="">
						<b>T.A.(Gabinete) </b>
					</td>
					<td class="txt_center">
					<?php
					$taM = $resultados['temp_ambiente'];
					if($taM < -10 ){
						echo "<i class='btn-warning ajuste_txt'>";
						echo $taM;
						echo "</i>";
					}else if($taM > 50 ){
						echo "<i class='btn-danger ajuste_txt'>";
						echo $taM;
						echo "</i>";
					}else if($taM > -10 || $taM < 50 ){
						echo "<i class='btn-info ajuste_txt'>";
						echo $taM;
						echo "</i>";
					}
					?>				
					</td>
					<td class="">
						 <?php echo "(-10 | 50)";?>
					</td>
					<td class="">
						[&#176;C]
					</td>
				</tr>
				<tr>
					<td class="">
						<b>Humedad Relativa </b>
					</td>
					<td class="txt_center">
					<?php
					$hrM = $resultados['humedad_relativa'];
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
					<td class="">
						 <?php echo "(0 | 100)";?>
					</td>
					<td class="">
						[%]
					</td>
				</tr>
				<tr>
					<td class="">
						<b>Voltaje Regulador </b>
					</td>
					<td class="txt_center">
					<?php
					$vrM = $resultados['vol_regulador'];
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
					<td class="">
						<?php echo "(0 | 30)";?>
					</td>
					<td class="">
						[V]
					</td>
				</tr>
				<tr>
					<td class="">
						<b>Corriente Regulador </b>
					</td>
					<td class="txt_center">
					<?php
					$crM = $resultados['cor_regulador'];
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
					<td class="">
						<?php echo "(0 | 70)";?>
					</td>
					<td class="">
						[A]
					</td>
				</tr>
				<tr>
					<td class="">
						<b>Voltaje Bateria </b>
					</td>
					<td class="txt_center">
					<?php
					$vbM = $resultados['vol_bateria'];
					if($vbM < 0 ){
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
					<td class="">
						<?php echo "(0 | 30)";?>
					</td>
					<td class="">
						[V]
					</td>
				</tr>
				<tr>
					<td class="">
						<b>Corriente Bateria </b>
					</td>
					<td class="txt_center">
					<?php
					$cbM = $resultados['cor_bateria'];
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
					<td class="">
						<?php echo ("0 |90");?>
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