<HTML>
<HEAD>
<TITLE>PHP'de Degisken Turu Degistirme</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>
<B>
<H2>
<?php
	$degisken  = 5.67890;
	print("De�i�kenin  de�eri : ");
	print "$degisken<br>";
	print("T�r� : ");
	print gettype( $degisken ) ; //�ift,ondal�k/double
	print "<br>";
	print "<br>";

	print "�lk de�i�tirme i�lemi: Alfan�merik/String:<br>";
	settype( $degisken, string ); //alfan�merik/string
	print "De�eri : ";
	print "$degisken<br>";
	print("T�r� : ");
	print gettype( $degisken ) ; //alfan�merik/string
	print "<br>";
	print "<br>";

	print "�kinci de�i�tirme i�lemi: Tamsay�/Integer:<br>";
	settype( $degisken, integer ); //Tamsay�/Integer
	print "De�eri : ";
	print "$degisken<br>";
	print("T�r� : ");
	print gettype( $degisken ) ; //Tamsay�/Integer
	print "<br>";
	print "<br>";

	print "���nc� de�i�tirme i�lemi: Ondal�k/Double:<br>";
	settype( $degisken, double ); //�ift,ondal�k/double
	print "De�eri : ";
	print "$degisken<br>";
	print("T�r� : ");
	print gettype( $degisken ) ; //�ift,ondal�k/double
	print "<br>";
	print "<br>";

	print "D�rd�nc� de�i�tirme i�lemi: Mant�ksal/Boolean:<br>";
	settype( $degisken, boolean ); // Mant�ksal/Boolean
	print "De�eri : ";
	print "$degisken<br>";
	print("T�r� : ");
	print gettype( $degisken ) ; // Mant�ksal/Boolean
	print "<br>";
	print "<br>";



?>
</H2>
</B>
</BODY>
</HTML>
