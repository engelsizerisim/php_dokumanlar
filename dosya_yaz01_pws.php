<HTML>
<HEAD>
<TITLE>PHP'de Dosya Yazma</TITLE>
<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-9\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">
</HEAD>
<h2>
<?php
$dosya_adi = "/inetpub/wwwroot/bir_dosya.txt";
$dosya = fopen ($dosya_adi , 'a') or die ("Dosya a��lamad�!");
$metin = "Bu sat�r dosyaya yaz�lacak: Merhaba D�nya!\n";	
fwrite ( $dosya , $metin ) ;
fputs (	 $dosya , "Bu sat�r ise sonradan eklenecek\n" ) ;
fclose ($dosya); 
?>

</h2>
</BODY>
</BODY>
</HTML>