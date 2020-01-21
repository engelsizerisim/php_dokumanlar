<HTML>
<HEAD>
<TITLE>PHP'de Degisken Turleri</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>
<B>
<H2>
<?php
	$sayi  = 5;
	print("Birinci değişkenin adı: \$sayi<br>");
	print("Değeri : ");
	print "$sayi<br>";
	print("Türü : ");
	print gettype( $sayi ) ; //tamsayi/integer
	print "<br>";
	print "<br>";

	$alfanumerik  = "Şahika";
	print "İkinci değişkenin adı: \$alfanumerik<br>";
	print "Değeri : ";
	print "$alfanumerik<br>";
	print("Türü : ");
	print gettype( $alfanumerik ) ; //alfanümerik/string
	print "<br>";
	print "<br>";

	$ondalik  = 5.1234;
	print "Üçüncü değişkenin adı: \$ondalik<br>";
	print "Değeri : ";
	print "$ondalik<br>";
	print("Türü : ");
	print gettype( $ondalik ) ; //çift,ondalık/double
	print "<br>";
	print "<br>";

	$mantiksal  = false;
	print "Üçüncü değişkenin adı: \$mantiksal<br>";
	print "Değeri : ";
	print "$mantiksal<br>";
	print("Türü : ");
	print gettype( $mantiksal ) ; //mantıksal/boolean
	print "<br>";
	print "<br>";
?>
</H2>
</B>
</BODY>
</HTML>
