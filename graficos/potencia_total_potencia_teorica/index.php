<?php
	include('../../includes/conexion2.php');
	date_default_timezone_set('America/Santiago');	

	$fechaI = date('d/m/Y');
	$fechaI2 = date('Y-m-j');
	$tabla = "solo_medida_calculos";
	
	$data = array();	
	//echo $fhora;	
	//echo "$fmin:".$fmin;
	$anio = date('Y');
	$mes = date('m');
	$dia = date('j');
	$hora = date('H');
	$min = date('i');
	$seg = date('s');
	
	$horaD =  $hora - 10;
	
	if($horaD == 0){
		//$horaD = $horaD."0";
		$horaD = "00";		
	}else
	if($horaD > -10 and $horaD < 0){
		/*$horaD = $horaD * -1;
		$horaD = "0".$horaD;*/
		$horaD = "00";
	}else{
		//$horaD = "0".$horaD;	
		$horaD = "00";
		/*if($horaD == 24){
			$horaD = "00";
		}*/
	}
	$horario = $horaD.':'.$min.':'.$seg;
	$Getfloat0 = "";
	$Getfloat1 = "";	
	
	$sql = "SELECT * FROM $tabla where fecha = '$fechaI2' and hora > '$horario' ORDER by id_medida ASC";
		if ($conexion_g->connect_errno) {
			echo "Errno: " . $conexion_g->connect_errno . "\n";
			echo "Error: " . $conexion_g->connect_error . "\n";
			exit;
		}
		if (!$resultado = $conexion_g->query($sql)) {
			echo "Error conexion_g.";
			exit;
		}
		while ($resultados = $resultado->fetch_assoc()) {
			$pot_tot = $resultados['potencia_total'];
			$pot_tot1 = str_replace("",null,$pot_tot);
			if($pot_tot1 < 1601 ){
				$Getfloat0 = Getfloat($pot_tot1);
			}			
			$pot_tot_teo = $resultados['potencia_total_teorica'];		
			if($pot_tot_teo < 1601){
				$Getfloat1 = Getfloat($pot_tot_teo);
			}			
			$fecha2 = explode("-",$resultados['fecha']);
			$horario2 = explode(":",$resultados['hora']);
			$fmes = $fecha2[1] - 1;
			
			array_push($data,'[new Date('.$fecha2['0'].','.$fmes.','.$fecha2['2'].','.$horario2['0'].','.$horario2['1'].','.$horario2['2'].'),'.$Getfloat0.','.$Getfloat1.'],');
		}
		$resultado->free();
		$conexion_g->close();	
	
	?>
<meta charset="UTF-8">
<meta name="robots" content="Index, NoFollow">
<script type="text/javascript" src="loader.js"></script>
<meta http-equiv="refresh" content="30">
<script>
      google.charts.load('current', {'packages':['line', 'corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var button = document.getElementById('change-chart');
      var chartDiv = document.getElementById('chart_div');

      var data = new google.visualization.DataTable();
      data.addColumn('date', '');
      data.addColumn('number', "W Total");
      data.addColumn('number', "W Teorica");

        //[new Date(2014, 0),  -.5,  5.7],
      data.addRows([<?php echo join ($data);?>[null,null,null]]);

      var materialOptions = {
        chart: {
          title: 'Potencia Total y Teorica'
        },
        height: 300,
		/*
		series: {
          // Gives each series an axis name that matches the Y-axis below.
          0: {axis: 'Potencia_total'},
          1: {axis: 'Potencia_teorica'}
        },
        axes: {
          // Adds labels to each axis; they don't have to match the axis names.
		  y: {	
            Potencia_total: {label: 'Potencia Total'},
            Potencia_teorica: {label: 'Potencia Teorica'}
          }
        }
		*/
      }
		var materialChart = new google.charts.Line(chartDiv);
        materialChart.draw(data, materialOptions);
	}
	//setInterval(drawChart,10000);
	</script>
  <div id="chart_div" style="width:100%;"></div>
   <?php
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
	
	}

	if(preg_match("#([0-9\.]+)#", $str, $match)){
		return floatval($match[0]);
	}else{
		return floatval($str);
	}
	}
   ?>