<?php

// Form doldurulduktan sonra program buradan ba�l�yor
if ( isset ( $HTTP_POST_VARS )) {

	$veri_yolu = mysql_connect("server", "root");
	if ( ! $veri_yolu ) die ("MySQL ile veri ba�lant�s� kurulam�yor!");
	mysql_select_db("veri" , $veri_yolu) or die ("Veritaban�na ula��lam�yor!" . mysql_error() );
	$ekle = mysql_query("INSERT INTO calisanlar ( adi , soyadi , adres , pozisyon ) VALUES ('$adi', '$soyadi', '$adres', '$pozisyon' )", $veri_yolu );

echo ("
	<HTML>
	<HEAD>
	<TITLE>PHP'de Veritaban�</TITLE>
	<meta http-equiv='content-type' content='text/html; charset=ISO-8859-9'>
	<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>

	<style>
	<!--

	a:link    { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: none; color: #000000 }
	a:active  { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: none; color: #ff0000 }
	a:visited { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: none; color: #000080 }
	a:hover   { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: underline; color: #ff0000 }

	td 
	{ 
	BACKGROUND-COLOR: #bbbbff;
	BORDER-BOTTOM: #000080 1px solid;
	BORDER-TOP: #0000ff 1px solid;
	BORDER-LEFT: #0000ff 1px solid;
	BORDER-RIGHT: #000080 1px solid;
	font-family: verdana;
	font-size: 11px; 
	font-weight: bold; 
	color: #0000ff
	CURSOR: arrow; 
	}

	.baslik 
	{
    BACKGROUND-COLOR: #0099ff;
    BORDER-BOTTOM: #003399 2px solid;
    BORDER-LEFT: #99ccff 2px solid;
    BORDER-RIGHT: #003399 2px solid;
    BORDER-TOP: #99ccff 2px solid;
    COLOR: white;
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    FONT-SIZE: 11px;
    FONT-WEIGHT: bold;
    HEIGHT: 20px;
    LETTER-SPACING: 0.2pt;
    LINE-HEIGHT: 10pt;
    MARGIN: 0px;
    PADDING-TOP: 1px;
    TEXT-DECORATION: none;
    TEXT-ALIGN: center
	}
	-->
	</style>
	</HEAD>
	<BODY>
	<p class='baslik'><FONT COLOR='#FFFFFF'><B>�yelerimiz aras�na siz de kat�ld�n�z</B></FONT></P>
	");

$sonuc = mysql_query("SELECT * FROM calisanlar", $veri_yolu);
echo ("<TABLE BORDER='0' BORDERCOLOR='blue' CELLSPACING='7' CELLPADDING='1'>\n");
echo ("
		<TR>
			<TD class='baslik'><FONT COLOR='#FFFFFF'><B>Uzman�n Ad�</B></FONT></TD>
			<TD class='baslik'><FONT COLOR='#FFFFFF'><B>�al��t��� Yer</B></FONT></TD>
			<TD class='baslik'><FONT COLOR='#FFFFFF'><B>G�revi</B></FONT></TD>
		</TR>
	\n");
while ($satir = mysql_fetch_row($sonuc)) {
	printf("<TR><TD ALIGN='left'>%s %s</TD><TD ALIGN='left'>%s</TD></TD><TD ALIGN='left'>%s</TD></TR>\n", $satir[1], $satir[2], $satir[3], $satir[4]);
	}
echo ("
		</TABLE>\n
		<p class='baslik'><FONT COLOR='#FFFFFF'><B>Te�ekk�r ederiz.</B></FONT></P>
		<A HREF='index.php'>Ana sayfaya d�nmek i�in t�klay�n�z</A>
	
		");


}
// program ilk kez a��l�yorsa buradan ba�layacak

else {

echo ("
	<HTML>
	<HEAD>
	<TITLE>PHP'de Veritaban�</TITLE>
	<meta http-equiv='content-type' content='text/html; charset=ISO-8859-9'>
	<meta http-equiv='Content-Type' content='text/html; charset=windows-1254'>

	<style>
	<!--

	a:link    { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: none; color: #000000 }
	a:active  { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: none; color: #ff0000 }
	a:visited { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: none; color: #000080 }
	a:hover   { font-family: Verdana; font-size: 11px; font-weight: bold; text-decoration: underline; color: #ff0000 }

	td 
	{ 
	BACKGROUND-COLOR: #bbbbff;
	BORDER-BOTTOM: #000080 1px solid;
	BORDER-TOP: #0000ff 1px solid;
	BORDER-LEFT: #0000ff 1px solid;
	BORDER-RIGHT: #000080 1px solid;
	font-family: verdana;
	font-size: 11px; 
	font-weight: bold; 
	color: #0000ff
	CURSOR: arrow; 
	}

	.baslik 
	{
    BACKGROUND-COLOR: #0099ff;
    BORDER-BOTTOM: #003399 2px solid;
    BORDER-LEFT: #99ccff 2px solid;
    BORDER-RIGHT: #003399 2px solid;
    BORDER-TOP: #99ccff 2px solid;
    COLOR: white;
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    FONT-SIZE: 11px;
    FONT-WEIGHT: bold;
    HEIGHT: 20px;
    LETTER-SPACING: 0.2pt;
    LINE-HEIGHT: 10pt;
    MARGIN: 0px;
    PADDING-TOP: 1px;
    TEXT-DECORATION: none;
    TEXT-ALIGN: center
	}
	-->
	</style>
	</HEAD>
	<BODY>
	<p class='baslik'><FONT COLOR='#FFFFFF'><B>Mevcut �yelerimiz</B></FONT></P>
");

$veri_yolu = mysql_connect("server", "root");
mysql_select_db("veri", $veri_yolu);
$sonuc = mysql_query("SELECT * FROM calisanlar", $veri_yolu);
echo ("<TABLE BORDER='0' BORDERCOLOR='blue' CELLSPACING='7' CELLPADDING='1'>\n");
echo ("
		<TR>
			<TD class='baslik'><FONT COLOR='#FFFFFF'><B>Uzman�n Ad�</B></FONT></TD>
			<TD class='baslik'><FONT COLOR='#FFFFFF'><B>�al��t��� Yer</B></FONT></TD>
			<TD class='baslik'><FONT COLOR='#FFFFFF'><B>G�revi</B></FONT></TD>
		</TR>
	\n");
while ($satir = mysql_fetch_row($sonuc)) {
	printf("<TR><TD ALIGN='left'>%s %s</TD><TD ALIGN='left'>%s</TD></TD><TD ALIGN='left'>%s</TD></TR>\n", $satir[1], $satir[2], $satir[3], $satir[4]);
	}
echo ("

	</TABLE>\n
	<p></p>
	<p class='baslik'><FONT COLOR='#FFFFFF'><B>Siz de aram�za kat�lmak ister misiniz?</B></FONT></P>
	<FORM ACTION='$PHP_SELF' METHOD='POST'>
	<TABLE BORDER='0' BORDERCOLOR='blue' CELLSPACING='7' CELLPADDING='1'>
	<TR><TD class='baslik' ALIGN='left'>Ad�n�z: </TD><TD ALIGN='left'><INPUT TYPE='TEXT' NAME='adi'></TD></TR>
	<TR><TD class='baslik' ALIGN='left'>Soyad�n�z: </TD><TD ALIGN='left'><INPUT TYPE='TEXT' NAME='soyadi'></TD></TR>
	<TR><TD class='baslik' ALIGN='left'>�� Yeriniz: </TD><TD ALIGN='left'><INPUT TYPE='TEXT' NAME='adres'></TD></TR>
	<TR><TD class='baslik'ALIGN='left'>G�reviniz: </TD><TD ALIGN='left'><INPUT TYPE='TEXT' NAME='pozisyon'></TD></TR>
	<TR><TD ALIGN='center'><INPUT TYPE='SUBMIT' VALUE='Defteri imzala!'></TD><TD ALIGN='center'><INPUT TYPE='RESET' VALUE='T�m�n� sil!'></TD></TR>
	</TABLE>
	</FORM>
	</BODY>
	</HTML>
	");
} //else'in kapanan parantezi
?>