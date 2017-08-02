<?php
include "conector.php";

$fecha_creacion = date('Y-m-d H:m:i');
$tabla='archivos3';

$ruta = '../documentos/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
$mensage = '';//Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
foreach ($_FILES as $key) //Iteramos el arreglo de archivos
{
	
	if($key['error'] == UPLOAD_ERR_OK )//Si el archivo se paso correctamente Continuamos 
		{
			$local = $key['tmp_name'];
			$nombre = $key['name'];
			$particion = explode (".", $nombre);
			$extend = $particion[1];
			$tamano = $key['size']; 
			$remoto = $key['name']; 
			$tipo_archivo = $key['type'];
			
			if($tamano >= 2000000){
				$mensage .= "No se puede subir un archivo mayor a 2MB";
				$mensage .= "<br>";
				$mensage .= "<a href='index.php'>volver a intentar </a>";
			}else{
				if($extend != "txt"){
					$mensage .= "No se pueden subir este tipo de archivos.";
					$mensage .= "<br>";
					$mensage .= "volver a intentar <a href='index.php'> Atras </a>";
				}else{
					if(empty($nombre)){
						$mensage .= "No puedes subir un archivo sin nombre.";
						$mensage .= "<br>";
						$mensage .= "<a href='index.php'>volver a intentar </a>";
					}else{
					
					$db =  new Conection();
					$consulta = "select * from $tabla where nombre_archivo = '$nombre'";
					$query = $db->consulta($consulta);
					$resultado = $db->fetch_array($query))
					$nombre_fichero = $resultado['nombre_archivo'];
					
					if($nombre === $nombre_fichero){
						$mensage .= "Ya existe un archivo con el mismo nombre, favor cambiar el nombre para cargar el archivo.";
						$mensage .= "<br>";
						$mensage .= "<a href='index.php'>volver a intentar </a>";
					}else{
						
					$id_ftp = ftp_connect("localhost",21); 
					ftp_login ($id_ftp, "root", "123123"); 
					ftp_pasv ($id_ftp, false); 
					//carpeta donde vamos a deja el archivo 
					ftp_chdir ($id_ftp, "post1/Sesion/documentos/"); 
					if (ftp_put($id_ftp,$remoto,$local,FTP_BINARY)){
					
					//agregar campo a la bd: fecha, tipo de archivo.
					//validar existencia de archivos y linkear.
					
					$sql="INSERT INTO $tabla (id_archivo, nombre_archivo, tipo_archivo, extension_archivo, tamano_archivo, fecha_creacion) 
					VALUES (null,'$nombre','$tipo_archivo','$extend','$tamano','$fecha_creacion')";
					
					$db->consulta($sql);
					mysqli_close($db);
					}else{
					}
					ftp_quit($id_ftp);
					}
					}
				}
			}
			
			/*
			$NombreOriginal = $key['name'];//Obtenemos el nombre original del archivo
			$temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
			$Destino = $ruta.$NombreOriginal;	//Creamos una ruta de destino con la variable ruta y el nombre original del archivo
			move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada
			*/
		}

	if ($key['error']=='') //Si no existio ningun error, retornamos un mensaje por cada archivo subido
		{
			$mensage .= '-> Archivo <b>'.$nombre.'</b> Subido correctamente. <br>
			Se actualizara la pagina en 5 segundos.
			';
		}
	if ($key['error']!='')//Si existio algún error retornamos un el error por cada archivo.
		{
			$mensage .= '-> No se pudo subir el archivo <b>'.$nombre.'</b> debido al siguiente Error: \n'.$key['error']; 
		}
	
}
echo $mensage;// Regresamos los mensajes generados al cliente
?>