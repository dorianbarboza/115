<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0
?>
<? 
extract($_REQUEST);
include("conexion.php");
$tiempo= doubleval(date("YmdHis"));
$tiempo-=120;
$sql = "delete from usuariosc where tiempo < ".$tiempo;
mysql_query($sql)or die (mysql_error());
$sql = "delete from mensajes where tiempo < ".$tiempo;
mysql_query($sql)or die (mysql_error());

$sql="Select nombre from usuariosc where id=". $_COOKIE["id"];
$result=mysql_query($sql) or die (mysql_error().$sql);

if (mysql_num_rows($result)==0){
	print "&msg=cerrar&basura=";
	exit();
}

$sql="Select * from usuariosc";
$result=mysql_query($sql)or die (mysql_error());
	$cont=0;
	$usuarios="";
    while( $row=mysql_fetch_array($result)) {
		$cont++;
        $nombre=$row[0];
		$icono=$row["icono"];
		if ($row["showip"]==true){
			$ip=$row["ip"];
		}
		else
		{
			$ip="N/D";
		}
/*        if ( strlen($nombre) > 10 ){
            $nombre=substr($nombre,0,9)."..";
	    }*/
		$usuario.="&nombre$cont=$nombre&icono$cont=$icono&ip$cont=$ip";
	}//end while
	print $usuario."&total=$cont&basura=";
?>
