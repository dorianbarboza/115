<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0
?>
<?
if (!isset($_COOKIE["id"])){
	header("location: login.php");
	exit();
}

?>

<html>
<head>
<title>Myphp - Chat</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0">
<div align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="545" height="345">
    <param name="movie" value="w.swf">
    <param name=quality value=high>
    <param name="BGCOLOR" value="#FFFFFF">
    <embed src="w.swf" width="545" height="345" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#FFFFFF"></embed> 
  </object>
</div>
</html>
