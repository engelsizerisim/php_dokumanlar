<HTML>
<HEAD>
<TITLE>PHP'de Fonksiyon</TITLE>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-9">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</HEAD>
<BODY>

<?php

function yazdir ($metin, $boyut=3) {
	print ("<font size=\"$boyut\">$metin</font><br>");
	}

// Ba�ka kodlar buraya girebilir

	yazdir("Bu Ba�l�k", 5 );
	yazdir("Bu k���k boyutta bir metin", 2);
	yazdir("Bu varsay�lan boyutta bir metin");
	yazdir("Bu �ok b�y�k Ba�l�k", 8);
	yazdir("Bu uzun bir paragraf metni. Boyutu varsay�lan �l��de. Bu uzun bir paragraf metni. Boyutu varsay�lan �l��de. Bu uzun bir paragraf metni. Boyutu varsay�lan �l��de. ");


?>

</BODY>
</HTML>