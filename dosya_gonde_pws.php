<HTML>
<HEAD>
<TITLE>PHP'de Gonderme</TITLE>
<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-9\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">
</HEAD>

<?php
$dosya_dizin = "/inetpub/wwwroot/";
$dosya_url = "http://server/";

if ( isset ( $dosya_gonder )) {

	print ("<b>Yol:</b> $dosya_gonder<br>\n");
	print ("<b>Ad�:</b> $dosya_gonder_name<br>\n");
	print ("<b>Boyut:</b> $dosya_gonder_size<br>\n");
	print ("<b>T�r:</b> $dosya_gonder_type<br>\n");
	copy ( $dosya_gonder, "$dosya_dizin/$dosya_gonder_name" )or die ("Dosya kopyalanam�yor!");
	
		if ( $dosya_gonder_type == "image/gif" ||$dosya_gonder_type == "image/pjpeg"  ) {
		print ("<img src=\"$dosya_url/$dosya_gonder_name\"><p>\n\n");
		}
}

?>
</BODY>
<FORM  ENCTYPE="multipart/form-data" ACTION="<?php print $PHP_SELF?>" METHOD="POST">
<INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" VALUE="951200">
<INPUT TYPE="file" NAME="dosya_gonder"><BR>
<INPUT TYPE="SUBMIT" VALUE="Dosya Yolla!">
</FORM>
</BODY>
</HTML>