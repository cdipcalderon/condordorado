<?php 
$archivo = "registro_recuperacion.txt";                                       //Esto crear&aacute; el Archivo donde guarda las ips
$manejador = fopen($archivo,"a") or die("Imposible abrir el archivo\n");      //Esto abre el archivo
$ip = $_SERVER['REMOTE_ADDR'];                                                //Esto muestra la ip
$fecha= date("d-m-Y H:i:s")."";  
$salto = chr(13);                                                 //Esto muestra la fecha
fwrite($manejador,$ip.' '.$fecha.$salto);                              //Esto muestra la ip y la fecha en el archivo
fclose($manejador);  
// Clean up the input values
foreach($_POST as $key => $value) {
  if(ini_get('magic_quotes_gpc'))
    $_POST[$key] = stripslashes($_POST[$key]);

  $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}

include "conn2.php";
 
if(@session_start() == false){session_destroy();session_start();} 

$email = $_POST['email'];

if(!$email) {
  $errors[] = "Ingresa tu email.";
} else if(!validEmail($email)) {
  $errors[] = "Ingresa un email valido.";
}
		
		$db = new MySQL();
		$consulta = $db->consulta("SELECT email, clave FROM usuarios WHERE email = '$email'");
		if($db->num_rows($consulta)>0){
		while($resultados = $db->fetch_array($consulta)){
			$clave_rec = $resultados['clave'];
		
				
		$to2 = $email;
		$subject = "Recuperación de clave de: ".$_POST['email']."";
		$mensaje = "------------------------------------------------ \n";
		$mensaje.= "        Recuperacion de clave                    \n";
		$mensaje.= "------------------------------------------------ \n";
		$mensaje.= "Sus datos son: \n";

		$mensaje.= "Email:   ".$email."\n";
		$mensaje.= "Clave:   ".$clave_rec."\n\n";
		$mensaje.= "------------------------------------------------ \n";
		$mensaje.= "Recuerde guardar este correo para respaldar de sus datos.\n";
		$mensaje.= "Este mensaje a sido enviado por medio de C.D.I. - http://cdisolar.hopto.org:8888/post1/\n";
		$mensaje.= "Su ip es ".$ip." y la fecha exacta del mensaje es ".$fecha.".\n\n";
		$mensaje.= "Muchas gracias por participar con nosotros.";

		$headers = "From: $email";
		mail($to, $subject, $mensaje, $headers);
		mail($to2, $subject, $mensaje, $headers);
		
		?>
		<script type='text/javascript'>alert('Sus datos han sido enviado a su correo');</script>
		<script>javascript:history.back()</script>
		<?php
		}
		}
		else
		{
		?>
		<script type='text/javascript'>alert('Sus datos son incorrectos');</script>
		<script>javascript:history.back()</script>
		<?php
		}
		
		function validEmail($email)
		{
		$isValid = true;
		$atIndex = strrpos($email, "@");
		if (is_bool($atIndex) && !$atIndex)
		{
		$isValid = false;
		}
		else
		{
		$domain = substr($email, $atIndex+1);
		$local = substr($email, 0, $atIndex);
		$localLen = strlen($local);
		$domainLen = strlen($domain);
		if ($localLen < 1 || $localLen > 64)
		{
         // local part length exceeded
         $isValid = false;
		}
		else if ($domainLen < 1 || $domainLen > 255)
		{
			// domain part length exceeded
         $isValid = false;
		}
		else if ($local[0] == '.' || $local[$localLen-1] == '.')
		{
         // local part starts or ends with '.'
         $isValid = false;
		}
		else if (preg_match('/\\.\\./', $local))
		{
		// local part has two consecutive dots
         $isValid = false;
		}
		else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
		{
         // character not valid in domain part
         $isValid = false;
		}
		else if (preg_match('/\\.\\./', $domain))
		{
         // domain part has two consecutive dots
         $isValid = false;
		}
		else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
			str_replace("\\\\","",$local)))
		{
         // character not valid in local part unless
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
		}
		if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
		{
         // domain not found in DNS
         $isValid = false;
		}
		}
		return $isValid;
		}
?>