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

print ("\$ogrenciler adl� dizide ". count($ogrenciler) ." adet eleman var.");
print ("<br><br>");
for ($sayac=1 ;  $sayac <= count($ogrenciler) ; $sayac++ ) {
		print ("\$ogrenciler dizisinin ". $sayac ."'nc� eleman�: " . $ogrenciler[$sayac] ."<br>"); 
	}
?>

</H2>
</B>
</BODY>
</HTML>
