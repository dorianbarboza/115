<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0
?>
<?
$ip=$_COOKIE["ip"];
$nombre=$_COOKIE["nombre"];
$host=$_SERVER['SERVER_NAME'];
$suri=$_SERVER["REQUEST_URI"];
print "&permitir=1&ip=$ip&nombre=$nombre&sn=$host&suri=$suri&basura=";
?>
