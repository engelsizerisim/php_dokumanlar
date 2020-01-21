<HTML>
<HEAD>
<TITLE>PHP'de Alfanumerik fonsiyonlar</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php
$degisken = "\0   Olumsuz düşünce ve mekanizmalar üzerine olumlu şeyler bina edilemez!\n\r\t";
function yazdir () {
	global $degisken;
	print ("<h2><font color='red'>Değişken:</font><br>$degisken </h2>\n");
	$secilen = trim ($degisken);
	print ("<h2><font color='red'>Seçilen:</font><br>$secilen</h2>\n");
	}

	yazdir();
?>

</BODY>
</HTML>