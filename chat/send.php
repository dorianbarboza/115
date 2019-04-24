<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0
?>
<?
	include("conexion.php");
	extract($_REQUEST);
	$para=0;
    $txt = htmlspecialchars(rawurldecode($txt));
    if ((isset($txt)) && ($txt !='')) {
	    if (preg_match("/^\/(\w+)\s+([^\s]+)\s+(.+)/i", $txt, $parts) || preg_match("/^\/(\w+)\s+([^\s]+)/i", $txt, $parts)) {
	      if( $parts[1] == 'para'){
			$txt = $parts[3];
			$sql = "select id from usuariosc where nombre='$parts[2]'";
	        $result=mysql_query($sql) or die (mysql_error().$sql);
			$row=mysql_fetch_row($result);
			$para=$row[0];
			if (strlen($para)==0){
				$para=-1;
			}
		  }
        }
	$tiempo=time();
	$usuario=$_COOKIE['id'];
    $txt = rawurlencode(addslashes($txt));
	$sql="Select max(id) from mensajes";
	$result=mysql_query($sql)or die (mysql_error().$sql);
	$row=mysql_fetch_row($result);
	$id=$row[0]+1;
	$sql="INSERT into mensajes values ($id,".date("YmdHis").",$usuario,$para,'$txt')";
	mysql_query($sql)or die (mysql_error().$sql);
	}
?>