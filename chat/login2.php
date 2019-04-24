<?
$msg="Digita un nick para identificarte.";
if (isset($_REQUEST['usuario'])){
	if (strlen(trim($_REQUEST["usuario"]))>0){
		include("conexion.php");
		$tiempo= doubleval(date("YmdHis"));
		$tiempo-=120;
		$sql = "delete from usuariosc where tiempo < ".$tiempo;
		mysql_query($sql)or die (mysql_error());
		$sql="Select id from usuariosc where nombre='". $_REQUEST["usuario"]. "'";
		$result=mysql_query($sql);
		if (mysql_num_rows($result)>0){
			$msg="<b>Lo siento, pero el nick '". $_REQUEST["usuario"]. "' ya está siendo utilizado<br></b><br>Espera para ser devuelto.<br><a href= \"login.php\">No quiero esperar</a><meta http-equiv=\"refresh\" content=\"5;URL=login.php\">";
		}else{	
			$msg="Cargando...";
			$sql="Select max(id) from usuariosc";
			$result=mysql_query($sql)or die(mysql_error());
			$row=mysql_fetch_row($result);
			$id=$row[0]+1;
 		    $ip = getenv("REMOTE_ADDR");
			$showip=$_REQUEST["chkip"];
			$icono=$_REQUEST["icono"];
			$sql="Insert into usuariosc (nombre,id,tiempo,ip,showip,icono) values ('". $_REQUEST["usuario"]. "',$id,".date("YmdHis").",'$ip','$showip','$icono')";
			$result=mysql_query($sql)or die(mysql_error().$sql);
			setcookie("ip",$ip,time()+3600);
			setcookie("id",$id,time()+3600);
			setcookie("nombre",$_REQUEST["usuario"],time()+3600);
			header("location: chat.php?id=$id");

		}
	}else{
	$msg= "ERROR: Digita un nick.<br>Espera para ser devuelto.<br><a href= \"login.php\">No quiero esperar</a><meta http-equiv=\"refresh\" content=\"5;URL=login.php\">";
	}
}
else{
	$msg= "ERROR: No digitaste un nick<br>Espera para ser devuelto.<br><a href= \"login.php\">No quiero esperar</a><meta http-equiv=\"refresh\" content=\"5;URL=login.php\">";
}
?>
<html>
<head>
<title>Myphp - Chat - Verificando</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#333333" text="#FFFFFF" link="#FF9900" vlink="#FFCC00" alink="#FFFF00">
<div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><br>
  <? print $msg ?><br>
  </font> </div>
<p align="center"><font color="#CCCCCC" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  </font></p>
<p align="center"><a href="http://myphp.webcindario.com" target="_blank"><img src="powered.gif" alt="Sistema de chat dise&ntilde;ado por rolandocc2@hotmail.com" width="140" height="25" border="0"></a><font color="#CCCCCC" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  </font></p>
</body>
</html>
