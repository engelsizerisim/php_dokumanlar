<HTML>
<HEAD>
<TITLE>PHP'de Fonksiyon</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php

function yazdirBR ($metin) {
	print ("$metin<br>\n");
	}
function yazdirH1 ($metin) {
	print ("<h1>$metin</h1>\n");
	}
function yazdirH2 ($metin) {
	print ("<h2>$metin</h2>\n");
	}
function yazdirH3 ($metin) {
	print ("<h3>$metin</h3>\n");
	}
function yazdirH4 ($metin) {
	print ("<h4>$metin</h4>\n");
	}
function yazdirP ($metin) {
	print ("<p>$metin</p>\n");
	}

// Ba�ka kodlar buraya girebilir

	yazdirH1("Bu H1 Ba�l�k");
	yazdirH2("Bu H2 Ba�l�k");
	yazdirH3("Bu H3 Ba�l�k");
	yazdirH4("Bu H4 Ba�l�k");
	yazdirBR("Bu kendisinden sonra BR olan birinci metin.");
	yazdirBR("Bu kendisinden sonra BR olan ikinci metin.");
	yazdirP("Bu uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun bir paragraf metni.");
	yazdirP("Bu uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun  uzun uzun uzun bir di�er paragraf metni.");


?>

</BODY>
</HTML>