<?php
$value = 'cualquier cosa';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expira en una hora */
setcookie("TestCookie", $value, time()+3600, "/cookies/", "archivos.php", 1);

/*
echo $_COOKIE["TestCookie"];
echo "<br>";

//Otra manera de depurar/probar es viendo todas las cookies
echo "<br>";
print_r($_COOKIE);
*/
//header("Cache-Control: no-store, no-cache, must-revalidate");
//<META HTTP-EQUIV="Pragma" CONTENT="no-cache">

$tabla  = "post1";
date_default_timezone_set('America/Santiago');

	header("Expires: Mon, 03 Jun 2016 06:00:00 GTM");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");


if(@session_start() == false){session_destroy();session_start();}
include "../conn2.php"; 
if(isset($_SESSION['nickname'])){	
	$nickname = $_SESSION["nickname"];	
	$result = mysql_query("SELECT * FROM usuarios WHERE nickname = '$nickname'");
	$resultados = mysql_fetch_array($result);
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>CDI | Adm: <?php echo $_SESSION['nickname'];?></title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">  
    <!-- Logo -->
    <a href="monitor.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CDI</p></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CDI</p></span>			
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">	
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  <div class="navbar-custom-menu" style="float: left;position: relative;left: 5%;">
		  <h3 class="" id="tiempo_ahora" style="position: relative;left: 0%;margin: 0;text-align: -webkit-center;
    font-size: 40px;font-weight: bold;color: #ffffff;">0</h3>
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
			</p>
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
            <li class="active"><a href="archivos.php"><i class="fa fa-circle-o"></i> Archivos</a></li>
            <li><a href="monitor.php"><i class="fa fa-circle-o"></i> Monitor</a></li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Energias</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li><a href="irradiada-captada-acumulada.php"><i class="fa fa-circle-o"></i> Irradiada - Captada</a></li>
					<li><a href="bateria-acumulada.php"><i class="fa fa-circle-o"></i> Batería</a></li>
					<li><a href="utilizada.php"><i class="fa fa-circle-o"></i> Utilizada</a></li>
				</ul>
			</li>
			<li><a href="voltaje-bateria-regulador.php"><i class="fa fa-circle-o"></i> Batería y Regulador[V]</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
          <!-- bg-aqua bg-green bg-yellow bg-red -->
      <div class="box box-solid ">
		<div class="box-header">
			<i class="fa fa-list-alt"></i>
			<h3 class="box-title">Indicadores</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body border-radius-none">
			<div class="row">
          <!--	bg-aqua	bg-green	bg-yellow	bg-red	-->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box btn-warning" style="padding-bottom: 0px;">
            <div class="inner">
				<span id="potencia_total" style="font-size:20px;">0</span>
				<p>Potencia Total</p>
				<hr style="margin-bottom:5px;margin-top:5px;">
				<span id="potencia_total_teorica" style="font-size:20px;">0</span>
				<p>Potencia Total Teórica</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-flash"></i>
            </div>
          </div>
        </div>
		<div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box btn-warning ajuste_box">
            <div class="inner">
              <span id="potencia_bateria" style="font-size:20px;">0</span>
              <p>Potencia Batería</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-flash"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box btn-info ajuste_box">
            <div class="inner">
              <span id="EnergiaDiaria_Irradiadia" style="font-size:20px;">0</span>
              <p>Energía Irradiada <br>Diaria Acumulada</p>
            </div>
            <div class="icon">
              <i class="fa fa-battery-empty"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box btn-info ajuste_box">
            <div class="inner">
              <span id="EnergiaDiaria_Captada" style="font-size:20px;">0</span>
              <p>Energía Captada <br>Diaria Acumulada</p>
            </div>
            <div class="icon">
              <i class="fa fa-battery-quarter"></i>
            </div>
          </div>
        </div>
		<div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box btn-info ajuste_box">
            <div class="inner">
              <span id="EnergiaDiaria_Regulador" style="font-size:20px;">0</span>
              <p>Energía Regulador <br>Diaria Acumulada</p>
            </div>
            <div class="icon">
              <i class="fa fa-battery-half"></i>
            </div>
          </div>
        </div>
		
		
		<!--
		<div class="col-lg-2 col-xs-6">
          <div class="small-box btn-default ajuste_box">
            <div class="inner">
              <span id="utilizacion_energia" style="font-size:20px;">0</span>
              <p>Porcentaje Energía Utilizada</p>
            </div>
            <div class="icon">
              <i class="fa fa-battery-three-quarters"></i>
            </div>
          </div>
        </div>
		-->
      </div>
      
		</div>
		</div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
		<section class="col-lg-7 connectedSortable">		  
			<div class="box box-solid bg-light-blue-gradient">			
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Archivos</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
				<a href="#" data-toggle="modal" data-target="#cargar_archivos" title="Cargar Archivos">
					<button class="btn btn-info">Cargar archivos <span class="glyphicon glyphicon-file"></span></button>
				</a>
			
			<div class="mensage2 alert alert-success" role="alert"></div>
			<table id="example1" class="table table-bordered table-striped">
			<thead>
			 <tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Extension</th>
				<th>Tamaño</th>
				<th>Fecha Creación</th>
				<th>Acciones</th>		
			  </tr>
			</thead>
			<tbody>
				<?php
				$sql="select * from archivos order by id_archivo DESC limit 10";
				$r=mysql_query($sql);
				while($resultados=mysql_fetch_array($r)){
					$ruta = "/documentos/";
					$nombre_fichero = $resultados['nombre_archivo'];
					
					if($nombre_fichero != ""){
						if(file_exists($ruta.$nombre_fichero)){
				?>
				<tr>
					<td><?php echo $resultados['id_archivo'];?></td>
					<td><?php echo $resultados['nombre_archivo'];?></td>
					<td><?php echo $resultados['tipo_archivo'];?></td>
					<td><?php echo $resultados['extension_archivo'];?></td>
					<td><?php echo $resultados['tamano_archivo'];?></td>
					<td><?php echo $resultados['fecha_creacion'];?></td>
					<td>
					<div class="col-md-12">
						<a href="#" data-toggle="modal" data-target="#myModal_<?php echo $resultados['id_archivo'];?>" title="Ver Archivo"><button value="Ver" class="btn btn-success">
						<span class="glyphicon glyphicon-eye-open"></span></button></a>
						<a href="documentos/<?php echo $resultados['nombre_archivo'];?>" download title="Descargar archivo: <?php echo $resultados['nombre_archivo'];?>"><button value="Ver" class="btn btn-info">
						<span class="glyphicon glyphicon-download"></span></button></a>
						<button type="button" class="btn btn-danger" title="Eliminar Archivo" onclick="confirma_eleminar_archivo_y_registro(<?php echo $resultados['id_archivo'];?>,'<?php echo $resultados['nombre_archivo'];?>')"><span class="glyphicon glyphicon-trash"></span></button>
					</form>
					</div>
					</td>
				</tr>
				<div class="modal fade" id="myModal_<?php echo $resultados['id_archivo'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $nombre = $resultados['nombre_archivo'];?></h4>
					  </div>
					  <div class="modal-body" style="max-height:300px;overflow:auto;">
						<?php 					
							$contador = 0;
							$ruta = "documentos/";
							$nombre = $resultados['nombre_archivo'];
							$gestor = fopen($ruta.$nombre, "r");
							
							while(!feof($gestor)) {
								$linea = fgets($gestor);
								$contador++; 
							}
							fclose($gestor);				
							echo "<b>El numero de lineas es ".$contador."</b><br>";
							
							$gestor = fopen($ruta.$nombre, "r");
							
							while(!feof($gestor)) {
								$linea = fgets($gestor);
								echo $linea . "<br />";
								$contador++; 
							}
							fclose($gestor);				
							echo "El numero de lineas es ".$contador;
							
						?>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
				  </div>
				</div>
				<?php
				}
				}
				}
				?>
			</tbody>
			<tfoot>
			   <tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Tipo</th>
					<th>Extension</th>
					<th>Tamaño</th>
					<th>Fecha Creación</th>
					<th>Acciones</th>				
			  </tr>
			</tfoot>
			</table>
			<div class="modal fade" id="cargar_archivos" tabindex="-1" role="dialog" aria-labelledby="cargar_archivos_title">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="cargar_archivos_title" style="color:#333;">Cargar Archivos</h4>
				  </div>
				  
				  <div class="mensage alert alert-success" role="alert"></div>
					<form action="" method="post" enctype="multipart/form-data">
				  <div class="modal-body" style="max-height:300px;overflow:auto;">
					<input name="file" id="archivos" type="file" class="btn btn-default">
				  </div>
				  <div class="modal-footer">
					<button type="button" id="cargar_archivos_form" value="Enviar" class="btn btn-info">
					Enviar <span class="glyphicon glyphicon-send"></span>
					</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close <span class="glyphicon glyphicon-remove"></span></button>
				  </div>
					</form> 
				</div>
			  </div>
			</div>
				
			</div>
          </div>
		  
		</section>
        <section class="col-lg-5 connectedSortable">
			
			<div class="box box-solid bg-green-gradient">			
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Datos</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
				<!--The calendar -->
				<!--
				<div id="calendar" style="width: 100%"></div>
				-->
				<div id="lightbox" class="lightbox">
					<div id="mostrar_loading" class="mostrar_loading"><img src='imgs/loading.gif' class='img_gif'></div>
				</div>
				<div id="mostrar_tabla" style="color:#333;overflow-x: scroll;margin-bottom: 0;"></div>
			</div>
          </div>
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<!-- 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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
<script>
	$.widget.bridge('uibutton', $.ui.button);
	setInterval(function (){location.reload()}, 500000);
	
	function confirma_eleminar_archivo_y_registro(id_archivo,nombre_archivo){
		if(confirm("Deseas elminar el registro y archivo?")){			
			//window.location.href="eliminar.php?id_archivo="+id_archivo+"&nombre_archivo="+nombre_archivo;
			eliminar_archivo(id_archivo,nombre_archivo);
			}else{
			
			}
	}
	
	$(function(){
		$('#cargar_archivos_form').click(subir_archivo); //Capturamos el evento click sobre el boton con el id=enviar	y ejecutamos la función seleccionado.
	});
	function eliminar_archivo(id_archivo,nombre_archivo){	
		var id_archivo = id_archivo;
		var nombre = nombre_archivo;
		var ruta = "includes/eliminar.php?id_archivo="+id_archivo+"&nombre_archivo="+nombre;
		$.ajax({
			url:ruta,
			type:'GET',
			contentType:false,
			data:archivos,
			processData:false,
			cache:false
		}).done(function(msg){
			MensajeFinal2(msg)
		});
	}
	function subir_archivo(){	
		var archivos = document.getElementById("archivos");//Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'
		var archivo = archivos.files; //Obtenemos los archivos seleccionados en el imput
		//Creamos una instancia del Objeto FormDara.
		var archivos = new FormData();
		/* Como son multiples archivos creamos un ciclo for que recorra la el arreglo de los archivos seleccionados en el input
		Este y añadimos cada elemento al formulario FormData en forma de arreglo, utilizando la variable i (autoincremental) como 
		indice para cada archivo, si no hacemos esto, los valores del arreglo se sobre escriben*/
		for(i=0; i<archivo.length; i++){
		archivos.append('archivo'+i,archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
		}
		/*Ejecutamos la función ajax de jQuery*/		
		$.ajax({
			url:'includes/subir.php', //Url a donde la enviaremos
			type:'POST', //Metodo que usaremos
			contentType:false, //Debe estar en false para que pase el objeto sin procesar
			data:archivos, //Le pasamos el objeto que creamos con los archivos
			processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
			cache:false //Para que el formulario no guarde cache
		}).done(function(msg){//Escuchamos la respuesta y capturamos el mensaje msg
			MensajeFinal(msg)
		});
	}
	function MensajeFinal(msg){
		$('.mensage').html(msg);//A el div con la clase msg, le insertamos el mensaje en formato  thml
		$('.mensage').show('slow');//Mostramos el div.
		setInterval(recargar,5000);
	}
	function MensajeFinal2(msg){
		$('.mensage2').html(msg);//A el div con la clase msg, le insertamos el mensaje en formato  thml
		$('.mensage2').show('slow');//Mostramos el div.
		setInterval(recargar,5000);
	}
	function recargar(){    
		window.location.reload(true);
		}
</script>
</body>
</html>
<?php
clearstatcache();
ob_implicit_flush();
ob_flush();
flush();
ob_clean();
mysql_close();
}
else{
	header('Location: http://cdisolar.hopto.org:8888/post1/Sesion/');
}
?>