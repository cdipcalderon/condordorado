<?php
date_default_timezone_set('America/Santiago');
setlocale(LC_ALL,"es_ES");


$servername = "localhost";
$usuario = "dba_cdiprueba";
$password = "(insert.DB.2017)";
$dbname = "dba_optimizado1";

$conexion = new mysqli($servername,$usuario,$password,$dbname);
?>