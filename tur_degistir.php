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
	print("Değişkenin  değeri : ");
	print "$degisken<br>";
	print("Türü : ");
	print gettype( $degisken ) ; //çift,ondalık/double
	print "<br>";
	print "<br>";

	print "İlk değiştirme işlemi: Alfanümerik/String:<br>";
	settype( $degisken, string ); //alfanümerik/string
	print "Değeri : ";
	print "$degisken<br>";
	print("Türü : ");
	print gettype( $degisken ) ; //alfanümerik/string
	print "<br>";
	print "<br>";

	print "İkinci değiştirme işlemi: Tamsayı/Integer:<br>";
	settype( $degisken, integer ); //Tamsayı/Integer
	print "Değeri : ";
	print "$degisken<br>";
	print("Türü : ");
	print gettype( $degisken ) ; //Tamsayı/Integer
	print "<br>";
	print "<br>";

	print "Üçüncü değiştirme işlemi: Ondalık/Double:<br>";
	settype( $degisken, double ); //çift,ondalık/double
	print "Değeri : ";
	print "$degisken<br>";
	print("Türü : ");
	print gettype( $degisken ) ; //çift,ondalık/double
	print "<br>";
	print "<br>";

	print "Dördüncü değiştirme işlemi: Mantıksal/Boolean:<br>";
	settype( $degisken, boolean ); // Mantıksal/Boolean
	print "Değeri : ";
	print "$degisken<br>";
	print("Türü : ");
	print gettype( $degisken ) ; // Mantıksal/Boolean
	print "<br>";
	print "<br>";



?>
</H2>
</B>
</BODY>
</HTML>
