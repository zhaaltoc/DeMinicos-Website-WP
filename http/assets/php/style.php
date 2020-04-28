<?
// Full Call {{{1
$styleBold .= 'font-style:bold;';

$stylePFontSize .= 'font-size:1.3em;';
$stylePAFontSize .= 'font-size:1.4em;';

// General {{{1
// Font {{{2
$classFont .= '';
$styleFont .= '';
$styleFontP .= $styleFont;
$styleFontP .= $stylePFontSize;

// Custom {{{1
// Phone {{{2
$classPhone .= '';
$stylePhone .= '';
$stylePhoneP .= $stylePhone;
// $stylePhoneP .= $styleBold;
$stylePhoneP .= $stylePAFontSize;

// Hours {{{2
$styleHourRowMargin = 'margin-bottom:10px;';
$styleDays .= $styleHourRowMargin;
$styleDays .= $stylePAFontSize;
$styleDays .= $styleBold;
$styleHours .= $styleHourRowMargin;
$styleHours .= $stylePFontSize;
?>
