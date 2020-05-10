<?
// Body {{{1
$styleBody = 'width:100%;';
$classBody = 'fa';

// Panel {{{1
$stylePaddingBottom = "padding-bottom:25px;";
$stylePaddingTop = "padding-top:25px;";
$styleFontWeight = "font-weight:bold;";
$styleFontP = $styleFontWeight;
$styleFontP .= "font-size:20px;";

// Address
// $styleAddress = $stylePaddingTop;
$styleAddress = $stylePaddingBottom;
$classAddress = "text-center";

// Background
$background = $img . "/chalkboard.jpg";
$styleBackground = "position:fixed;";
$styleBackground .= "left:-100px;";
$styleBackground .= "top:0;";
$styleBackground .= "height:110%;";
$styleBackground .= $styleBody;
$styleBackground .= "width:2500px;";
$styleBackground .= "background-image:url('" . $background . "');";
$styleBackground .= "background-size: cover;";

// Nav
$styleNavTop = "1%";
// $styleNav .= 'background-color:#aaaa33;';
$styleNav .= 'background-color:#ffffff;';
$styleNav .= 'opacity:0.66;';
$styleNav .= "border-radius:10%;";
$styleNav .= 'top: -' . $styleNavTop . ';';
$styleNav .= "transform: translateY(" . $styleNavTop . ");";

$styleNavLinks .= 'background-color: transparent;';
$styleNavLinks .= 'font-size:1.5em;';
$styleNavLinks .= 'font-weight:bold;';
$styleNavLinks .= 'color: #000000;';
$classNavLinks .= 'navbar-nav ';
$classNavLinks .= 'ml-auto ';

// Phone
$stylePhone = $stylePaddingTop;
$stylePhone .= $stylePaddingBottom;
$classPhone = "text-center";

// Maps
// $styleMaps = $stylePaddingTop;
$styleMaps = $stylePaddingBottom;
$styleMaps .= 'width:75%;';
$classMaps = "";

// Menu
$styleNavMenu = "position:fixed;";
$styleNavMenu .= "top:100px;";
$styleNavMenu .= "left:0;";
$styleNavMenu .= "width:50px;";
$styleNavMenu .= "height:200px;";
$classNavMenu = "";

// Order Form
$styleOrderForm = "width:95%;";
$styleOrderForm .= "border-radius:2%;";
$styleOrderForm .= $stylePaddingBottom;

// Panel {{{2
$stylePanel = $styleBody;
$classPanel = "container-fluid ";

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
