<HTML>
<HEAD>
<TITLE>PHP'de Fonksiyon</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php
function saydir () {
	static $sayi = 0;
	$sayi++;
	print ("<h3>Fonksiyonun tuttuğu sayı: $sayi </h3>");
	}

// Başka kodlar buraya girebilir
	print ("<h2>Fonksiyonun birinci kez çağrılması:</h2>");
	saydir();
	print ("<h2>Fonksiyonun ikinci kez çağrılması:</h2>");
	saydir();
	print ("<h2>Fonksiyonun üçüncü kez çağrılması:</h2>");
	saydir();
	print ("<h2>Fonksiyonun dördüncü kez çağrılması:</h2>");
	saydir();
?>

</BODY>
</HTML>