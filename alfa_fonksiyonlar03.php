<HTML>
<HEAD>
<TITLE>PHP'de Alfanumerik fonsiyonlar</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php
$degisken = "<";
function yazdir () {
	global $degisken;
	print ("<h2><font color='red'>De�i�ken:</font><br>$degisken </h2>\n");
	$secilen = ord ($degisken);
	print ("<h2><font color='red'>Se�ilen:</font><br>$secilen</h2>\n");
	}

	yazdir();
	
?>

</BODY>
</HTML>