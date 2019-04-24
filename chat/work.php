<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0
?>
<?php 
	extract($_REQUEST);
    require 'txt2html.php';
	include("conexion.php");
	$sql="select * from mensajes left join usuariosc on usuariosc.tiempo <= mensajes.tiempo
	where usuariosc.id=". $_COOKIE["id"] . " and ((mensajes.para=".$_COOKIE["id"].") or (mensajes.para=0)) order by mensajes.id asc";
//where user.uid=$uid and message.rid=$rid and 
//(( message.rcpt_id <= 0 ) or ( message.rcpt_id = $uid ) or ( message.send_id = $uid ))";

	$result=mysql_query($sql)or die (mysql_error().$sql);	
	$total=0;
	$toOut="";
	while ($row=mysql_fetch_array($result)){
	  $total++;
	  $toOut.="&msg". $total. "=";
	  $message=$row["mensaje"];
      $message = txt2html(rawurldecode($message));
      $send_id = $row["usuario"];
 	  $rcpt_id=$row["para"];
	 if ($send_id==$_COOKIE['id']){
//	 	$rcp_id=-1;
		$name=$_COOKIE['nombre'];
	 }else{
	 	$sql="Select nombre from usuariosc where id=$send_id";
		$result2=mysql_query($sql);
		$row2=mysql_fetch_row($result2);
		$name=$row2[0];
	 }
      if ( $rcpt_id== $_COOKIE["id"]) {
        $toOut.= '<font color="red"><b>* Privado de ('.$name.')</b></font><br>'.$message.'<br>';
      	}
		 else
		{
        $toOut.= '<font color="#222222"><b>'.$name.'</b></font>:.  '.$message.'</font><br>';
      }
	
	}//enwhile
    $sql="update usuariosc set tiempo =".date("YmdHis")." where id=".$_COOKIE['id'];
    mysql_query($sql)or die ("msg1=ups>".mysql_error()."&total=1&basura=");
	print $toOut."&total=$total&basura=";
?>