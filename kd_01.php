<?php
if ( isset ( $HTTP_POST_VARS )) {
// Form doldurulduktan sonra
	echo ("
	<HTML>
	<HEAD>
	<TITLE>PHP'de Misafir Defteri</TITLE>
	<meta http-equiv='content-type' content=\"text/html; charset=ISO-8859-9\">
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">
	</HEAD>
	<BODY>
	<P><font size='3' class='s4' face='Arial, Helvetica'>
	");

$dosya_adi = "mesajlar.txt";
if (file_exists("$dosya_adi")) {
	$yazilacak_dosya = fopen($dosya_adi,'a');
	}
else {
	$yazilacak_dosya = fopen($dosya_adi,'w');
	}
foreach ($HTTP_POST_VARS as $anahtar=>$deger ) {
			$yeni_anahtar = strtoupper($anahtar);
			print ("$yeni_anahtar: $deger<br>");
			$metin = "$yeni_anahtar: $deger<br>";
			fputs($yazilacak_dosya, $metin);
			}
			fputs($yazilacak_dosya, date("D d M Y h:i:s"));
			fputs($yazilacak_dosya, "<br>\n");
			fputs($yazilacak_dosya, "<center><img src='nokta.gif' width=100% height=1 border=0></center>\n");
fclose($yazilacak_dosya);
	
	
echo ("
	<HTML>
	<HEAD>
	<TITLE>PHP'de Misafir defteri</TITLE>
	<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-9\">
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">
	</HEAD>
	<BODY>
	<P><font size='3' class='s4' face='Arial, Helvetica'>
	<center><img src='nokta.gif' width=100% height=1 border=0></center>
	Say�n: $adi<br>
	Defterimi imzalad���n�z i�in te�ekk�r ederim</P>
	<p>Ana Sayfaya D�nmek i�in <A HREF=\"index.htm\"> t�klay�n</A><BR>
	Mesajlar� okumak i�in<A HREF=\"mesajlar01.php\"> t�klay�n</A>
	</BODY>
	</HTML>
	");
}

// Sayfa yeni a��l�yorsa	

else {

	echo ("
	<HTML>
	<HEAD>
	<TITLE>PHP'de Formlar</TITLE>
	<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-9\">
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">
	</HEAD>
	<BODY>
	<FORM ACTION=\"$PHP_SELF\" METHOD=\"POST\">
	<P><font size='3' class='s4' face='verdana, Arial, Helvetica'>Defteri imzalamadan okumak i�in <a href='mesajlar.php'>buray� t�klay�n</a></FONT></P>
	<P><font size='3' class='s4' face='Arial, Helvetica'>
	Ad�n�z, Soyad�n�z: <br><INPUT TYPE=\"TEXT\" NAME=\"adi\"><BR>
	Elektronik Adresiniz: <br><INPUT TYPE=\"TEXT\" NAME=\"adres\"><BR>
	Mesaj�n�z:<BR><TEXTAREA NAME=\"mesaj\" ROWS=10 COLS=30 WRAP=virtual></TEXTAREA>
	<BR><BR><BR>
	<INPUT TYPE=\"SUBMIT\" VALUE=\"Defteri imzala!\"> <INPUT TYPE=\"RESET\" VALUE=\"T�m�n� sil!\">
	</FORM>
	</BODY>
	</HTML>
	");
}
?>