<?
function txt2html($txt) {
    $patterns = array ( "/(http\:\/\/[^\s]+)/i",
			"/(ftp\:\/\/[^\s]+)/i",	  
			"/(mailto\:([^\s]+))/i",
			"/\*(.+)\*/i",
			"/\_(.+)\_/i",
			"/\r/i");
    $replace =  array ( "<a href=\"\\1\" target=\"_blank\">\\1</a>", 
			"<a href=\"\\1\" target=\"_blank\">\\1</a>", 
			"<a href=\"\\1\" target=\"_blank\">\\2</a>", 
			"<b>\\1</b>",
			"<i>\\1</i>",
			"<br>\n");
    return preg_replace($patterns,$replace, $txt);
}
?>
