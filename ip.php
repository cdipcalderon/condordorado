<?php
//IP
echo "IP: ";
echo $_SERVER['REMOTE_ADDR'] = "google.com"; // muestra: 200.49.6.149
// IP compartido
echo "<br>";
echo "IP Share: " . $_SERVER['HTTP_CLIENT_IP'];
echo "<br>";
// IP Proxy
echo "IP Proxy: " . $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "<br>";
// IP Acceso
echo "IP Access: " . $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo '$_SERVER["DOCUMENT_ROOT"]          : ', $_SERVER["DOCUMENT_ROOT"] = "http://www.google.cl" , "\n";

?>