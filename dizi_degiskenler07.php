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
	$ogrenci = array (
		adi => "�zbay", 
		soyadi => "Altun",
		sinav1 =>"",
		sinav2 =>"",
		not =>""
		);

// Buraya ba�ka kodlar girecek

	foreach ($ogrenci as $anahtar=>$deger) {
	print ("$anahtar = $deger<br>");
	}
?>
</H2>
</B>
</BODY>
</HTML>
