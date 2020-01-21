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

// Başka kodlar buraya girebilir

	yazdir("Bu Başlık", 5 );
	yazdir("Bu küçük boyutta bir metin", 2);
	yazdir("Bu varsayılan boyutta bir metin");
	yazdir("Bu çok büyük Başlık", 8);
	yazdir("Bu uzun bir paragraf metni. Boyutu varsayılan ölçüde. Bu uzun bir paragraf metni. Boyutu varsayılan ölçüde. Bu uzun bir paragraf metni. Boyutu varsayılan ölçüde. ");


?>

</BODY>
</HTML>