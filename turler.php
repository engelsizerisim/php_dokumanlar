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
	print("Birinci de�i�kenin ad�: \$sayi<br>");
	print("De�eri : ");
	print "$sayi<br>";
	print("T�r� : ");
	print gettype( $sayi ) ; //tamsayi/integer
	print "<br>";
	print "<br>";

	$alfanumerik  = "�ahika";
	print "�kinci de�i�kenin ad�: \$alfanumerik<br>";
	print "De�eri : ";
	print "$alfanumerik<br>";
	print("T�r� : ");
	print gettype( $alfanumerik ) ; //alfan�merik/string
	print "<br>";
	print "<br>";

	$ondalik  = 5.1234;
	print "���nc� de�i�kenin ad�: \$ondalik<br>";
	print "De�eri : ";
	print "$ondalik<br>";
	print("T�r� : ");
	print gettype( $ondalik ) ; //�ift,ondal�k/double
	print "<br>";
	print "<br>";

	$mantiksal  = false;
	print "���nc� de�i�kenin ad�: \$mantiksal<br>";
	print "De�eri : ";
	print "$mantiksal<br>";
	print("T�r� : ");
	print gettype( $mantiksal ) ; //mant�ksal/boolean
	print "<br>";
	print "<br>";
?>
</H2>
</B>
</BODY>
</HTML>
