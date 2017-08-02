<?php
//$to = "condor.dorado.alertas@hotmail.com";
//$to = "condor.dorado.spa@gmail.com";
$registro = date("d/m/y H:i:s");
$to = "condor.dorador.spa@gmail.com";
$to2 = "pablo.calderong21@gmail.com";
$subject = "AlertaCDI";
$txt = "Se ha detecctado <b>inactividad</b> desde las $registro.";
$headers = "From: CDI Alertas" . "\r\n";

//mail($to,$subject,$txt,$headers);
mail($to,$subject,$txt,$headers);
mail($to2,$subject,$txt,$headers);
?>