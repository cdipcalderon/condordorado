<?php
	/*
	setInterval(function(){
	listar_tabla(),corriente_total(),potencia_total(),potencia_total_teorica(),potencia_bateria(),
	EnergiaDiaria_Irradiadia(),EnergiaDiaria_Captada(),EnergiaDiaria_Regulador()},tiempo_actualizar);
	*/
$value = 'cualquier cosa';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expira en una hora */
setcookie("TestCookie", $value, time()+3600, "/cookies/", "voltaje-bateria-regulador.php", 1);

/*
echo $_COOKIE["TestCookie"];
echo "<br>";

//Otra manera de depurar/probar es viendo todas las cookies
echo "<br>";
print_r($_COOKIE);
*/
//header("Cache-Control: no-store, no-cache, must-revalidate");
//<META HTTP-EQUIV="Pragma" CONTENT="no-cache">

$tabla  = "original";
date_default_timezone_set('America/Santiago');
setlocale(LC_ALL,"es_ES");

	header("Expires: Mon, 03 Jun 2010 06:00:00 GTM");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

if(@session_start() == false){session_destroy();session_start();}
include "../conn2.php";
date_default_timezone_set('America/Santiago');
	
if(isset($_SESSION['nickname'])){	
	$nickname = $_SESSION["nickname"];	
	$result = mysql_query("SELECT * FROM usuarios WHERE nickname = '$nickname'");
	$resultados = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html id="web">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="refresh" content="300">
	<title>CDI Voltaje Batería & Regulador| Adm: <?php echo $_SESSION['nickname'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91488772-1', 'auto');
  ga('send', 'pageview');

</script>
</head>		
<?php include "includes/alerta.php";?>

<body class="hold-transition skin-blue sidebar-mini">
  
<div class="wrapper">
  <header class="main-header">
    <a href="monitor.php" class="logo">
      <span class="logo-mini"><b>CDI</b></span>
      <span class="logo-lg"><b>CDI</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  <div class="navbar-custom-menu" style="float: left;position: relative;left: 5%;">
	  <div>
		<table>
		<tbody>
		<tr>
			<td>
		<h3 class="" id="tiempo_ahora" style="position: relative;left: 0%;margin: 0;text-align: -webkit-center;
			font-size: 40px;font-weight: bold;color: #ffffff;">
		</h3>
			</td>
			
		</tr>
		</tbody>
		</table>
		
	  </div>
	  </div>
	  
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
		 	
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php 
				$user = $resultados['nickname'];
				
				if($user == "cesar"){
				
				echo '<img src="dist/img/user0.jpg" class="user-image" alt="User Image">';
				
				}else{
				
				echo '<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">';
				
				}
				?>
			  
			  <span class="hidden-xs"><?php 
				$str = $resultados['nickname'];
				echo $str = strtoupper($str);
			  ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php
                if($user == "cesar"){
					echo '<img src="dist/img/user0.jpg" class="img-circle" alt="User Image">';
				}else{
					echo '<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">';
				}
				?>
                <p>
				<?php 
				$str = $resultados['nickname'];
				echo $str = strtoupper($str);
				echo " | ";
				$cargo = $resultados['cargo'];
				echo $cargo = strtoupper($cargo);	
				?>
                </p>
				<a href="cerrar.php" class="btn btn-default btn-flat">					
					<span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion
				</a>
              </li>
              <!-- Menu Body -->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
			<?php
			if($user == "cesar"){?>
			<img src="dist/img/user0.jpg" class="img-circle" alt="User Image">
			<?php
			}else{?>
			<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			<?php }?>
        </div>
        <div class="pull-left info">
			<p>
			<b>Bienvenido: 	<?php 
				$str = $resultados['nickname'];
				echo $str = strtoupper($str);
			  ?>
			</b>
			</p>
			<a href="cerrar.php" style="color:#fff;"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a>
			<br>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Principal</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="monitor.php"><i class="fa fa-circle-o"></i> Monitor</a></li>
            <li><a href="radiacion-solar-y-potencia-total.php"><i class="fa fa-circle-o"></i> Radiación y Potencia[w]</a></li>
			<li class="active"><a href="voltaje-bateria-regulador.php"><i class="fa fa-circle-o"></i> Batería y Regulador[V]</a></li>
			<li><a href="eficiencia-vs-radiacion-vs-potencia.php"><i class="fa fa-circle-o"></i> Eficiencia Radiación Potencia [w]</a></li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Energias</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="irradiada-captada-acumulada.php"><i class="fa fa-circle-o"></i> Irradiada - Captada</a></li>
					<li><a href="bateria-acumulada.php"><i class="fa fa-circle-o"></i> Batería</a></li>
					<li><a href="utilizada.php"><i class="fa fa-circle-o"></i> Utilizada</a></li>
				</ul>
			</li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tablero
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Tablero</li>		
      </ol>
    </section>

    <section class="content">
    <!-- bg-aqua bg-green bg-yellow bg-red -->
	<div class="box box-solid ">
		<div class="box-header">
			<div class="nav-tabs-custom" style="margin-bottom: 0px;">
			<!--
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
			-->
				<ul class="nav nav-tabs pull-left">	  
				  <li class="active"><a href="#tab_indicadres" data-toggle="tab"><i class="fa fa-list-alt"></i> Indicadores</a></li>
				  <li><a href="#tab_export_datos" data-toggle="tab">
				  <span class="fa fa-file-excel-o"></span>
				  <span class="glyphicon glyphicon-export"></span>
				  Exportar Datos</a></li>
				</ul>
				<ul class="nav nav-tabs pull-right">
					<li><button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button></li>
				</ul>
			</div>
			
		</div>
		<div class="box-body border-radius-none">
			<div class="tab-content no-padding">				  
				<div class="chart tab-pane" id="tab_export_datos">
					<div class="row">
					<div class="col-lg-2 col-xs-6">
					  <!-- bg-red bg-yellow bg-aqua bg-blue bg-light-blue bg-green 
						bg-navy:marino
						bg-teal:celeste
						bg-olive:verde oscuro
						bg-lime:verde claro
						bg-orange bg-fuchsia bg-purple bg-maroon bg-black bg-gray
						-->
					  <div class="small-box bg-gray ajuste_box">
						<div class="inner">
						<a href="#" style="color:#333;">
							<p onclick="confirma_exportar_todo()">Exportar Todo</p>
						</a>
						</div>
						<div class="icon">
						  <i class="glyphicon glyphicon-export"></i>
						</div>
					  </div>
					</div>
					<div class="col-lg-2 col-xs-6">
					  <div class="small-box bg-gray ajuste_box">
						<div class="inner">
							<a href="#" style="color:#333;">
								<p data-toggle="modal" data-target="#modal_export_por_fecha" >Exportar por Fecha</p>
							</a>
						</div>

						<div class="modal fade" id="modal_export_por_fecha" tabindex="-1" role="dialog" aria-labelledby="Label_export_por_fecha">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="Label_export_por_fecha" style="color:#333;" >Exportar datos por Fecha</h4>
						  </div>
							<div id="msg_alert_0"></div>
							
							<form action="exportar1.php" method="POST">
						  <div class="modal-body">
							<div class="form-group">
								<label for="fechainicio" style="color:#333;">Fecha Inicial:</label>  
								<input id="fechainicio" name="fechainicio" type="date" placeholder="dd-mm-aaaa" 
								onblur="exportar_dato_por_fecha_val1()" class="form-control input-md" required="">
								<hr>
								<label for="fechafin" style="color:#333;">Fecha Final:</label>  
								<input id="fechafin" name="fechafin" type="date" placeholder="dd-mm-aaaa" 
								onblur="exportar_dato_por_fecha_val2()" class="form-control input-md" required="">
							</div>
						  </div>
						  <div class="modal-footer">
								<button class="btn btn-info btn-xs" onclick="btnGeneraExcel()">
									Exportar Ahora: <span class="glyphicon glyphicon-hand-up"></span>
								</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						  </form>
						</div>
						</div>
						</div>						
						<div class="icon">
						  <i class="glyphicon glyphicon-export"></i>
						</div>
					  </div>
					</div>
					</div>
				</div>
				<div class="chart tab-pane active" id="tab_indicadres">
				<div class="row">
					<?php include "includes/indicadores.php";?>
				</div>
				</div>
			</div>
		</div>
	</div>
      
	<div class="row">
	<section class="col-lg-12 connectedSortable">
		<div class="box box-solid bg-blue-gradient">			
		<div class="box-header">
		  <i class="fa fa-battery-half"></i>
		  <i class="fa fa-sign-in margin_right_0"></i>
		  <i class="fa fa-square margin_right_0" aria-hidden="true"></i>
		  <i class="fa fa-sign-out margin_right_0"></i>
		  <h3 class="box-title">Voltaje Bateria Y Regulador</h3>
		  <div class="pull-right box-tools">
			<button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
		  </div>            
		</div>		
		<div class="box-body no-padding">
			
		<iframe src="grafs/v_bateriayregulador/" style="overflow:hidden;width: 100%;border: none;border-radius: 10px;min-height: 316px;padding: 0;margin: 0;"></iframe>
		</div>
	  </div>
	</section>
	<section class="col-lg-8 connectedSortable">		
		<div class="box box-solid bg-green-gradient">			
		<div class="box-header">
		  <i class="ion ion-clipboard"></i>
		  <h3 class="box-title">Datos</h3>
		  <div class="pull-right box-tools">
			<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
		  </div>            
		</div>
		
		<div class="box-body no-padding">
			<div id="lightbox" class="lightbox">
				<div id="mostrar_loading" class="mostrar_loading"><img src='imgs/loading.gif' class='img_gif'></div>
			</div>
			<div id="mostrar_tabla" style="color:#333;overflow-x: scroll;margin-bottom: 0;"></div>	
		</div>
		</div>		
	</section>
	</div>
    </section>
    
  </div>
  
  <footer class="main-footer">
    <?php include "includes/footer.php";?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
   
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab"></div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/scripts.js"></script>
</body>
</html>
<?php
clearstatcache();
flush();
mysql_close();
}
else{
	header('Location: /post1/Sesion/');
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