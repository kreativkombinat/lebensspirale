<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<title>Danke f&uuml;r Ihre Nachricht</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">


<style type="text/css">

body {
	margin-left: auto;
	margin-right: auto;
	margin-top: 60px;
}

</style>
</head>

<body>
<div class="container">



<?php 

$Name=$HTTP_POST_VARS['name'];
$eMail=$HTTP_POST_VARS['email'];
$Betreff=$HTTP_POST_VARS['subject'];
$Kommentar=$HTTP_POST_VARS['message'];

$text.="<b>Name: </b>";
$text.=$Name;
$text.="<br>";

$text.="<b>Betreff: </b>";
$text.=$Betreff;
$text.="<br>";

$text.="<b>Mail: </b>";
$text.=$eMail;
$text.="<p>";

$text.="<b>Ihr Kommentar: </b>";
$text.=$Kommentar;
$text.="<p>";


echo ("<h3> Vielen Dank f&uuml;r Ihre Nachricht </h3> <br> <h4> Sie haben folgende Daten in das Formular eingegeben:</h4>");

//echo("$text");
echo("<div class=\"well\">$text</div>");
echo("<h4>Wir beantworten Ihre Nachricht schnellst m&ouml;glich</h4>");
echo ("<a href='index.html'> Zur&uuml;ck zur Seite </a>");


$Mailtext.="Name: ";
$Mailtext.="$Name\r\n";

$Mailtext.="Betreff: ";
$Mailtext.="$Betreff\r\n";

$Mailtext.="Mail: ";
$Mailtext.="$eMail\r\n\r\n";

$Mailtext.="Kommentar: ";
$Mailtext.="$Kommentar\r\n";


$Absender="From:";
$Absender.=$eMail;


//mail("info@karlinger-gmbh.de", "Nachricht", $Mailtext, $Absender);
mail("lk@kreativkombinat.de", "Nachricht", $Mailtext, $Absender);

?>



</div>
</body>
</html>
