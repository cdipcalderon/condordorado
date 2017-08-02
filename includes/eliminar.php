<?php
include "conector.php";

$id_archivo = $_GET["id_archivo"];
$nombre_archivo = $_GET["nombre_archivo"];

/*
echo "<br>id: ";
echo $id_archivo;
echo "<br> nombre_archivo: ";
echo $nombre_archivo;
echo "<br>";
*/
$db =  new Conection();

$consulta = "delete from archivos where id_archivo = '$id_archivo'";
$db->consulta($consulta);

$ruta = "../documentos/$nombre_archivo";
$db->close();
//mysqli_close($db);

if(file_exists($ruta)){
	unlink($ruta);
	echo "Se ha eliminado el archivo.";
	}else{
		echo "No se ha encontrado el archivo.";
	}
?>