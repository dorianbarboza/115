<html>
<head>
<title>Myphp - Chat - login</title>
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
<form name="form1" method="post" action="login2.php">
  <p align="center"><font color="#FF9900" size="3" face="Verdana, Arial, Helvetica, sans-serif">Bienvenido 
    al chat de </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
    <font color="#CCCCCC"><br>
    </font></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? print $msg ?></font></p>
  <table width="300" border="0" align="center" cellspacing="1">
    <tr bgcolor="#666666"> 
      <td height="39" colspan="2"> 
        <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nick</font> 
          <input name="usuario" type="text" class="caja" id="usuario" maxlength="15">
          <input name="Submit" type="submit" class="boton" value="   Login   ">
          <br>
        </div></td>
    </tr>
    <tr> 
      <td width="92" bgcolor="#666666"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Icono: 
        </font></td>
      <td width="190" bgcolor="#666666"> 
        <p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="icono" type="radio" value="img/biggrin.jpg" checked>
          <img src="img/biggrin.gif" alt="soy un genio! en php" width="15" height="15"> 
          <input type="radio" name="icono" value="img/confused.jpg">
          <img src="img/confused.gif" alt="estoy confundido" width="15" height="22"> 
          <input type="radio" name="icono" value="img/crying.jpg">
          <img src="img/crying.gif" alt="estoy llorando" width="15" height="15"> 
          <input type="radio" name="icono" value="img/tongue.jpg">
          <img src="img/tongue.gif" alt="Quiero mostrar mi lengua" width="15" height="15"> 
          </font></p>
        <p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input type="radio" name="icono" value="img/evil.jpg">
          <img src="img/evil.gif" alt="Soy malo" width="15" height="15"> 
          <input type="radio" name="icono" value="img/mad.jpg">
          <img src="img/mad.gif" alt="Estoy enojado!!!" width="15" height="15"> 
          <input type="radio" name="icono" value="img/pleased.jpg">
          <img src="img/pleased.gif" alt="Estoy complacido" width="15" height="15"> 
          <input type="radio" name="icono" value="img/smile.jpg">
          <img src="img/smile.gif" alt="Estoy feliz" width="15" height="15"> </font></p></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#666666"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&iquest; 
        Mostrar tu ip ?: 
        <input name="chkip" type="checkbox" id="chkip" value="1">
        <input name="Submit2" type="button" class="boton" onClick="javascript:alert('Esto le permitira a otros usuarios poder accesar a tu servidor local ( si tienes uno corriendo ) y mirar tu trabajo, o ayudarte con algun problema.\n¡No me hago responsable por el mal uso de esto!');" value="&iquest;  para que ?">
        </font></td>
    </tr>
  </table>
  <p align="center"><a href="http://myphp.webcindario.com" target="_blank"><img src="powered.gif" alt="Sistema de chat dise&ntilde;ado por rolandocc2@hotmail.com" width="140" height="25" border="0"></a><font color="#CCCCCC" size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
    </font></p>
  </form>
</body>
</html>