<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CDI</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="container">
	<div class="row" style="margin-top:12%;">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<span style="position: absolute;  height: 105%;  width: 105%;  background-color: #fff;  opacity: 0.2;  top: -7px;  left: -7px;"></span>
		<div class="row">
		<div class="col-md-12" style="background:#ddd;color:#2f98c7;text-align: -webkit-center;">
		<h2>
		Bienvenido
		</h2>
			<form action="sesion.php" method="post">
				<div class="input-group">
				<span class="input-group-addon" ><span class="glyphicon glyphicon-user"></span></span>
				<input type="text" class="form-control" placeholder="Email o Nickname" aria-describedby="basic-addon1" name="txtNickname" requiered autofocus />
				</div>
				<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="txtClave" requiered />
				</div>
			<br>
			<button type="submit" class="btn btn-primary">Iniciar sesión</button>
			</form>
		<div class="col-md-12">
		<div class="col-md-6">
		
		</div>
		<div class="col-md-6">
		<a href="#" data-toggle="modal" data-target="#Modal-clave">Olvido su contrase&ntilde;a</a>
		</div>
		</div>
		</div>
		
		</div>
	</div>
	<div class="col-md-4"></div>
	</div>  
  
	<div class="modal fade" id="Modal-clave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">&#191;Olvido su contrase&ntilde;a?</h4>
		  </div>
		  <form action="recuperar.php" method="post">
		  <div class="modal-body">
			<i>**Ingrese el correo asociado a su cuenta.**</i>
			<div class="form-group input-group">
				<input class="form-control" size="100" maxlength="100"id="email" name="email" placeholder="Email:" type="email" required="">
				<span class="input-group-addon">
				<a href="#" data-toggle="popover" title="Email valido" data-content="Ejemplo: ejemplo&#64;ejemplo.cl"><span class="glyphicon glyphicon-question-sign"></span></a>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-success pull-right">Enviar <span class="glyphicon glyphicon-ok-circle"></span></button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
  
  
  
  
</div>	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script>
	$(function () {
	$('[data-toggle="popover"]').popover()
	});
	
	function justLetras(e){
	tecla = e.which || e.keyCode; 
	patron =/[abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóúÁÉÍÓÚ \s]/;
	te = String.fromCharCode(tecla); 
	return (patron.test(te) || tecla == 9 || tecla == 8);
	};
	
	function justRut(e){
	tecla = e.which || e.keyCode; 
	patron =/[0123456789kK\s]/;
	te = String.fromCharCode(tecla); 
	return (patron.test(te) || tecla == 9 || tecla == 8);
	};
	
	function justNumbers(e){
	var keynum = window.event ? window.event.keyCode : e.which;
	if ((keynum == 8) || (keynum == 45))
	return true;

	return /\d/.test(String.fromCharCode(keynum));
	};
	</script>
  </body>
</html>