<?php 
	include "includes/conexion.php"; 
	 
	if(@session_start() == false){session_destroy();session_start();} 
	$nickname = $_POST['txtNickname'];
	$clave = $_POST['txtClave'];
	
	$sql="SELECT * FROM usuarios WHERE nickname = '".$nickname."' or email = '".$nickname."'"; 
	$query = $conexion->query($sql); 
	if($query->num_rows>0){
		while($row=$query->fetch_array()){ 
			if($clave == $row['clave']){
				$_SESSION['nickname'] = $row['nickname'];	
				echo "<script type='text/javascript'>window.location.href='monitor.php';</script>";
			}
			else
			{
			echo "
			<script type='text/javascript'>alert('Nickname o clave incorrecta');</script>
			<script>javascript:history.back()</script>
			";
			
			}
		}
	}else{ 
	echo "No hay resultados";
	}
	
	?>