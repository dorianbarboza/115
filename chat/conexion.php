<?
$link=mysql_connect("","","");
if (!$link){
	print "<br><b>Da clic<br><a href=\"login.php\" target=\"_top\"> :. AQUI .: </a>";
	exit();	
}
mysql_select_db("myphp");
?>
