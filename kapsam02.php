<HTML>
<HEAD>
<TITLE>PHP'de Fonksiyon</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php
$metin = "Ba�kalar�na yararl� olman�n s�n�r� yoktur!";
function yazdir () {
	global $metin;
	print ("<h1>��te metin: $metin </h1>");
	}

// Ba�ka kodlar buraya girebilir

	yazdir();
?>

</BODY>
</HTML>