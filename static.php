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
	print ("<h3>Fonksiyonun tuttu�u say�: $sayi </h3>");
	}

// Ba�ka kodlar buraya girebilir
	print ("<h2>Fonksiyonun birinci kez �a�r�lmas�:</h2>");
	saydir();
	print ("<h2>Fonksiyonun ikinci kez �a�r�lmas�:</h2>");
	saydir();
	print ("<h2>Fonksiyonun ���nc� kez �a�r�lmas�:</h2>");
	saydir();
	print ("<h2>Fonksiyonun d�rd�nc� kez �a�r�lmas�:</h2>");
	saydir();
?>

</BODY>
</HTML>