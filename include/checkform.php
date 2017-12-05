<?php

if (!isset($checkLanguage)) {
    $checkLanguage = array(
        'auto' => 'Auto-detect',
        'ast' => 'Asturian',
        'be'  => 'Belarusian',
        'br'  => 'Breton',
        'ca'  => 'Catalan',
        'zh'  => 'Chinese',
        'da'  => 'Danish',
        'nl'  => 'Dutch',
        'en-US'  => 'English',
        'eo'  => 'Esperanto',
        'fr'  => 'French',
        'gl'  => 'Galician',
        'de-DE'  => 'German',
        'el'  => 'Greek',
        //'is'  => 'Icelandic',
        'it'  => 'Italian',
        'ja'  => 'Japanese',
        'km'  => 'Khmer',
        //'lt'  => 'Lithuanian',
        //'ml'  => 'Malayalam',
        'fa'  => 'Persian',
        'pl'  => 'Polish',
        'pt'  => 'Portuguese',
        'ro'  => 'Romanian',
        'ru'  => 'Russian',
        'sk'  => 'Slovak',
        'sl'  => 'Slovenian',
        'es'  => 'Spanish',
        'sv'  => 'Swedish',
        'ta'  => 'Tamil',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainian'
    );
}

function printLangOption($langCode) {
    global $checkDefaultLang;
    global $checkLanguage;
    
    //print "checkDefaultLang: $checkDefaultLang";

    if (strpos($langCode, '-') !== false) {
        // e.g. de-DE
        $shortLangCode = substr($langCode, 0, strpos($langCode, '-'));
        $checked = ($shortLangCode == $checkDefaultLang) ? " selected='selected'" : "";
    } else {
        $checked = ($langCode == $checkDefaultLang) ? " selected='selected'" : "";
    }

    $lang = $checkLanguage[$langCode];
    print "<option value=\"$langCode\" $checked>$lang</option>\n";
}
?>

<noscript class="warning">Please turn on Javascript to use this form, or use <a href="https://community.languagetool.org/homepage/simpleCheck">the fallback form</a></noscript>

<!--<script>
    if (navigator.userAgent.indexOf("Edge/") !== -1 || navigator.userAgent.indexOf("Trident/") !== -1) {
        document.write('<div class="warning">Note: MSIE and Edge browsers currently don\'t work with this page. Please download the stand-alone version of LanguageTool or use <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a> instead</div>');
    }
</script>-->

<form id="checkform" class="" name="checkform" action="#" method="post">
    <div id="handle"><div id="feedbackMessage"></div></div>
    <div class="window">
        <div class="fullscreen-toggle">
            <?php
            if (!isset($toggleFullscreenMode)) {
                $toggleFullscreenMode = "toggle fullscreen mode";
            }
            ?>
            <a href="#" title="<?= $toggleFullscreenMode ?>" onClick="fullscreen_toggle();return false;"></a>
        </div>
        <p id="checktextpara" style="margin: 0">
            <?php
            require_once("default_texts.php");
            if (isset($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], "http://www.openthesaurus.de") === 0 || strpos($_SERVER['HTTP_REFERER'], "https://www.openthesaurus.de") === 0) 
                && isset($_POST['text'])) {
              // This is just a test! Please don't rely on this!
              $checkDefaultText = htmlspecialchars($_POST['text']);
            } else {
              $checkDefaultText = getDefaultDemoText($checkDefaultLang);
              if ($checkDefaultText == "") {
                // fallback to English:
                $checkDefaultText = getDefaultDemoText("en");
              }
              if (isset($_GET['empty'])) {
                $checkDefaultText = "";
              }
            }
            ?>
            <textarea id="checktext" name="text" style="width: 100%" rows="10"><?= $checkDefaultText ?></textarea>
        </p>
        <div id="editor_controls">
            <!--
            <div class="message">
                <?php if ($checkDefaultLang == "en-US") { ?>
                    Error not found? <a href="http://wiki.languagetool.org/development-overview#toc0">Improve LanguageTool by writing rules that detect errors</a>. The form doesn't work for you? Please use <a href="simple-check/">the fallback form</a>.
                <?php } ?>
            </div>
            -->
            <div id="feedbackErrorMessage"></div>
            <div id="sentenceContributionMessage"></div>
            <div class="dropdown">
                <select class="dropkick" name="lang" id="lang">
                    <?php
                    foreach ($checkLanguage as $key => $val) {
                        printLangOption($key);
                    }
                    ?>
                </select>
                <?php
                $displayValue = "none";
                if ($checkDefaultLang == 'en' || $checkDefaultLang == 'de' || $checkDefaultLang == 'pt' || $checkDefaultLang == 'ca') {
                    $displayValue = "block";
                }
                ?>
                <div id="subLangDropDown" style="display: <?= $displayValue ?>;float:left;margin-left:6px">
                    <!-- NOTE: keep this in sync with header.php and the if() above: -->
                    <select class="dropkick" name="subLang" id="subLang">
                        <?php if ($checkDefaultLang == 'en') { ?>
                            <option>US</option>
                            <option>GB</option>
                            <option>AU</option>
                            <option>CA</option>
                            <option>NZ</option>
                            <option>ZA</option>
                        <?php } else if ($checkDefaultLang == 'de') { ?>
                            <option>DE</option>
                            <option>AT</option>
                            <option>CH</option>
                        <?php } else if ($checkDefaultLang == 'pt') { ?>
                            <option>PT</option>
                            <option>BR</option>
                            <option>AO</option>
                            <option>MZ</option>
                        <?php } else if ($checkDefaultLang == 'ca') { ?>
                            <option>ES</option>
                            <option>ES-Valencia</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="submit">
              <?php if (isset($isProofreadingTest) && $isProofreadingTest) { ?>
                <button class="proofread" type="submit" 
                  onClick="proofread();" title="Have your text checked by an expert">
                    Proofread by an Expert
                    <span class="startPrice">Starting at USD 5</span>
                </button>
              <?php } ?>
                <?php if ($_SERVER['REQUEST_URI'] == "/") { ?>
                    <button class="upgrade" type="submit" onClick="if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'UpgradeClick']); } document.getElementById('pricing').scrollIntoView(); return false;">
                        Upgrade
                    </button>
                <?php } ?>
                <button type="submit" name="_action_checkText"
                  onClick="doit(true);return false;" title="<?= isset($checkSubmitButtonTitle) ? $checkSubmitButtonTitle : '' ?>">
                    <?= $checkSubmitButtonValue ?>
                    <!--<span class="checkButtonDetail">Instant and free</span>--> 
                </button>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</form>
