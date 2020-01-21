<HTML>
<HEAD>
<TITLE>PHP'de Fonksiyon</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php
$metin = "Başkalarına yararlı olmanın sınırı yoktur!";
function yazdir () {
	global $metin;
	print ("<h1>İşte metin: $metin </h1>");
	}

// Başka kodlar buraya girebilir

	yazdir();
?>

</BODY>
</HTML>