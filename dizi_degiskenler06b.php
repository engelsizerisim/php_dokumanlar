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
		$ogrenciler[] = "�zbay";
		$ogrenciler[] = "Muharrem";
		$ogrenciler[] = "Hasan";
		$ogrenciler[] = "�ahika";

// Buraya ba�ka kodlar girecek

foreach ($ogrenciler as $ogrenci) {
	print ("$ogrenci<br>"); 
	}
?>

</H2>
</B>
</BODY>
</HTML>
