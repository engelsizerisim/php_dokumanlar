<HTML>
<HEAD>
<TITLE>PHP'de Degisken Turleri Kopyalama (Casting)</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>
<B>
<H2>
<?php
	$degisken  = 3.1418;
	print("De�i�kenin  de�eri : ");
	print "$degisken<br>";
	print("T�r� : ");
	print gettype( $degisken ) ; //�ift,ondal�k/double
	print "<br>";
	print "<br>";

	print "�lk kopyalama i�lemi: Alfan�merik/String:<br>";
	$kopya_degisken =  ( string ) $degisken; //alfan�merik/string
	print "De�eri : ";
	print "$kopya_degisken<br>";
	print("T�r� : ");
	print gettype( $kopya_degisken ) ; //alfan�merik/string
	print "<br>";
	print "<br>";

	print "�kinci kopyalama i�lemi: Tamsay�/Integer:<br>";
	$kopya_degisken =  ( integer ) $degisken; //Tamsay�/Integer
	print "De�eri : ";
	print "$kopya_degisken<br>";
	print("T�r� : ");
	print gettype( $kopya_degisken ) ; //Tamsay�/Integer
	print "<br>";
	print "<br>";

	print "���nc� de�i�tirme i�lemi: Ondal�k/Double:<br>";
	$kopya_degisken =  ( double ) $degisken; //�ift,ondal�k/double
	print "De�eri : ";
	print "$kopya_degisken<br>";
	print("T�r� : ");
	print gettype( $kopya_degisken ) ; //�ift,ondal�k/double
	print "<br>";
	print "<br>";

	print "D�rd�nc� kopyalama i�lemi: Mant�ksal/Boolean:<br>";
	$kopya_degisken =  ( boolean ) $degisken; // Mant�ksal/Boolean
	print "De�eri : ";
	print "$kopya_degisken<br>";
	print("T�r� : ");
	print gettype( $kopya_degisken ) ; // Mant�ksal/Boolean
	print "<br>";
	print "<br>";

?>
</H2>
</B>
</BODY>
</HTML>