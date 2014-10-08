<!doctype html>
<html lang=en>
<head>
    <?php
    $enable_tablesorter = 1;
    $page = "other";
    $title = "LanguageTool Supported Languages";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

<p>LanguageTool supports several languages to a different degree. This page lists the
number of rules per language to give a very rough indication of how well a
language is supported. If your language is not supported, see <a href="http://wiki.languagetool.org/development-overview#toc0">our three-minute introduction</a>
on writing error detection rules. Of course you're welcome to improve and add rules for the existing languages, too.</p>

<!-- Output of RuleOverview.java: -->

<b>Rules in LanguageTool 2.7</b><br />
Date: 2014-09-29<br /><br />

<table class="tablesorter sortable" style="width: auto">
    <thead>
    <tr>
        <th valign='bottom' width="200">Language</th>
        <th valign='bottom' align="left" width="60">XML<br/>rules</th>
        <th></th>
        <th align="left" width="60">Java<br/>rules</th>
        <th align="left" width="60">False<br/>friends</th>
        <th valign='bottom' align="left" width="70">Activity</th>
        <th valign='bottom' align="left">Rule Maintainers</th>
    </tr>
    </thead>
    <tbody>
    <tr><td valign="top">Asturian </td><td valign="top" align="right">61</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ast">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ast/src/main/resources/org/languagetool/rules/ast/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Xesús González Rato</td></tr>
    <tr><td valign="top">Belarusian </td><td valign="top" align="right">7</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=be">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/be/src/main/resources/org/languagetool/rules/be/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Alex Buloichik - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for co-maintainer</a></span></td></tr>
    <tr><td valign="top"><a href="../br/">Breton</a></td><td valign="top" align="right">663</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=br">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/br/src/main/resources/org/languagetool/rules/br/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/br/src/main/java/org/languagetool/rules/br/">2</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>40</span><img title='40 commits in the last 6 months' src='../images/bar.png' width='20' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a>, Fulup Jakez</td></tr>
    <tr><td valign="top"><a href="../ca/">Catalan</a><br/><span class='langVariants'>Variants for: Catalan, Valencian</span></td><td valign="top" align="right">2017</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ca">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ca/src/main/resources/org/languagetool/rules/ca/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ca/src/main/java/org/languagetool/rules/ca/">11</a></td><td valign="top" align="right">4</td><td valign="top" align="right"><span style='display:none'>327</span><img title='327 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='327 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Ricard Roca, Jaume Ortolà</td></tr>
    <tr><td valign="top"><a href="../zh/">Chinese</a></td><td valign="top" align="right">786</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=zh">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/zh/src/main/resources/org/languagetool/rules/zh/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Tao Lin - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for co-maintainer</a></span></td></tr>
    <tr><td valign="top">Danish </td><td valign="top" align="right">78</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=da">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/da/src/main/resources/org/languagetool/rules/da/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">6</td><td valign="top" align="right"><span style='display:none'>2</span><img title='2 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Esben Aaberg, Henrik Bendt - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for co-maintainer</a></span></td></tr>
    <tr><td valign="top"><a href="../nl/">Dutch</a></td><td valign="top" align="right">602</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=nl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/nl/src/main/resources/org/languagetool/rules/nl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/nl/src/main/java/org/languagetool/rules/nl/">3</a></td><td valign="top" align="right">19</td><td valign="top" align="right"><span style='display:none'>19</span><img title='19 commits in the last 6 months' src='../images/bar.png' width='9' height='10'/></td><td valign="top" align="left"><a href="http://www.opentaal.org">OpenTaal</a>, <a href="http://www.taaltik.nl">TaalTik</a></td></tr>
    <tr><td valign="top">English <br/><span class='langVariants'>Variants for: Australian, Canadian, GB, New Zealand, South African, US</span></td><td valign="top" align="right">1106</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=en">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/resources/org/languagetool/rules/en/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/java/org/languagetool/rules/en/">10</a></td><td valign="top" align="right">331</td><td valign="top" align="right"><span style='display:none'>91</span><img title='91 commits in the last 6 months' src='../images/bar.png' width='45' height='10'/></td><td valign="top" align="left"><a href="http://marcinmilkowski.pl">Marcin Miłkowski</a>, <a href="http://www.danielnaber.de">Daniel Naber</a> - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top"><a href="../eo/">Esperanto</a></td><td valign="top" align="right">345</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=eo">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/eo/src/main/resources/org/languagetool/rules/eo/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/eo/src/main/java/org/languagetool/rules/eo/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>20</span><img title='20 commits in the last 6 months' src='../images/bar.png' width='10' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
    <tr><td valign="top"><a href="../fr/">French</a></td><td valign="top" align="right">2463</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=fr">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fr/src/main/resources/org/languagetool/rules/fr/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fr/src/main/java/org/languagetool/rules/fr/">3</a></td><td valign="top" align="right">6</td><td valign="top" align="right"><span style='display:none'>164</span><img title='164 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='164 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a>, Agnes Souque, Hugo Voisard&nbsp;(2006-2007)</td></tr>
    <tr><td valign="top">Galician </td><td valign="top" align="right">153</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=gl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/gl/src/main/resources/org/languagetool/rules/gl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/gl/src/main/java/org/languagetool/rules/gl/">2</a></td><td valign="top" align="right">113</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Susana Sotelo Docío - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for co-maintainer</a></span></td></tr>
    <tr><td valign="top"><a href="../de/">German</a><br/><span class='langVariants'>Variants for: Austria, Germany, Swiss</span></td><td valign="top" align="right">1910</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=de">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/de/src/main/resources/org/languagetool/rules/de/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/de/src/main/java/org/languagetool/rules/de/">16</a></td><td valign="top" align="right">95</td><td valign="top" align="right"><span style='display:none'>93</span><img title='93 commits in the last 6 months' src='../images/bar.png' width='46' height='10'/></td><td valign="top" align="left">Jan Schreiber, Markus Brenneis, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
    <tr><td valign="top">Greek </td><td valign="top" align="right">20</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=el">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/el/src/main/resources/org/languagetool/rules/el/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/el/src/main/java/org/languagetool/rules/el/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>1</span><img title='1 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Panagiotis Minos</td></tr>
    <tr><td valign="top">Icelandic </td><td valign="top" align="right">39</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=is">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/is/src/main/resources/org/languagetool/rules/is/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Anton Karl Ingason - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top"><a href="../it/">Italian</a></td><td valign="top" align="right">134</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=it">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/it/src/main/resources/org/languagetool/rules/it/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/it/src/main/java/org/languagetool/rules/it/">1</a></td><td valign="top" align="right">37</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Paolo Bianchini</td></tr>
    <tr><td valign="top">Japanese </td><td valign="top" align="right">43</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ja">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ja/src/main/resources/org/languagetool/rules/ja/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>1</span><img title='1 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Takahiro Shinkai - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top">Khmer </td><td valign="top" align="right">31</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=km">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/km/src/main/resources/org/languagetool/rules/km/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/km/src/main/java/org/languagetool/rules/km/">5</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Nathan Wells</td></tr>
    <tr><td valign="top">Lithuanian </td><td valign="top" align="right">4</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=lt">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/lt/src/main/resources/org/languagetool/rules/lt/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Mantas Kriaučiūnas - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top">Malayalam </td><td valign="top" align="right">18</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ml">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ml/src/main/resources/org/languagetool/rules/ml/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Jithesh.V.S - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top">Persian </td><td valign="top" align="right">284</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=fa">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fa/src/main/resources/org/languagetool/rules/fa/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fa/src/main/java/org/languagetool/rules/fa/">7</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>5</span><img title='5 commits in the last 6 months' src='../images/bar.png' width='2' height='10'/></td><td valign="top" align="left">Reza1615, Alireza Eskandarpour Shoferi, Ebrahim Byagowi</td></tr>
    <tr><td valign="top"><a href="../pl/">Polish</a></td><td valign="top" align="right">1251</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=pl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/resources/org/languagetool/rules/pl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/java/org/languagetool/rules/pl/">5</a></td><td valign="top" align="right">139</td><td valign="top" align="right"><span style='display:none'>151</span><img title='151 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='151 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left"><a href="http://marcinmilkowski.pl">Marcin Miłkowski</a></td></tr>
    <tr><td valign="top"><a href="../pt/">Portuguese</a><br/><span class='langVariants'>Variants for: Brazil, Portugal</span></td><td valign="top" align="right">162</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=pt">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pt/src/main/resources/org/languagetool/rules/pt/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pt/src/main/java/org/languagetool/rules/pt/">3</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>16</span><img title='16 commits in the last 6 months' src='../images/bar.png' width='8' height='10'/></td><td valign="top" align="left"><a href="http://www.marcoagpinto.com/">Marco A.G. Pinto</a> - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for a maintainer for Brazilian Portuguese</a></span></td></tr>
    <tr><td valign="top">Romanian </td><td valign="top" align="right">458</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ro">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ro/src/main/resources/org/languagetool/rules/ro/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ro/src/main/java/org/languagetool/rules/ro/">3</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><a href="http://www.archeus.ro">Ionuț Păduraru</a> - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top"><a href="../ru/">Russian</a></td><td valign="top" align="right">325</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ru">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ru/src/main/resources/org/languagetool/rules/ru/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ru/src/main/java/org/languagetool/rules/ru/">5</a></td><td valign="top" align="right">23</td><td valign="top" align="right"><span style='display:none'>35</span><img title='35 commits in the last 6 months' src='../images/bar.png' width='17' height='10'/></td><td valign="top" align="left"><a href="http://myooo.ru/content/view/83/43/">Yakov Reztsov</a></td></tr>
    <tr><td valign="top">Slovak </td><td valign="top" align="right">55</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sk">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sk/src/main/resources/org/languagetool/rules/sk/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sk/src/main/java/org/languagetool/rules/sk/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><a href="http://sk-spell.sk.cx">Zdenko Podobný</a></td></tr>
    <tr><td valign="top">Slovenian </td><td valign="top" align="right">85</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sl/src/main/resources/org/languagetool/rules/sl/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Martin Srebotnjak</td></tr>
    <tr><td valign="top"><a href="../es/">Spanish</a></td><td valign="top" align="right">99</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=es">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/es/src/main/resources/org/languagetool/rules/es/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">35</td><td valign="top" align="right"><span style='display:none'>11</span><img title='11 commits in the last 6 months' src='../images/bar.png' width='5' height='10'/></td><td valign="top" align="left"><a href="http://languagetool-es.blogspot.com/">Juan Martorell</a></td></tr>
    <tr><td valign="top">Swedish </td><td valign="top" align="right">26</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sv">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sv/src/main/resources/org/languagetool/rules/sv/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sv/src/main/java/org/languagetool/rules/sv/">1</a></td><td valign="top" align="right">5</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Niklas Johansson - <span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for new maintainer</a></span></td></tr>
    <tr><td valign="top">Tagalog </td><td valign="top" align="right">44</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=tl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/tl/src/main/resources/org/languagetool/rules/tl/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/">Nathaniel Oco</a>, <a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/faculty/borra.asp">Allan Borra</a></td></tr>
    <tr><td valign="top">Tamil </td><td valign="top" align="right">210</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ta">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ta/src/main/resources/org/languagetool/rules/ta/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>52</span><img title='52 commits in the last 6 months' src='../images/bar.png' width='26' height='10'/></td><td valign="top" align="left">Elanjelian Venugopal</td></tr>
    <tr><td valign="top"><a href="../uk/">Ukrainian</a></td><td valign="top" align="right">253</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=uk">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/uk/src/main/resources/org/languagetool/rules/uk/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/uk/src/main/java/org/languagetool/rules/uk/">5</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>35</span><img title='35 commits in the last 6 months' src='../images/bar.png' width='17' height='10'/></td><td valign="top" align="left">Andriy Rysin, Maksym Davydov</td></tr>
    </tbody>
</table>

<!-- End Output of RuleOverview.java -->

<p>The number of Java rules listed is only the number of rules specific
to that language. There are some rules that deal with punctuation
and that apply to almost all languages. The "Activity" column counts
the number of changes to the rules of that language in the last 6 months.</p>

<p>
<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-core/src/main/resources/org/languagetool/rules/false-friends.xml">Show false friend rules source code file</a>
</p>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
