<HTML>
<HEAD>
<TITLE>PHP'de Alfanumerik fonsiyonlar</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php
$degisken1 = "�yilik �zerine";
$degisken2 = "86";
$metin = "<br>\n" ;
function yazdir () {
	global $degisken1;
	global $degisken2;
	global $metin;
	print ("<h2><font color='red'>De�i�ken1:</font><br>$degisken1 </h2>\n");
	print ("<h2><font color='red'>De�i�ken2:</font><br>$degisken2 </h2>\n");
	print ("<h2><font color='red'>Metin:</font><br>br & LF</h2>\n");
	$secilen = sprintf ("%'.-40.40s%'.2d%s" , $degisken1 ,$degisken2 , $metin );
	print ("<h2><font color='red'>Bi�imlendirilmi� �ekli:</font><br>$secilen</h2>\n");
	}

	yazdir();
	
?>

</BODY>
</HTML>