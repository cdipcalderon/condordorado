<?php
date_default_timezone_set('America/Santiago');
setlocale(LC_ALL,"es_ES");
//usuario para conexion exclusiva para graficos
$servername = "localhost";
$usuario = "dba_cdigraf";
$password = "(graf.DB.2017)";
$namedb = "dba_optimizado1";

$conexion_g = new mysqli($servername,$usuario,$password,$namedb);
?>