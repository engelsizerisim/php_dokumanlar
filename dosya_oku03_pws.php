<HTML>
<HEAD>
<TITLE>PHP'de Dosya Okuma</TITLE>
<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-9\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">
</HEAD>
<h2>
<?php
$dosya_adi = "/inetpub/wwwroot/bir_dosya.txt";
if ($dosya = (fopen ($dosya_adi , 'r') ) ) {
	print ("Dosya a��ld�!<br>");
	}
	else {
	print ("Dosya a��lamad�!");
	}

while ( ! feof ($dosya) ) {
	$karakter = fgetc ( $dosya ) ;
	print ("$karakter<br>");
	}
fclose ($dosya); 
?>

</h2>
</BODY>
</BODY>
</HTML>