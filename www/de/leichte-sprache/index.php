<!doctype html>
<html lang=de>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $title = "LanguageTool - Prüfung auf Leichte Sprache";
    ?>
    <?php include("../../../include/header.php"); ?>
</head>
<body>
<?php include("../../../include/partials/nav.php"); ?>

<div id="textContent">

<p>Die Leichte Sprache ist eine besonders leicht verständliche Ausdrucksweise.
Es existiert kein offizieller Standard, was genau Leichte Sprache ausmacht, es gibt zur Orientierung allerdings 
einige Regeln. Mit dieser Seite können Sie LanguageTool benutzen, um Texte gegen einige (nicht alle) dieser
Regeln zu prüfen. Hier ist eine <a href="https://multisprech.org/einfache-sprache/einfach-schreiben/languagetool-leichte-sprache/">Übersicht der Regeln</a>. Mögliche Fehler werden farbig markiert. Durch Klick auf die markierten Wörter erhalten
Sie eine genauere Beschreibung des möglichen Problems. Mehr Informationen zu Leichter Sprache finden Sie beim
<a href="http://www.leichtesprache.org/">Netzwerk Leichte Sprache</a> und im Artikel
<a href="http://www.melaniesiegel.de/publications/2014_tekom_Lieske-Siegel.pdf">Verstehen leicht gemacht</a>.</p>

<?php
$checkSubmitButtonValue = "Text prüfen";
$checkDefaultLang = "de-DE-x-simple-language";
$checkLanguage = array(
    'de-DE-x-simple-language'  => 'Deutsch, Leichte Sprache'
);
include("../../../include/checkform-embedded.php");
?>

<p style="margin-top: 10px">Die normale Textprüfung ohne Berücksichtigung der Leichten Sprache finden Sie <a href="../">auf unserer deutschen Startseite</a>.</p>

</div>

<?php
include("../../../include/footer.php");
?>

</body>
</html>
