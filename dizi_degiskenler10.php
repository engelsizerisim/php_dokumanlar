<HTML>
<HEAD>
<TITLE>PHP'de Degiskenler</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>
<B>
<H2>
<?php
	$birinci_dizi = array ( "�zbay" , "Muharrem" , "Hasan" , "�ahika" );
	$yeni_dizi = array_push ( $birinci_dizi, "Altun" , "Ta�" , "Civelek" , "Tabak" );


// Buraya ba�ka kodlar girecek
	print ("\$birinci_dizi adl� dizide $yeni_dizi adet de�i�ken var<br>");
foreach ( $birinci_dizi as $ogrenci ) {
//	foreach ( $ogrenci as $anahtar => $deger ) {
		print ("$ogrenci <br> ");
//		}
//	print ("<br>");
	}

?>
</H2>
</B>
</BODY>
</HTML>
